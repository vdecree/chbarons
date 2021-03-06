<ul class="[ stacked-list project-list ] [ flow ]">
    <?php foreach ($projects as $project): ?>
    <li>
        
    <div class="project-list__image [ measure-short ]">
    <?php if ($image = $project->cover()): ?>
        <?php # would need to be if ($image = $project->cover()->toFile()): but i have a model that does this for me ?>
        <img src="<?= $image->crop(560, 380)->url() ?>" alt="<?= $project->title() ?>">
    <?php endif ?>
    </div>
        <div class="project-list__info">
            <h3 class="[ flow-space-300 text-800 md:text-1200 ]"><?= $project->title() ?></h3>
            <?php if ($project->text()->isNotEmpty()): ?><p class="[ flow-space-200 ]"><?= $project->text()->excerpt(280) ?></p><?php endif ?>
            <a class="breakout-button" href="<?= $project->url() ?>"></a>
        </div>
        
    </li>
    <?php endforeach ?>
</ul>