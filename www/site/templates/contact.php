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

<section class="contact [ pad-top-1500 pad-bottom-1500 ]">
  <div class="wrapper">
    <h1 class="page-title [ text-1000 ]"><?= $page->title()->html() ?></h1>
    <div class="page-content [ split-child ]">
        <div class="text">
            <?= $page->text()->kt() ?>
        </div>
        <div class="contact=form">
        <?php if($success): ?>
            <div class="alert success">
                <p><?= $success ?></p>
            </div>
            <?php else: ?>
            <?php if (isset($alert['error'])): ?>
                <div><?= $alert['error'] ?></div>
            <?php endif ?>
            <form method="post" action="<?= $page->url() ?>" name='contact'>
            <fieldset class="[ flow ]">
                <div class="field">
                    <legend class="visually-hidden">Name</legend>
                    <label for="name">
                        Name <abbr title="required">*</abbr>
                    </label>
                    <input type="text" id="name" name="name" value="<?= esc($data['name'] ?? '', 'attr') ?>" required>
                    <?= isset($alert['name']) ? '<span class="alert error">' . esc($alert['name']) . '</span>' : '' ?>
                </div>
                <div class="field">
                    <legend class="visually-hidden">Telephone</legend>
                    <label for="tel">
                        Telephone <abbr title="required">*</abbr>
                    </label>
                    <input type="text" id="tel" name="tel" value="<?= esc($data['tel'] ?? '', 'attr') ?>" required>
                    <?= isset($alert['tel']) ? '<span class="alert error">' . esc($alert['tel']) . '</span>' : '' ?>
                </div>
                <div class="field">
                    <legend class="visually-hidden">Email</legend>
                    <label for="email">
                        Email <abbr title="required">*</abbr>
                    </label>
                    <input type="email" id="email" name="email" value="<?= esc($data['email'] ?? '', 'attr') ?>" required>
                    <?= isset($alert['email']) ? '<span class="alert error">' . esc($alert['email']) . '</span>' : '' ?>
                </div>
                <div class="field">
                    <legend class="visually-hidden">Message</legend>
                    <label for="text">
                        Message <abbr title="required">*</abbr>
                    </label>
                    <textarea id="text" name="text" rows="10" required><?= esc($data['text'] ?? '') ?></textarea>
                    <?= isset($alert['text']) ? '<span class="alert error">' . esc($alert['text']) . '</span>' : '' ?>
                </div>
                <div class="honeypot [ visually-hidden ]">
                    <label for="website">Website <abbr title="required">*</abbr></label>
                    <input type="url" id="website" name="website" tabindex="-1">
                </div>
                <button class="button" type="submit" value="submit" name="submit">Send</button>
            </fieldset>
            </form>
            <?php endif ?>
        </div>
    </div>
</div>
</section>

<?php snippet('footer') ?>



