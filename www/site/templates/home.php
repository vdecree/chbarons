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
      <div class="hero__image [ gap-top-1200 ]">
        <img src="assets/images/banner-image.jpg" alt="">
      </div>
    </div>
  </section>

  <?php snippet('footer') ?>