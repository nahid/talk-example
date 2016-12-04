## Talk Example
This is a demo project for [Laravel-Talk](https://github.com/nahid/talk) package. You can learn from here how to use Talk.

### Requirements
* PHP 5.5.9 >=
* Composer

### Installation

There are no extra process for installation. You may install it as per laravel installation system. Open terminal, goto this project and run these command.

```shell
composer install
```

### Configurations

After complete installation process you have to configure you database credentials. First copy `.env.example` as `.env` 

```shell
cp .env.example .env
```

Now open `.env` file and write database informations. Then run migrate from you terminal

```shell
php artisan migrate
```

When database migration then you have to run database seed command.

```shell
php artisan db:seed
```

Thats it

### Run 

Now open you project in browser and goto login. Then login with the given user credentials

> email: talk@example.com
> password: 123456

So, Lets start you journey :)

Here is a project screenshot that was developed by Talk.

![Talk-Example Screenshot](http://i.imgur.com/uQ7sgmI.png "Talk-Example Project")

## Template Credit

Template - [Live chat window widget](http://www.bypeople.com/live-chat-window-widget/ ) by [SergioGalindo](http://www.bypeople.com/author/uakala/)


