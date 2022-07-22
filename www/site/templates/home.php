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
      <?php if ($page->intro()->isNotEmpty()): ?>
        <?= $page->intro()->kt() ?>
      <?php endif ?>
      </div>
      <div class="hero__image [ gap-top-1200 pad-bottom-1200 ]">
      <?php if($image = $page->coverimage()->toFile()): ?>
          <img src="<?= $image->url() ?>" alt="">
      <?php endif ?>
        <!-- <img src="assets/images/banner-image.jpg" alt=""> -->
      </div>
    </div>
  </section>

  <?php snippet('projects-featured', [
    'projects' => collection('projects')
    ->limit(3)
    ->filterBy('featured', true)
  ]) ?>

  <section class="specialist [ pad-top-300 pad-bottom-1500 ]">
    <div class="wrapper">
      <div class="split-child">
        <?php if ($page->specialistheading()->isNotEmpty()): ?>
          <h1><?= $page->specialistheading() ?></h1>
        <?php endif ?>
        <div class="text">
        <?php if ($page->specialisttext()->isNotEmpty()): ?>
          <?= $page->specialisttext()->kt() ?>
        <?php endif ?>
        </div>
      </div>
    </div>
  </section>

  <?php snippet('footer') ?>