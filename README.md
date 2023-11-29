<p align="center"><a href="#"><img src="./public/assets/images/logo-formadiksi.png" width="300" alt="Formadiksi Logo"></a></p>

## Official Formadiksi

🚀 Official Formadiksi adalah website official dari Formadiksi Polinema yang berisi tentang informasi kegiatan, keanggotaan, dan lain-lain. Dibuat dengan Laravel 10 dan Bootstrap 5.

## Contributors

[<img src="https://avatars.githubusercontent.com/u/112758111?v=4" width="54" height="54" style="border-radius: 50%; margin-right: 0.5rem;">](https://github.com/alimurrofid)
[<img src="https://avatars.githubusercontent.com/u/88068999?v=4" width="54" height="54" style="border-radius: 50%; margin-right: 0.5rem;">](https://github.com/zakyzuf)

## Requirements Installation

requirement:

-   PHP >= 8.1
-   [Composer](https://getcomposer.org/download/)
-   [Vscode](https://code.visualstudio.com/download)
-   [Xampp](https://www.apachefriends.org/download.html)
-   [Git](https://git-scm.com/downloads)
-   [Mailpit-windows-amd64](https://github.com/axllent/mailpit/releases/tag/v1.10.1)

Vscode Extension:

-   Laravel Extension Pack

## How to install

1. Clone repository

```sh
git clone https://github.com/alimurrofid/official-formadiksi.git
```

2. Install & Update Composer

```sh
composer update
```

3. Copy .env.example to .env

```sh
copy .env.example .env
```

4. Generate Key

```sh
php artisan key:generate
```

5. Migration database

```sh
php artisan migrate
```

6. Seeding database

```sh
php artisan db:seed
```

7. Create the symbolic link

```sh
php artisan storage:link
```

8. Run Mailpit

```sh
mailpit
```

9. Run the server

```sh
php artisan serve
```
