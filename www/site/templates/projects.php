<?php snippet('header') ?>

<main>
  <div class="wrapper">
    <h1><?= $page->title(); ?></h1>
    <ul>
        <?php foreach ($page->children()->listed() as $project): ?>
        <li>
          <a href="<?= $project->url() ?>">
          
            <?= $project->image()->resize(400, 500) ?>
            <?= $project->title() ?>
            <?= $project->text()->kt()->maxlength(2) ?>

          
          </a>
        </li>
        <?php endforeach ?>
    </ul>
  </div>
</main>

<?php snippet('footer') ?>