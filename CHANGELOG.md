# Changelog
All notable changes to this project will be documented in this file.

## [v-5.11] - 2019-06-26

** POST

- attachments.php created and added to functions.php
- fields corresponding to slider created and required arguments passed in attachment.php
- retrieve slider to the theme
- check if attachment class exists else show thumbnail
- show testimonial with attachment plugin
- show team members with attachment plugin
- search form added and result modified
# get_search_form();
- seperate search.php template used

- PREG_REPLACE() FUNCTION DETAIL LEARNING PENDING
- REGULAR EXPRESSION DETAIL LEARNING PENDING

## [v-6] - 2019-06-30

** IMAGE MANAGEMENT & IMAGE SIZE MANAGEMENT

-  add custom image sizes in function.php as part of theme support
-  every image will be copied as many times as the total available image sizes , avoid changing default thumbnail     dimensions
-  different names with same dimension will not work
-  wp_calculate_image_srcset filter hook used to specify null return..wordpress stops making images responsive        according to screen sizes.
-  manually defining function(that gets passed to the filter hook preventing scrset calculation) returning null OR
   use wp default function "__return_null"

 ## [v-7] - 2019-07-08

 ** Child theme

- child theme used for avoiding rewriting codes since if theme author releases updates the modifications done        before updating, will be lost  
- Child theme made by creating directory with name "text-domain"-child. create style.css and copy theme details
  from parent theme style details
  Parent theme style specifically has to be enqueued from child theme in order to get parent style
  Child theme style loads automatically without enqueuing precisely, by get_stylesheet_uri() added in the parent theme for enqueuing parent stylesheet.get_stylesheet_uri() loads the style of active theme.so if child theme is active this function from parent theme loads child theme's style.
- add Template: parent theme text-domain
- overwriting template parts from child theme (keep the same directory structure and naming and overwrite)
- function overwriting in functions.php:
  The function first loads from child theme. so if want to overwrite the same function that already exists in parent theme fatal error gives about redefining the same function.
  To avoid this, add filters to parent theme functions if(!function_exists(function name)){}
- if child theme is used, the functions from child theme loads first by default.if want child theme functions to     load AFTER PARENT, set higher priority to the function from child theme.
  default priority for a function in parent theme is 10.
  if use get_theme_file_uri(),this problem doesnt happen but most themes use get_template_directory_uri
- for asset management if want some resource for example, a css file to load from a different location first         dequeue and deregister from the previous location.
  wp_dequeue_style(name);
  wp_deregister_style(name);






