<?php 

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package artemis
 * @subpackage Artemis
 * @since Artemis 1.0
 */

$template_name = get_template();

?>

  <main class="main flex flex-col w-full">
    <?php get_header(); ?>
    <?php
      while(have_posts()) {
        the_post();
  
        echo '<h2>';
        the_title();
        echo '</h2>';
        
        the_content();
    }

    ?>
    <div class="main_banner py-28 relative px-36">
      <h1 class="main_banner_title max-w-xl font-serif text-6xl z-20 relative">
        Creating Positive Impact with Artemis
      </h1>
      <p class="main_banner_text article-text mt-6 leading-7 z-20 relative flex flex-wrap max-w-xl">
        We all live inside an interconnected network in need of positive,
        socially connected changes that achieve measurable results. Artemis
        was founded to create these positive connections, and achieve these
        results with our impact-driven focus!
      </p>
      <div class="main_banner_buttons max-w-xl w-full flex mt-14 z-20 relative">
        <button
          class="main_banner_button rounded-full bg-yellow-400 py-4 px-11 text-lg mr-5 hover:bg-yellow-300 transition-all"
          type="button">Download App</button>
        <button
          class="main_banner_button rounded-full border py-4 px-11 text-lg border-color-45-65-94 transition-all hover:bg-yellow-100"
          type="button">Get in touch</button>
      </div>
      <img src="/wp-content/themes/<?php echo $template_name?>/static/images/mainban2.png" alt="Rectangle" class="main_banner_image absolute top-0 right-0 z-10">
    </div>
    <div class="px-36 main_title_container bg-white py-36 flex justify-center items-end relative w-full">
      <h2 class="main_title text-5xl font-serif">We are here to help you!</h2>
      <img class="absolute right-40" src="/wp-content/themes/<?php echo $template_name?>/static/images/rounds.svg" alt="Rounds">
    </div>
    <div class="main_info_block bg-slate-50">
      <div class="main_info_container px-36 py-28 relative">
        <h3 class="main_info_block_title max-w-xl font-serif text-5xl z-20 relative">Outcome-based Funding</h3>
        <p class="main_info_block_text xxl:max-w-lg article-text mt-6 leading-7 z-20 relative">
          For our individual or institutional donors and NGO receiver
          teams, our Artemis services can provide the focused precision
          in locating, connecting, and enabling the most specific
          projects for your funds, along with the most transparent and
          measurable, data-driven results for you & your stakeholders.
          We cater to projects in all stages: Pre-funding, Already
          funded.
        </p>
        <button class="
                    main_banner_button rounded-full 
                    bg-yellow-400 
                    py-4 
                    px-14
                    text-lg mr-5
                    hover:bg-yellow-300
                    transition-all
                    mt-14 z-20 relative" type="button">Сontact us</button>
        <img src="/wp-content/themes/<?php echo $template_name?>/static/images/outcome.png" alt="Rectangle" class="main_banner_image absolute top-12 right-20 z-10">
      </div>
    </div>
    <div class="main_info_block">
      <div class="main_info_container px-24 py-28 relative flex items-center justify-between">
        <img src="/wp-content/themes/<?php echo $template_name?>/static/images/advisory.png" alt="Rectangle" class="main_banner_image main_banner_image_left z-10">
        <div class="main_info_container_items flex flex-col">
          <h3 class="main_info_block_title max-w-xl font-serif text-5xl z-20 relative">Advisory Services</h3>
          <p class="main_info_block_text max-w-xl article-text mt-6 leading-7 z-20 relative">
            The need for having a CSR program, which creates value is an
            absolute necessity in the corporate & private sector spheres.
            Helping you define projects aligned with your core business,
            providing a more purpose-driven momentum, achieve the
            targeted results required to create a sustainable impact
            supported with transparent, data-driven reports is always the
            Artemis priority.
          </p>
          <img src="/wp-content/themes/<?php echo $template_name?>/static/images/advisory.png" alt="Rectangle"
            class="main_banner_image_mob main_banner_image_left z-10 hidden">
          <div class="main_info_container_buttons flex justify-between mt-14">
            <button class="
                    main_banner_button rounded-full 
                    bg-yellow-400 
                    py-4 
                    px-14
                    text-lg
                    hover:bg-yellow-300
                    transition-all
                    z-20 relative" type="button">Сontact us</button>
            <img src="/wp-content/themes/<?php echo $template_name?>/static/images/ovals.png" alt="Ovals" class="">
          </div>
        </div>
      </div>
    </div>
    <div class="main_carousel px-56">
      <h3 class="main_carousel_title text-5xl my-20 font-serif text-center">What’s New?</h3>
      <div class="owl_carousel">
        <div class="owl_corousel_item">
          <a href="#" class="w-full">
            <div class="carousel_previev_container w-full mb-5 flex justify-center items-center">
              <img src="/wp-content/themes/<?php echo $template_name?>/static/images/Bitmap1.jpg" alt="" class="w-full">
            </div>
            <span class="text-xl">Merdeka Belajar & Sekolah Alternatif - Artemis Impact Podcast #5</span>
          </a>
        </div>
        <div class="owl_corousel_item">
          <a href="#" class="w-max h-max">
            <div class="carousel_previev_container w-full mb-5 flex justify-center items-center">
              <img src="/wp-content/themes/<?php echo $template_name?>/static/images/Bitmap2.jpg" alt="" class="w-full">
            </div>
            <span class="text-xl">We Are Watching You - Artemis Impact Podcast #4</span>
          </a>
        </div>
        <div class="owl_corousel_item">
          <a href="#" class="w-max h-max">
            <div class="carousel_previev_container w-full mb-5 flex justify-center items-center">
              <img src="/wp-content/themes/<?php echo $template_name?>/static/images/Bitmap3.jpg" alt="" class="w-full">
            </div>
            <span class="text-xl">NGO dan Komunitas Lingkungan di Indonesia - Artemis Impact Podcast #3</span>
          </a>
        </div>
        <div class="owl_corousel_item">
          <a href="#" class="w-max h-max">
            <div class="carousel_previev_container w-full mb-5 flex justify-center items-center">
              <img src="/wp-content/themes/<?php echo $template_name?>/static/images/Bitmap1.jpg" alt="" class="w-full">
            </div>
            <span class="text-xl">Merdeka Belajar & Sekolah Alternatif - Artemis Impact Podcast #5</span>
          </a>
        </div>
        <div class="owl_corousel_item">
          <a href="#" class="w-max h-max">
            <div class="carousel_previev_container w-full mb-5 flex justify-center items-center">
              <img src="/wp-content/themes/<?php echo $template_name?>/static/images/Bitmap3.jpg" alt="" class="w-full">
            </div>
            <span class="text-xl">NGO dan Komunitas Lingkungan di Indonesia - Artemis Impact Podcast #3</span>
          </a>
        </div>
      </div>
    </div>
    <div class="main_contactform px-64 flex flex-col items-center mt-52 pb-24">
      <h3 class="main_contactform_title font-serif text-5xl max-w-2xl text-center mb-20">
        Start your Social Impact Journey Today
      </h3>
      <div class="main_contactform_container flex">
        <div class="main_contactform_container_info pt-12 px-16 pb-24 text-white">
          <h4 class="main_contactform_container_info_title text-3xl">General Inquiries</h4>
          <p class="main_contactform_container_info_phone text-base mt-8 relative beforeicon_phone">
            <a href="Tel:+62-858-9444-2405">+62-858-9444-2405</a>
          </p>
          <p class="main_contactform_container_info_mail text-base flex flex-col relative beforeicon_mail mt-3">
            <a href="mailto:contact@artemis.im">contact@artemis.im</a>
            <a href="mailto:simon@artemis.im">simon@artemis.im</a>
          </p>
          <h4 class="main_contactform_container_info_title text-3xl mt-20">Media & Press</h4>
          <p class="main_contactform_container_info_phone text-base mt-8 relative beforeicon_phone">
            <a href="Tel:+62-812-8337-4974">+62 812-8337-4974</a>
          </p>
          <p class="main_contactform_container_info_mail text-base flex flex-col relative beforeicon_mail mt-3">
            <a href="meilto:contact@artemis.im">contact@artemis.im</a>
          </p>
        </div>
        <div class="main_contactform_container_form pt-12 pl-5 pr-10 bg-cover">
          <h4 class="main_contactform_container_form_title text-3xl">Get in touch</h4>
          <form class="flex flex-col items-center gap-10 mt-11" id="contact-form">
            <input type="text" name="name" id="contact-name" placeholder="Name" class="
                main_contactform_container_form_input
                bg-transparent
                border-0
                border-solid
                border-b
                pl-0
                w-full">
            <input type="email" name="email" id="contact-email" placeholder="Email" class="
                main_contactform_container_form_input
                bg-transparent
                border-0
                border-solid
                border-b
                pl-0
                w-full">
            <input type="text" name="text" id="contact-text" placeholder="Message" class="
                main_contactform_container_form_input
                bg-transparent
                border-0
                border-solid
                border-b
                pl-0
                w-full">
            <button class="
                    main_banner_button rounded-full 
                    bg-yellow-400 
                    py-4 
                    px-14
                    text-lg
                    hover:bg-yellow-300
                    transition-all
                    z-20 relative" type="button">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </main>

   <?php get_footer(); ?>

   [text your-name id:contact-name class:main_contactform_container_form_input class:bg- 
transparent class:border-0 class:border-solid class:border-b class:pl-0 class:w-full placeholder "Name"]
[email* your-email id:contact-email class:main_contactform_container_form_input class:bg- 
transparent class:border-0 class:border-solid class:border-b class:pl-0 class:w-full placeholder "Email"]
[text* your-message id:contact-text class:main_contactform_container_form_input class:bg- 
transparent class:border-0 class:border-solid class:border-b class:pl-0 class:w-full placeholder "Message"]
[submit class:main_banner_button class:rounded-full class:bg-yellow-400 class:py-4 class:px-14 class:text-lg class:hoverbg-yellow-300 class:transition-all class:z-20 class:relative "Submit"]