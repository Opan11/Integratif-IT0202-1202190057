Project 1 Tubes

Novandy Prakoso (1202190057)

Installation Laravel 8 on windows

1. Before installation Laravel 8, first check if XAMPP and Composer are already installed

![Screenshot 2022-05-31 121039](https://user-images.githubusercontent.com/94926477/171101053-1e93b681-068e-49eb-ab04-2e7ce3414e4d.png)

![Screenshot 2022-05-31 115251](https://user-images.githubusercontent.com/94926477/171101101-ef730477-6aac-441f-ba5f-d714b8d8f6e3.png)

2. If XAMPP and Composer are already installed, then we go to installation Laravel

   1. First go to Command Prompt type "cmd" then click "OK"

       ![Screenshot 2022-05-31 115413](https://user-images.githubusercontent.com/94926477/171101159-29ebc74c-fd43-44f2-84b4-af625c8dde07.png)

   2. Go to the directory that has been created

      ```markdown
      cd \xampp\htdocs
      ```

        ![Screenshot 2022-05-31 115514](https://user-images.githubusercontent.com/94926477/171101306-d10fcf95-958e-469a-b607-87545c60e3bf.png)

   3. Then use the command below to install Laravel

      ```markdown
      composer create-project --prefer-dist laravel/laravel Tubes
      ```

      ![Screenshot 2022-05-31 115845](https://user-images.githubusercontent.com/94926477/171101323-eb2f748f-b4ea-4b3b-b916-4565879d7410.png)

   4. After the Laravel file download process is complete, there will be a new folder in the file server directory with a name according to the project name that you previously specified in the /xampp/htdocs folder. At this time i named my folder with the name "Tubes"

      ![Screenshot 2022-05-31 115930](https://user-images.githubusercontent.com/94926477/171101344-693669e4-0b69-4969-979b-6b85e6a5f588.png)

   5. To ensure that Laravel is successfully installed and ready to use. use the command below to navigate to the directory you created earlier.

      ```markdown
      Php artisan serve
      ```

      ![Untitled](https://user-images.githubusercontent.com/94926477/171101359-170fa8de-f564-4f0f-be1a-a07ec29e7249.png)

   6. You will be directed to the server address, which is 127.0.0.1:8000.
      then open the address in your browser

      ![Screenshot 2022-05-31 120125](https://user-images.githubusercontent.com/94926477/171101414-9a2d48d5-ea47-449f-9864-875966b8a499.png)
   7. Laravel ready use.

## Struktur Database

Database yang digunakan pada project ini terdiri dari 3 tabel dinamis (kemungkinan berubah dalam masa development) yang itu **tabel posts** yang akan menangani isi dari berita yang akan di tampilkan, **tabel categories** yang akan menangani data berdasarkan kategori dari rss yang didapat, dan **tabel user** yang akan menangani data sumber dari rss yang digunakan dengan konfigurasi isi sebagai berikut:

**Tabel posts**

- id (Primary Key)
- category_id (Foreign Key)
- user_id (Foreign Key)
- img_url
- title
- slug
- excerpt
- body
- created_at
- update_at

**Tabel categories**

- id
- name
- slug
- created_at
- updated_at

**Tabel User**

- id
- name
- username
- created_at
- updated_at

Link **RSS** yang digunakan pada project ini adalah sebagai berikut

- https://www.suara.com/rss/otomotif
- http://rss.tempo.co/bisnis
- https://news.un.org/feed/subscribe/en/news/region/middle-east/feed/rss.xml
