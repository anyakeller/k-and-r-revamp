# Kite and Rocket Wordpress Theme Reboot
#### THIS IS AN UNOFFICIAL TEST THEME

Theme built on [Roots Sage](https://roots.io/sage/)

This README file is specific to this theme but it draws some usage instructions directly from the [default Sage README](roots-sage-README.md) which was renamed to make room for this one.

---

**Table of Contents**
<!-- TOC -->

- [WordPress Info](#wordpress-info)
- [Theme Usage](#theme-usage)
  - [Styles](#styles)
  - [File Structure](#file-structure)
  - [Blade Tips](#blade-tips)

<!-- /TOC -->


## WordPress Info

WordPress Configuration
* PHP 7.3.5
* Apache
* MySQL 8.0.16
* Wordpress 5.5

## Theme Usage

See [default Sage README](roots-sage-README.md)

Building:
`yarn build`

Modifying:

Do not edit:
* dist/
* vendor/
* node_modules/
* composer.lock

Modifyable Assets:
* resources/assets/

Configuring routes:
assets/scripts/main.js

### Styles

This theme is built on a customized version of Bootstrap v4.5

All easily modifyable styling can be found in resources/assets/styles/ but ultimatly you should incorperate your changes into bootstrap's scss (in node_modules).  All bootstrap scss variables are defined in node_modules/bootstra/scss/_variables.scss with some modifacations.

Working with the scss in resources/assets/styles:

The main styling file to edit is main.scss
To change default CSS attribute values and variables, you can overwrite the boostrap name in _variables.scss
You can view the [bootstrap variable default names here](https://github.com/twbs/bootstrap/blob/v4-dev/scss/_variables.scss)
You can read more on [theming bootstrap here](https://getbootstrap.com/docs/4.5/getting-started/theming/)

To lint styles, run `yarn run lint:styles` or my custom name, `yarn run lies`

### File Structure

Roots Sage uses [Laravel's Blade templating engine](https://laravel.com/docs/5.8/blade)

The [file structure](https://roots.io/docs/sage/9.x/blade-templates/#passing-data-to-templates) follows that of wordpress.
The main templates are locatd in resources/views
The partials are locatd in `resources/views/partials`

The main file which wraps ever page is `resources/views/layouts/app.blade.php`.  It is best not to modify this one.

The files to be aware of: **files ok for editting in bold** the rest should not be edited unless necessary
* **`header.blade.php`** - the page header for all views - currently the "KITE AND ROCKET RESEARCH" text
* `front-page.blade.php` - page view for the main landing/home page; contains post while loop - already set up only to display video posts
  - **`content-video.blade.php`** - partial for the `<article>` element for every post on the home page
    - **`entry-meta.blade.php`** - partial describing how each video post will be displayed on the home page in even more detail
* `single-video.blade.php` - page for a singluar video-post page
  - **`content-single-video.blade.php`** - the partial for displaying a specific video post on its own page

### Blade Tips

Comments
`{{-- this is a comment --}}`

Depositing php values
`{{ php_function_here(params...) }}`

PHP function for getting video metadata inside a while loop
`the_field('field_meta')`
