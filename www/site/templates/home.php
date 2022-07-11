<?php
/*
  Templates render the content of your pages.

  They contain the markup together with some control structures
  like loops or if-statements. The `$page` variable always
  refers to the currently active page.

  To fetch the content from each field we call the field name as a
  method on the `$page` object, e.g. `$page->title()`.

  This home template renders content from others pages, the children of
  the `photography` page to display a nice gallery grid.

  Snippets like the header and footer contain markup used in
  multiple templates. They also help to keep templates clean.

  More about templates: https://getkirby.com/docs/guide/templates/basics
*/
?>
 <?php snippet('header') ?>


  <section class="hero" style="background-image:url(/assets/images/hero-bg.jpg);">
    <div class="wrapper">
      <h1 class="[ text-1000 lg:text-1300 pad-bottom-200 ]">Carpentry <span class="[ font-alt ]">&amp;</span> Joinery</h1>
      <div class="hero__intro [ measure-short ]">
        <p>C H Barons are a team of experienced carpenters and joiners based in the South Hams, Devon. We cover all types of building work, domestic and commercial and pride ourselves in our customer service and project management.</p>
      </div>
      <div class="hero__image [ gap-top-1200 pad-bottom-1200 ]">
        <img src="assets/images/banner-image.jpg" alt="">
      </div>
    </div>
  </section>

  <section class="our-work [ pad-top-1500 pad-bottom-1500 ]">
    <div class="wrapper">
      <h2>Some of our recent work</h2>  
      <div class="our-work__images [ auto-grid ]">
        <div class="image">
          <img src="assets/images/p-1.jpg" alt="">
        </div>
        <div class="image">
          <img src="assets/images/p-2.jpg" alt="">
        </div>
        <div class="image">
          <img src="assets/images/p-3.jpg" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="specialist [ pad-top-300 pad-bottom-1500 ]">
    <div class="wrapper">
      <div class="split-child">
        <h1>All types of building work undertaken</h1>
        <div class="text">
        <p>From roofs, kitchens, renovations and extensions, to fitting out commercial units, we also cover all types of storage, furniture and bespoke cabinetry. We regularly work on holiday home refurbishments remotely for customers who do not live in the area and always ensure minimum disruption, leaving your property clean and tidy after each visit</p>

        <p>As a small business we take great pride in our work and the involvement and satisfaction of our customers and enjoy working on ongoing projects as a result of the relationships we build along the way.</p>
        </div>
      </div>
    </div>
  </section>

  <?php snippet('footer') ?>