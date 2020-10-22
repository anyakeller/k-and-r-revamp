# Kite and Rocket Wordpress Theme Reboot

##### By Anya L. Keller

#### THIS IS AN UNOFFICIAL TEST THEME

This theme built on [Roots Sage](https://roots.io/sage/) which uses [Laravel Blade](https://laravel.com/docs/5.8/blade) templating engine

If you are comfortable working with Roots Sage, just jump to the [theme usage](#theme-usage) section

This README file is specific to this theme but it draws some usage instructions directly from the [default Sage README](roots-sage-README.md) which was renamed to make room for this one.

See [default Sage README](roots-sage-README.md)

#### Site Info

WordPress Info

-   PHP 7.3.5
-   Apache
-   MySQL 8.0.16
-   Wordpress 5.5
-   Wordpress Plugins
    -   [Advanced Custom Fields 5.x](https://wordpress.org/plugins/advanced-custom-fields/)
    -   [Category Order and Taxonomy Terms Order](https://wordpress.org/plugins/taxonomy-terms-order/)
    -   [Post Types Order](https://wordpress.org/plugins/post-types-order/)
    -   [Classic Editor](https://wordpress.org/plugins/classic-editor/)
    -   [SuperCPT 0.2.1](https://wordpress.org/plugins/super-cpt/) -Very old but hey, it works
    -   My werid custom plugin for setting up the custom post types **Remember to upload somewhere**

Template Information

-   Roots Sage 9
-   Larvel Blade 5.something

* * *

# Theme Usage

Table of Contents

<!-- TOC -->

-   [THE RUNDOWN](#the-rundown)
    -   [Setup](#setup)
    -   [Build commands](#build-commands)
    -   [Customizing the theme](#customizing-the-theme)
-   [Customization Cheat Sheet](#customization-cheat-sheet)
    -   [Styles](#styles)
    -   [Javascript files](#javascript-files)
    -   [Theme File Structure](#theme-file-structure)
    -   [Blade Tips](#blade-tips)

<!-- /TOC -->

* * *

## THE RUNDOWN

###### ESSENTIAL INFORMATION TO GET STARTED

### Setup

This theme uses yarn over npm.  Still not entirely sure of the difference but I've just been using yarn because the Sage docs said to.

See the sage README.md for
[requirements](roots-sage-README.md#Requirements) and very detailed setup instructions under [theme development](roots-sage-README.md#theme-development)

### Build commands

###### directly copied from the sage readme

-   `yarn start` — Compile assets when file changes are made, start Browsersync session
-   `yarn build` — Compile and optimize the files in your assets directory
-   `yarn build:production` — Compile assets for production

### Customizing the theme

[Full sage theme file structure](roots-sage-README.md#theme-structure)

General Summary

A few directories and files not to manually edit ( it could break the things e.g. build errors that never go away...):

-   `dist/`
-   `vendor/`
-   `node_modules/`
-   `composer.lock`

A few directories and files files you can, and probably will, modify:

-   asset stuff
    -   `resources/assets/fonts`
    -   `resources/assets/images`
    -   `resources/assets/scripts`
    -   `resources/assets/styles`
-   almost all of `resources/views` but probably not `resources/views/app.blade.php`

Route Configuration: `resources/assets/scripts/main.js`

WordPress global php functions is usually in resources/functions.php but now the filters, helpers, and setup stuff should be broken into the corresponding php files in `app/` such as `filters.php`, `helpers.php`, and `setup .php`

## Customization Cheat Sheet

### Styles

This theme is built on a customized version of Bootstrap v4.5.3
All customizations to bootstrap are in `assets.sttles/common/_variables.scss`

All easily modifyable styling can be found in resources/assets/styles/ but ultimatly you should incorperate your changes into bootstrap's scss by modifying `assets.sttles/common/_variables.scss`.

**Working with the scss in resources/assets/styles:**

**Which file do I write my styling in?**

Because this site requires a lot of styling, it is best to break the code into chunks and import each "chunk" into main.  This simplifies the code a lot and also assists with debugging.  Luckily, the Roots Sage people set the main.scss file up with imports from a bunch of labeled scss files.

**So, how do I know which file to put my styling code in?**

Take a look at the order of imports in main.scss.  There's a reason css is called **cascading** style sheets.  It's best to leave the order of imports alone.  It's already organized pretty well.

In the order they are imported in main.scss, here's how I thought of the usage of the style files

-   common/\_variables.scss - scss variables for customizing bootstrap
-   common/\_global.scss - I honestly am just using it for stuff I need everything else to be able to acess (e.g `@mixin`, font stuff...)
-   components/\_buttons - general button styling.  I also defined the base link styling for `<a>` tags.
-   layouts/\_header - styling for the big kite and rocket header at the top of every page.  The actual header is imported in the root template for every page on the site.  The actual header partial can be found in : `assets/views/partials/header.blade.php`
-   layouts/\_sidebar - styling for all the menus
-   layouts/\_pages.scss - STATIC PAGES (basically everything but the post pages)
-   layouts/\_posts.scss - Just for the single-view posts/home page

To change default Bootstrap variables, you can overwrite the boostrap name in \_variables.scss

You can view the [bootstrap variable default names here](https://github.com/twbs/bootstrap/blob/v4-dev/scss/_variables.scss)
You can read more on [theming bootstrap here](https://getbootstrap.com/docs/4.5/getting-started/theming/)

To lint styles, run `yarn run lint:styles` or my custom pet name for it, `yarn run lies`

### Javascript files

Working with the scripts in resources/assets/scripts:

#### The script files to be aware of:

-   `main.js` - the primary js file and hub for most js imports
-   `swiperScripts.js` - the code that initializes swiper
-   `routes/` - directory with all the routes

### Theme File Structure

#### Larvel Blade Templating

Roots Sage uses [Laravel's Blade templating engine](https://laravel.com/docs/5.8/blade)

The [template file structure](https://roots.io/docs/sage/9.x/blade-templates/#passing-data-to-templates) follows that of wordpress.
The main templates are located in `resources/views`
The partials are located in `resources/views/partials`

The main file which wraps every page is `resources/views/layouts/app.blade.php`.  It is best not to modify this one.

#### The template files to be aware of:

##### Files in BOLD are _relatively safe to edit_

##### The other files should be modified with CARE and CAUTION

-   **`header.blade.php`** - the page header for all views - currently the "KITE AND ROCKET RESEARCH" text
-   `front-page.blade.php` - page view for the main landing/home page; - redirects to featured video, otherwise uses latest video
-   `single-krvideo.blade.php` - page for a singluar video-post page - main video at top, the rest of the video posts in their categroies below
    -   **`partials/content-single-video.blade.php`** - the partial for displaying a specific video post on its own page - uses main-video
        -   **`partials/main-video.blade.php`** - the partial for displaying the main video player and description
    -   **`partials/swiper-video-category-row.blade.php`** - the partial for displaying the video category swiper rows

#### The only wordpress PHP file to care about

`functions.php` - contains integral functions for the site at the top with some custom helper functions at the bottom - you can add helper functions that will be globally available across all the templates

### Roots Sage

The directory `app/` has a lot of stuff that goes above and beyond wodpress's functions.php.  While together `filters.php`, `helpers.php`, and `setup.php` are supposed to be used in the place of functions.php, I can't always get it to work.  Try putting your filters and helpers and whatnot in the appropriate php files in app first before resorting to functions.php.

**On controllers**
`app/Controllers/` is a wonderful directory.  Here's where you can define php funtions to either automatically run once a page runs or define helper functions for pages to use when needed.

### Blade Tips

Comments
`{{-- this is a comment --}}`

Depositing php values
`{{ php_function_here(params...) }}`

PHP function for getting video metadata inside a while loop
`the_field('field_meta')`
