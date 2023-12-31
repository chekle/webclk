<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
</div><!-- #wrap -->

<footer id="footer">
  <section id="footer-body" class="margin-sm">
    <div class="container">
      <div class="row">
        <div class="col-12 d-flex justify-content-between align-items-center">
          <div class="left">
            <img src="<?php bloginfo('template_directory'); ?>/images/logo.svg" alt="webclk logo"/>
          </div>
          <div class="right">
            <div class="social">
              <a href="https://github.com/chekle/" target="_blank" rel="noopener noreferrer" class="me-3" aria-label="Github"><i class="fa-brands fa-github"></i></a>
              <a href="https://gist.github.com/chekle" target="_blank" rel="noopener noreferrer" aria-label="Gists"><i class="fa-solid fa-code"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="footer-terms">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="left">
            <span>&copy; Copyright <?php echo date("Y"); ?> webclk</span>
          </div>
          <div class="right">
            
          </div>
        </div>
      </div>
    </div>
  </section>
</footer>

<?php wp_footer(); ?>

  </body>
</html>