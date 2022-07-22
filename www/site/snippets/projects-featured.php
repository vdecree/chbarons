<section class="our-work [ pad-top-1500 pad-bottom-1500 ]">
    <div class="wrapper">
        <h2>Some of our recent work</h2>  
        <div class="our-work__images [ auto-grid ]">
        <?php foreach ($projects as $project): ?>
        <div class="image">
            <?php if ($image = $project->cover()): ?>
                <img src="<?= $image->crop(368, 507)->url() ?>" alt="<?= $project->title() ?>">
                <a class="breakout-button" href="<?= $project->url() ?>"></a>
            <?php endif ?>
        </div>
        <?php endforeach ?>
        </div>
    </div>
</section>
