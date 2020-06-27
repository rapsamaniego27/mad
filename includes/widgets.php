<?php

//Add a widget
register_sidebar([
  'name' => 'Page Sidebar',
  'id' => 'page-sidebar',
  'class' => '',
  'before_title' => '<h4>',
  'after_title' => '</h4>'

]);

register_sidebar([
  'name' => 'Blog Sidebar',
  'id' => 'blog-sidebar',
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

function testing_rap(){
  return '<p>hello there</p>';
}