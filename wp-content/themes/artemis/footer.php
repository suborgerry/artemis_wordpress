<?

    $template_name = get_template();

?>
</body>
<?php

  $menu_items_company = wp_get_nav_menu_items('Company');
  $menu_items_services = wp_get_nav_menu_items('Services');
  $menu_items_contact = wp_get_nav_menu_items('Contact');
  $menu_items_follow_us = wp_get_nav_menu_items('FollowUs');

  // print_r($menu_items_follow_us);

?>
<footer class="footer flex flex-col items-center w-screen bg-slate-50">
    <div class="footer_container w-full flex gap-16 px-36 pt-14 pb-7">
      <div class="footer_container_logo">
        <?php echo the_custom_logo();?>  
      </div>
      <div class="footer_container_menu">
        <p class="footer_container_menu_title text-xl">Company</p>
        <ul class="footer_container_menu_items flex flex-col gap-3 mt-4">
          <?php foreach($menu_items_company as $item):?>
            <li class="footer_container_menu_item">
              <a href="<?php echo $item->url?>"><?php echo $item->title?></a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="footer_container_menu">
        <p class="footer_container_menu_title text-xl">Services</p>
        <ul class="footer_container_menu_items flex flex-col gap-3 mt-6">
          <?php foreach($menu_items_services as $item):?>
            <li class="footer_container_menu_item">
              <a href="<?php echo $item->url?>"><?php echo $item->title?></a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="footer_container_contacts">
        <p class="footer_container_contacts_title text-xl">Contact</p>
        <p class="footer_container_contacts_phone text-base mt-8 ml-6 relative beforeicon_phone_black">
          <a href="Tel:<?php echo trim(get_option('firm-tel'));?>"><?php echo get_option('firm-tel');?></a>
        </p>
        <p
          class="main_contactform_container_info_mail text-base flex flex-col ml-6 relative beforeicon_mail_black mt-3">
          <a href="mailto:<?php echo trim(get_option('firm-email'));?>"><?php echo get_option('firm-email');?></a>
        </p>
      </div>
      <div class="footer_container_followus">
        <p class="footer_container_followus_title text-xl">Follow Us</p>
        <div class="footer_container_followus_container flex mt-6 gap-2">
          <a href="<?php echo trim(get_option('firm-youtube'));?>" target="blank"><img src="/wp-content/themes/<?php echo $template_name?>/static/images/001-youtube.png" alt="YouTube"></a>
          <a href="<?php echo trim(get_option('firm-linkedin'));?>" target="blank"><img src="/wp-content/themes/<?php echo $template_name?>/static/images/004-linkedin.png" alt="LinkedIn"></a>
          <a href="<?php echo trim(get_option('firm-facebook'));?>" target="blank"><img src="/wp-content/themes/<?php echo $template_name?>/static/images/003-facebook.png" alt="Facebook"></a>
          <a href="<?php echo trim(get_option('firm-instagram'));?>" target="blank"><img src="/wp-content/themes/<?php echo $template_name?>/static/images/002-instagram.png" alt="Instagram"></a>
        </div>
      </div>
    </div>
    <p class="footer_rightsreserved w-full text-center text-xs py-4 border-t">All rights reserved (c) Artemis 2022</p>
  </footer>
  <script defer src="/wp-content/themes/<?php echo $template_name?>/js/app.js"></script>
  <script src="/wp-content/themes/<?php echo $template_name?>/static/js/jquery-3.6.0.min.js"></script>
  <script src="/wp-content/themes/<?php echo $template_name?>/static/js/owl.carousel.min.js"></script>
  <script src="/wp-content/themes/<?php echo $template_name?>/static/js/owl.carousel.custom.js"></script>
</body>

</html>