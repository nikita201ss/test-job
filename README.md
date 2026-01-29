<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## ToDo list

Проект нацелен на сздание списка задач. Такие записи помогают контролировать сроки выполнения и дают ощущение прогресса, когда пункты успешно закрыты.
В данном проекте можно регистрироваться, создавать и удалять задачи по их выполнению.

## Установка проекта

1. Клонирование репозитория
```git clone https://github.com/nikita201ss/test-job```
2. Настройка БД.

    Проект работает с Sqlite, если требуется настройка MySQL:
```plaintext
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db
DB_USERNAME=root
DB_PASSWORD=
```
После подключения к БД производим команду для создания миграций:

```bash
php artisan migrate
```


### Установка зависимостей

Для установки всех зависимостей воспользуйтесь следующими командами:

```bash
# Установка PHP-зависимости
composer install

# Установка JavaScript-зависимостей
npm install
```
## Испльзование проекта

Запуск PHP сервера

Для запуска локального PHP-сервера воспользуйтесь командой:

```bash
php artisan serve
```

Запуск Front-end сервера

Для запуска сборщика файлов Front-end части сайта выполните в отдельном терминале:

```bash
npm run dev
```

Переходим по ссылке

```
http://127.0.0.1:8000
```



### Требования:
- PHP (8 и выше)
- Composer
- Node.js

