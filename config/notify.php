<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Notify Theme
    |--------------------------------------------------------------------------
    |
    | You can change the theme of notifications by specifying the desired theme.
    | By default the theme light is activated, but you can change it by
    | specifying the dark mode. To change theme, update the global variable to `dark`
    |
    */

    'theme' => env('NOTIFY_THEME', 'dark'),

    /*
    |--------------------------------------------------------------------------
    | Demo URL
    |--------------------------------------------------------------------------
    |
    | if true you can access to the demo documentation of the notify package
    | here: http://localhost:8000/notify/demo, by default is true
    |
    */

    'demo' => false,

    /*
    |--------------------------------------------------------------------------
    | Notification timeout
    |--------------------------------------------------------------------------
    |
    | Defines the number of seconds during which the notification will be visible.
    |
    */

    'timeout'   => 5000,

    /*
    |--------------------------------------------------------------------------
    | Preset Messages
    |--------------------------------------------------------------------------
    |
    | Define any preset messages here that can be reused.
    | Available model: connect, drake, emotify, smiley, toast
    |
    */

    'preset-messages' => [
        'post-created' => [
            'message' => 'The post has been created successfully.',
            'type'    => 'success',
            'model'   => 'toast',
            'title'   => 'Post Created',
        ],
        'post-updated' => [
            'message' => 'The post has been updated successfully.',
            'type'    => 'success',
            'model'   => 'toast',
            'title'   => 'Post Updated',
        ],
        'post-deleted' => [
            'message' => 'The post has been deleted successfully.',
            'type'    => 'success',
            'model'   => 'toast',
            'title'   => 'Post Deleted',
        ],
    ],

];
