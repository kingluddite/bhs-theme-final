<?php get_header(); ?>

  <div class="container">
    <div class="row">
      <div class="col-md-9">
       <div class="col-md-3">
    <!-- this will be our sidebar so we rename the heading -->
    <h2>Sidebar</h2>
    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
</div>
      </div>

      <?php get_sidebar(); ?>
<aside class="col-md-3 sidebar">
    <?php if ( ! dynamic_sidebar( 'page' ) ): ?>
    <!-- if no sidebar, show this content -->
    <h3>Set Up this sidebar</h3>
    <p>Drag stuff here so your sidebar wont be empty</p>

    <?php endif; ?>
</aside>
    </div><!-- END .row -->

<?php get_footer(); ?>
