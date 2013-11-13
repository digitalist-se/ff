<?php

function ff_css_alter(&$css){

  $css_to_keep = variable_get('ff_css_to_keep', array(
    // admin_menu
    'sites/all/modules/admin_menu/admin_menu.css',
    'sites/all/modules/admin_menu/admin_menu.uid1.css',
    'sites/all/modules/admin_menu/admin_menu_toolbar/admin_menu_toolbar.css',
  ));

  $css = array_intersect_key($css, array_flip($css_to_keep));
}