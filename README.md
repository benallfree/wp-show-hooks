# Setup

* Clone this repo
* Adjust `plugin.php` as needed. 

# Plugin System Structure

```
/
  bootstrap.php
  manifest.php
  config/
    <module_slug>.php
  modules/
    module_name/
      assets/
        js/
        css/
      callbacks/
        action_<wp_action_name>*.php
        shortcode_<wp_action_name>*.php
        filter_<wp_action_name>*.php
        <custom_callback_name>.php
      views/
        action_<wp_action_name>*.php/haml
        shortcode_<wp_action_name>*.php/haml
        filter_<wp_action_name>*.php/haml
        <custom_callback_name>.php/haml
      classes/
        <ClassName>.class.php
      lib/
        <lib_name>.php
      models/
        <activerecord_model_name>.php
```
