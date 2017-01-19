

</div>  <!-- container end -->
<hr>

<footer>
  © <?php bloginfo(); ?>
  <span> |
    <a href="http://example.com/wp-admin/" target="_blank">Dashboard</a> |
    <a href="http://example.com/wp/wp-admin/edit.php" target="_blank">Posts</a> |
    <a href="http://example.com/wp/wp-admin/edit.php?post_type=page" target="_blank">Pages</a> |
    <a href="http://example.com/wp/wp-admin/plugins.php" target="_blank">plugins</a> |
    <a href="http://example.com/wp/wp-admin/customize.php" target="_blank">Customize</a>
  </span>
    <?php dynamic_sidebar('footerwidget'); ?>
  <br><br>
</footer>



<!-- to enquee script files ..  -->
<?php wp_footer(); ?>

</body>
</html>
