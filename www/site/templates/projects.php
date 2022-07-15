<?php snippet('header') ?>

<main>
  <div class="wrapper">
    <h1><?= $page->title(); ?></h1>
    <ul>
        <?php foreach ($page->children()->listed() as $project): ?>
        <li>
          <a href="<?= $project->url() ?>">
          <figure>
            <?= $project->image()->resize(400, 500) ?>
            <figcaption><?= $project->title() ?></figcaption>
          </figure>
          </a>
        </li>
        <?php endforeach ?>
    </ul>
  </div>
</main>

<?php snippet('footer') ?>