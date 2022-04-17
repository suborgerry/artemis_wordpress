<?php 
  
  $template_name = get_template();
  $menu_items_top = wp_get_nav_menu_items('Верхнее меню');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="application-name" content="Artemis | Hi" />
  <meta name="msapplication-TileColor" content="#fdfdfd" />
  <meta name="msapplication-square150x150logo" content="/wp-content/themes/<?php echo $template_name?>/static/images/logo.png">
  <meta name="msapplication-square310x310logo" content="/wp-content/themes/<?php echo $template_name?>/static/images/logo.png" />

  <title>Artemis</title>

  <meta content="Aremis test description" name="description">
  <meta property="og:title" content="Artemis | Hi">
  <meta property="og:description" content="Aremis test description">

  <link rel="stylesheet" href="/wp-content/themes/<?php echo $template_name?>/css/app.css" />
  <?php wp_site_icon(); // Include links, meta and styles tags ?>
</head>
<body class="flex flex-col items-center m-auto font-sans overflow-x-hidden">
<header class="header_mobile lg:hidden w-full p-3">
    <div class="head_line flex justify-between items-center w-full">
      <?php echo the_custom_logo();?>  
      <button type="button" class="head_line_button" id="menu-button">
        <img src="./static/images/menu.png" class="open absolute top-0 right-0" alt="close image">
        <span class="closed"><img src="./static/images/closeoval.png" class="absolute top-0 right-0" alt="close image"></span>
      </button>
      <div class="header_container flex flex-col justify-between w-full items-start bg-white m-auto absolute z-40 px-3">
        <ul class="header_menu_mobile flex flex-col w-full" id="mobile-list">
          <?php foreach($menu_items_top as $item): ?>
            <?php if($item->menu_item_parent == 0):?>
              <?php if($item->type == 'taxonomy'): ?>  
                <li class="header_menu_item_container relative inline-block text-left">
                  <button type="button"
                    class="header_menu_item inline-flex justify-center items-center font-normal hover:bg-gray-50 focus:outline-none "
                    aria-expanded="true" aria-haspopup="true">
                    <?php echo $item->title; ?>
                    <svg class="-mr-1 ml-2 h-3 w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                      aria-hidden="true">
                      <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                    </svg>
                  </button>
                  <div
                    class="header_menu_dropdown_container_mobile scale-100 z-30 transition ease-out origin-top-right w-full hidden left-0 shadow-none bg-white ring-1 ring-opacity-0 focus:outline-none"
                    role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                    <div class="py-1" role="none">
                      <?php foreach($menu_items_top as $sub_item): ?>
                        <?php if($item->ID == $sub_item->menu_item_parent): ?>
                          <a href="<?php echo $sub_item->url?>" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1">
                            <?php echo $sub_item->title;?>
                          </a>
                        <?php endif;?>
                      <?php endforeach; ?>  
                    </div>
                  </div>
                </li>
              <?php else:?>
                <li class="header_menu_item"><a href="<?php echo $item->url; ?>" class="font-normal"><?php echo $item->title; ?></a></li>
              <?php endif; ?>
            <?php endif; ?>
          <?php endforeach; ?>
        </ul>
        <div class="header_options flex items-start gap-3 flex-col">
          <select class="
          bg-white 
          bg-clip-padding
          bg-no-repeat
          border-none
          rounded
          transition
          ease-in-out
          m-0
          pr-2.5
          mr-8
          font-semibold
          focus:border-0
          focus:outline-none
          active:outline-none
          active:border-0
          hover:cursor-pointer
          header_options_languages_item
          ">
            <option class="header_options_languages_item" value="English" selected>English</option>
            <option class="header_options_languages_item" value="Ukrainian">Ukrainian</option>
            <option class="header_options_languages_item" value="Poland">Poland</option>
          </select>
          <div class="header__search  hover:cursor-pointer"><img src="./static/images/shape.png" alt="search"></div>
        </div>
      </div>
    </div>
  </header>
  <header class="header hidden lg:flex w-screen xl:px-36 px-24 py-7 items-center z-30">
    <div class="header_container flex justify-between w-full items-center m-auto">
      <?php echo the_custom_logo();?>  
      <ul class="header_menu_desktop flex gap-x-9">
        <?php foreach($menu_items_top as $item): ?>
          <?php if($item->menu_item_parent == 0):?>
            <?php if($item->type == 'taxonomy'): ?>
              <li class="header_menu_item_container relative inline-block text-left">
                <button type="button"
                  class="header_menu_item inline-flex justify-center items-center font-normal hover:bg-gray-50 focus:outline-none "
                  aria-expanded="true" aria-haspopup="true">
                  <?php echo $item->title; ?>
                  <svg class="-mr-1 ml-2 h-3 w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    aria-hidden="true">
                    <path fill-rule="evenodd"
                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                      clip-rule="evenodd" />
                  </svg>
                </button>
                <div class="header_menu_dropdown_container bg-white scale-100 z-30 transition ease-out origin-top-right absolute hidden left-0 w-max rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                  role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                  <div class="py-1" role="none">
                    <?php foreach($menu_items_top as $sub_item): ?>
                      <?php if($item->ID == $sub_item->menu_item_parent): ?>
                        <a href="<?php echo $sub_item->url?>" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1">
                          <?php echo $sub_item->title;?>
                        </a>
                      <?php endif;?>
                    <?php endforeach; ?>  
                  </div>
                </div>
              </li>
            <?php else:?>
              <li class="header_menu_item"><a href="<?php echo $item->url; ?>" class="font-normal"><?php echo $item->title; ?></a></li>
            <?php endif; ?>
          <?php endif; ?>
        <?php endforeach; ?>
      </ul>
      <div class="header_options flex items-center">
        <select class="
        bg-white 
        bg-clip-padding
        bg-no-repeat
        border-none
        rounded
        transition
        ease-in-out
        m-0
        pr-2.5
        mr-8
        font-semibold
        focus:border-0
        focus:outline-none
        active:outline-none
        active:border-0
        hover:cursor-pointer
        header_options_languages_item
        ">
          <option class="header_options_languages_item" value="English" selected>English</option>
          <option class="header_options_languages_item" value="Ukrainian">Ukrainian</option>
          <option class="header_options_languages_item" value="Poland">Poland</option>
        </select>
        <div class="header__search  hover:cursor-pointer"><img src="/wp-content/themes/<?php echo $template_name?>/static/images/shape.png" alt="search"></div>
      </div>
    </div> 
  </header>