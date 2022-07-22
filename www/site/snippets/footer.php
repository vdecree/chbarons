<?php
/*
  Snippets are a great way to store code snippets for reuse
  or to keep your templates clean.

  This footer snippet is reused in all templates.

  More about snippets:
  https://getkirby.com/docs/guide/templates/snippets
*/
?>
  </main>

  <footer class="footer [ bg-primary color-primaryoffest pad-top-1500 pad-bottom-1500 ]">
    <div class="wrapper">
      <div class="footer-top">
        <div class="footer-top__left">
          <div class="logo-icon">
            <img src="assets/icons/logo-wo-circle.svg" alt="">
          </div>
          <div class="site-contact">
            <p class="[ color-light ]">Call <?= $site->telephone() ?></p>
            <p><a class="[ color-secondary text-600 transform-upper ]" href="mailto:<?= $site->email() ?>"><?= $site->email() ?></a></p>
          </div>
        </div>
        <div class="footer-top__right">
          <div class="company-social">
            <h3 class="[ color-light ]">Follow</h3>
            <?php snippet('social') ?>
          </div>
        </div>
      </div>
      <div class="footer-bottom [ pad-top-1400 gap-top-1400 ]">
        <p>&copy; CH Barons LTD 2022. All Rights Reserved. <a href="https://matdoidge.co.uk">Website by Mat doidge</a></p>
      </div>
    </div>
  </footer>

  <?= js([
    'assets/js/main.js'
  ]) ?>

</body>
</html>
