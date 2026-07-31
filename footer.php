<footer class="footer">
<small>&copy; <?php echo date('Y'); ?> Minami Gouda</small>
    <ul class="footer__links">
      <li><a href="#about">About</a></li>
      <li><a href="#works">Works</a></li>
      <li><a href="#price">Price</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
</footer>
  <button class="back-to-top" type="button" aria-label="ページの先頭へ戻る">
    ↑
  </button>
</div><!-- /.site -->
<script src="<?php echo esc_url( get_template_directory_uri() . '/script.js?ver=' . filemtime( get_template_directory() . '/script.js' ) ); ?>"></script>
<?php wp_footer(); ?>
</body>
</html>