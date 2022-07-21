<?php
/*
  Templates render the content of your pages.

  They contain the markup together with some control structures
  like loops or if-statements. The `$page` variable always
  refers to the currently active page.

  To fetch the content from each field we call the field name as a
  method on the `$page` object, e.g. `$page->title()`.

  This default template must not be removed. It is used whenever Kirby
  cannot find a template with the name of the content file.

  Snippets like the header and footer contain markup used in
  multiple templates. They also help to keep templates clean.

  More about templates: https://getkirby.com/docs/guide/templates/basics
*/
?>
<?php snippet('header') ?>

<section class="project [ pad-top-1500 pad-bottom-1500 ]">
  <div class="wrapper">
    <h1 class="page-title [ text-1000 ]"><?= $page->title()->html() ?></h1>
    <div class="page-content">
      <?= $page->text()->kt() ?>
    </div>
  </div>
</section>

<?php snippet('footer') ?>
