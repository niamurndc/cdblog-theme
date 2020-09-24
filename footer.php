
<footer >
  <div class="container text-left">
    <div class="row">
      <div class="col-md-4">
        <div>
          <?php dynamic_sidebar( 'footer1' ); ?>
        </div>
      </div>
      <div class="col-md-4">
        <div>
          <?php dynamic_sidebar( 'footer2' ); ?>
        </div>
      </div>
      <div class="col-md-4">

        <div>
          <?php dynamic_sidebar( 'footer3' ); ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        <p>CH Blog &copy; <?php echo date('Y'); ?> All right reserved</p>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>



