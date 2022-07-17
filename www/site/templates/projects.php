<?php snippet('header') ?>

<main>
  <section class="projects [ pad-top-1500 pad-bottom-1500 ]">
    <div class="wrapper">
      <h1 class="page-title [ text-1000 ]"><?= $page->title(); ?></h1>
      <ul class="[ stacked-list project-list ] [ flow ]">
          <?php foreach ($page->children()->listed() as $project): ?>
          <li>
            
          <div class="project-list__image [ measure-short ]">
            
            <img src="<?= $project->image()->crop(560, 380)->url() ?>" alt="<?= $project->title() ?> image">
          </div>
              <div class="project-list__info">
                <h3 class="[ flow-space-300 ]"><?= $project->title() ?></h3>
                <?php if ($project->text()->isNotEmpty()): ?><p class="[ flow-space-200 ]"><?= $project->text()->excerpt(30) ?></p><?php endif ?>
                <a class="breakout-button" href="<?= $project->url() ?>"></a>
              </div>
            
          </li>
          <?php endforeach ?>
      </ul>
    </div>
  </section>
</main>

<?php snippet('footer') ?>