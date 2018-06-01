## Talk Example
This is a demo project for [Laravel-Talk](https://github.com/nahid/talk) package. You can learn from here how to use Talk.

### Announcement
Yes, now Talk Example project is Docker ready.

### Requirements
* Docker
* Docker Compose


### Configurations

If you want to use our default settings then you didn't need to configure anything except Pusher credentials.

But if you want to configure as you want then copy .env.example to .env

```shell
cp .env.example .env
```

then configure your desire settings

and now copy docker-compose.yml.example to docker-compose.yml and configure as you want


```shell
cp docker-compose.yml.example docker-compose.yml
```


Thats it

### Installation

There are no extra panic to install this project just run this command and enjoy

```shell
./talk ready
```

Chill!

#### What contains with Docker?

- PHP 7.1.1
- Nginx
- MySQL 5.7
- Redis
- Supervisor
- Git
- GD Library
- Zip Library

So you no need to Install PHP, no need to manage queue, our system will manage all queue, worker and database system with auto migration and seeding.
Cool nah?


#### For Realtime

If you want to get realtime service from this app you have to configure it first. Goto `config/talk.php` and
enable broadcast. After enabling broadcast please set the Pusher app credentials in pusher section.

```php
return [
    'user' => [
        'model' => 'App\User'
    ],
    'broadcast' => [
        'enable' => false,
        'app_name' => 'talk-example',
        'pusher' => [
            'app_id'        => env('PUSHER_APP_ID'),
            'app_key'       => env('PUSHER_KEY'),
            'app_secret'    => env('PUSHER_SECRET')
        ]
    ]
];
````

Now open you project in browser and goto http://localhost:8088. Then login with the given user credentials

> email: talk@example.com
> password: 123456

So, Lets start you journey :)

Here is a project screenshot that was developed by Talk.

![Talk-Example Screenshot](http://i.imgur.com/uQ7sgmI.png "Talk-Example Project")

## Template Credit

Template - [Live chat window widget](http://www.bypeople.com/live-chat-window-widget/ ) by [SergioGalindo](http://www.bypeople.com/author/uakala/)


