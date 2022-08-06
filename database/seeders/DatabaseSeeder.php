<?php

namespace Database\Seeders;

use App\Models\Rss;
use App\Models\Post;
use App\Models\Image;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Rss::create([
            'name' => 'Otomotif',
            'username' => 'otomotif',
            'url' => 'https://www.suara.com/rss/otomotif'
        ]);

        Rss::create([
            'name' => 'Berita Bisnis',
            'username' => 'bisnisnews',
            'url' => 'http://rss.tempo.co/bisnis'
        ]);

        Rss::create([
            'name' => 'Berita Politik',
            'username' => 'politicnews',
            'url' => 'https://news.un.org/feed/subscribe/en/news/region/middle-east/feed/rss.xml'
        ]);   

        $myXMLData = file_get_contents("https://www.suara.com/rss/otomotif");
        $myXMLData2 = file_get_contents("http://rss.tempo.co/bisnis");
        $myXMLData3 = file_get_contents("https://news.un.org/feed/subscribe/en/news/region/middle-east/feed/rss.xml");
        $xml = simplexml_load_string($myXMLData) or die("Error : Cannot create object");
        $xml2 = simplexml_load_string($myXMLData2) or die("Error : Cannot create object");
        $xml3 = simplexml_load_string($myXMLData3) or die("Error : Cannot create object");
        
        foreach ($xml3->channel->item as $item) {
            Post::create([
                'title' => $item->title,
                'category' => $item->category,
                'url' => $item->link,
                'img' => $item->enclosure['url'],
                'rss_id' => 3
            ]);
        }

        foreach ($xml2->channel->item as $item) {
            Post::create([
                'title' => $item->title,
                'category' => $item->category,
                'url' => $item->guid,
                'img' => $item->img,
                'rss_id' => 2
            ]);
        }

        foreach ($xml->channel->item as $item) {
            Post::create([
                'title' => $item->title,
                'category' => $item->category,
                'url' => $item->guid,
                'img' => $item->enclosure['url'],
                'rss_id' => 1
            ]);
        }
    }
}
