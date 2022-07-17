<?php snippet('header') ?>

<main>
  <section class="project [ pad-top-1500 pad-bottom-1500 ]">
    <div class="wrapper">
    <h1 class="page-title [ text-1000 ]"><span class="[ text-400 color-secondary ]"><?= html($page->parent()->title()) ?></span><?= $page->title(); ?></h1>
      <p>Projects go here</p>
    </div>
  </section>
</main>

<?php snippet('footer') ?>