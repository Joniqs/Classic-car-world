<?php
  add_action('init', 'theme_customizations');
  function theme_customizations() {
    if(function_exists('acf_add_options_page')) {
      acf_add_options_page(array(
        'page_title' => 'Main menu',
        'menu_title' => 'Main menu',
        'show_in_graphql' => true,
        'icon_url' => 'dashicons-menu',
      ));
    }
  }

  register_block_type(__DIR__ . "/template-parts/blocks/ctaButton/block.json");
  register_block_type(__DIR__ . "/template-parts/blocks/tickItem/block.json");
?>