# Каталог Футболистов 3.0

Это простое веб-приложение для управления каталогом футболистов. Реализовано на Laravel с использованием базы данных SQLite. Приложение реализовывает большую часть CRUD операций.

## Установка и запуск проекта

### Требования:

-   ОС Windows
-   PHP 8.0 и выше (https://www.php.net/downloads.php)
-   Composer (https://getcomposer.org/download/)
-   SQLite (или другая СУБД, но по умолчанию используется SQLite)

### 1. Клонируйте мой репозиторий:

```
git clone https://github.com/Exozyyy/laraveltestovoe.git
cd laraveltestovoe
```

### 2. Установите зависимости с помощью Composer:

```
composer install
```

### 3. Настройте .env файл:

Скопируйте файл .env.example в .env:

```
cp .env.example .env
```

### 4. Создайте базу данных:

Запустите миграции для создания таблиц:

```
php artisan migrate
```

### 5. Запустите сервер:

Запустите сервер с помощью встроенного сервера Laravel:

```
php artisan serve
```

Теперь приложение доступно по адресу (по дефолтному) `http://127.0.0.1:8000/footballers/create`.

## Структура проекта

-   **app/Http/Controllers/FootbalersController.php** — контроллер для работы с футболистами.
-   **app/Http/Controllers/TeamController.php** — контроллер для работы с командами.
-   **resources/views** — папка, в которой находятся Blade-шаблоны для отображения контента.
-   **layouts/index.blade.php** — шаблон для всех последующих страниц, включающий в себя статичный header и footer
    -   **footbalers/all.blade.php** — шаблон для отображения списка футболистов и формы добавления/редактирования.
    -   **footbalers/\_form.blade.php** — шаблон для формы добавления и редактирования футболистов.
-   **public/css/style.css** — файл с CSS-стилями для оформления страницы.

## Основной функционал включает в себя все, что было описано в ТЗ:

[ТЗ](https://docs.google.com/document/d/1zK13a34lO1hOdFEn2ECv7TdMskygkZltU3_BLGqTWss/edit?tab=t.0)
