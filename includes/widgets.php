<?php
/* Widget Registration */
//Add a widget
register_sidebar([
  'name' => 'Page Sidebar',
  'id' => 'page-sidebar',
  'class' => '',
  'before_title' => '<h4>',
  'after_title' => '</h4>'

]);

register_sidebar([
  'name' => 'Header Logo',
  'id' => 'header-logo',
  'class' => '',
  'before_title' => '<div>',
  'after_title' => '</div>'

]);
