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
      <div class="footer-top [ split-child ]">
        <div class="footer-top__left">
          <div class="logo-icon">
            <img src="assets/icons/logo-wo-circle.svg" alt="">
          </div>
          <div class="site-contact">
            <p class="[ color-light ]">Call 07811 376300</p>
            <p><a class="[ color-secondary text-600 transform-upper ]" href="#">colin@chbarons.co.uk</a></p>
          </div>
        </div>
        <div class="footer-top__right">
          <div class="company-social">
            <h3 class="[ color-light ]">Follow</h3>
            <ul>
              <li>
                <a href="#">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 20 20">
                  <title>facebook-with-circle</title>
                  <path d="M10 0.4c-5.302 0-9.6 4.298-9.6 9.6s4.298 9.6 9.6 9.6 9.6-4.298 9.6-9.6-4.298-9.6-9.6-9.6zM12.274 7.034h-1.443c-0.171 0-0.361 0.225-0.361 0.524v1.042h1.805l-0.273 1.486h-1.532v4.461h-1.703v-4.461h-1.545v-1.486h1.545v-0.874c0-1.254 0.87-2.273 2.064-2.273h1.443v1.581z"></path>
                  </svg>
                </a>
              </li>
              <li><a href="#">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 20 20">
                <title>instagram-with-circle</title>
                <path d="M13 10c0 1.657-1.343 3-3 3s-3-1.343-3-3c0-0.171 0.018-0.338 0.049-0.5h-1.049v3.997c0 0.278 0.225 0.503 0.503 0.503h6.995c0.277 0 0.502-0.225 0.502-0.503v-3.997h-1.049c0.031 0.162 0.049 0.329 0.049 0.5zM10 12c1.104 0 2-0.896 2-2s-0.896-2-2-2-2 0.896-2 2 0.896 2 2 2zM12.4 7.9h1.199c0.166 0 0.301-0.135 0.301-0.3v-1.199c0-0.166-0.135-0.301-0.301-0.301h-1.199c-0.166 0-0.301 0.135-0.301 0.301v1.199c0.001 0.165 0.136 0.3 0.301 0.3zM10 0.4c-5.302 0-9.6 4.298-9.6 9.6s4.298 9.6 9.6 9.6c5.302 0 9.6-4.298 9.6-9.6s-4.298-9.6-9.6-9.6zM15 13.889c0 0.611-0.5 1.111-1.111 1.111h-7.778c-0.611 0-1.111-0.5-1.111-1.111v-7.778c0-0.611 0.5-1.111 1.111-1.111h7.778c0.611 0 1.111 0.5 1.111 1.111v7.778z"></path>
                </svg>
              </a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; CH Barons LTD 2022. All Rights Reserved.Website by Mat doidge</p>
      </div>
    </div>
  </footer>

  <?= js([
    'assets/js/main.js'
  ]) ?>

</body>
</html>
