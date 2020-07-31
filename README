# template-lamp-wordpress

TODO Explain this a bit more...

A basic template for small LAMP sites. It also happens to have WordPress installed, but that can be easily removed by just deleting all the WordPress files and relocating `/theme/index.php` to `/srv/index.php`.

A bit of info on the directories and important files:

## $.xxx

The $ file is reserved for the most important file in a directory. This could be a compilation target (like in /src) or the include point (like in /framework).

## /theme/index.php

Contains the site's urlconf, which maps URI requests to the endpoints that handle them.

## /srv

Set Apache's document root to here, and make sure to set AllowOverride to All

## /srv/static

CSS and JS files go here. You don't have to touch this directly, compilation takes care of that for you.

## /srv/assets

Assets like pictures, audio, etc.

## /templates

Templates for the various pages, compiled from /src. See /endpoints for actual logic.

## /endpoints

Contains PHP code for the logic behind handling requests.

## /src

Contains directories called modules, which are collections of PUG, SASS, and CoffeeScript files. Each module's `$.head.pug` and `$.body.pug` are compiled into their respective PHP files, same goes for `$.sass` and `$.coffee`. You can have other files in these modules, but you gotta make sure to use the $ files to tie them together.

## /framework

More back-end code, except this is used site-wide and included in every endpoint. Useful for including third-party libraries like MeekroDB and PHPMailer, and for first-party helper functions.

## /secret

Contains private information like database passwords and such. I don't have a need of this directory (yet) but I will soon enough.


