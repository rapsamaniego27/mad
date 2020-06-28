<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mad About Solutions</title>

  <?php wp_head(); ?>
</head>

<body <?php body_class('test'); ?>>

  <div id="wrapper">
    <div id="main">

      <header>
        <div class="container">
          <div class="row">
            <div class="col header-container">
              <div class="logo-container">
                <?php if (is_active_sidebar('header-logo')) : ?>
                  <?php dynamic_sidebar('header-logo'); ?>
                <?php endif; ?>
              </div>
              <?php
              wp_nav_menu([
                'theme_location' => 'top-menu',
                'menu_class' => 'top-menu'
              ]);
              ?>

            </div>
          </div>
        </div>
      </header>