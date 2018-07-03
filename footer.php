<section class="pa4 cover" style="background-image: url(<?php get_image_uri('background-3.jpg'); ?>);">

  <div class="mw8 center cf">

    <div class="fl-ns w-third-ns ph3-ns">
      <h2 class="bg-ink white pa2 f4 ttu fw1">Blog</h2>
      <?php
       $posts = get_posts("numberposts=5");
       if( $posts ) :
       foreach( $posts as $post ) : setup_postdata( $post );
      ?>
      <a href="<?php the_permalink() ?>" class="db bg-white-80 pa3 ink br bw2 mb2 link ink">
        <h3 class="mv0"><?php the_title(); ?></h3>
      </a>

      <?php endforeach; endif; ?>
    </div>

    <div class="fl-ns w-third-ns ph3-ns">
      <h2 class="compote">Buy the Food Passion Project Book!</h2>
      <p>A Guide to Repairing your Relationship with Food at the American Table. Finally—a book that addresses the intersection of pleasure and knowledge in how we come to the table!</p>
      <a class="db tc" href="http://book.foodpassionproject.com"><img src="<?php get_image_uri('book-button.png'); ?>" alt="Book cover"></a>
    </div>

    <div class="fl-ns w-third-ns ph3-ns">
      <p class="f4">Looking to repair your relationship with food? Get Tiffany’s musings delivered right to your inbox, with a little food knowledge and a healthy dose of food pleasure, grace, and humor. As a thank you, you’ll get the first chapter of Tiffany’s book emailed to you.</p>
      <div id="mc_embed_signup">
        <form action="https://foodpassionproject.us16.list-manage.com/subscribe/post?u=73bc7a6beb15eb3f00dbc95dd&amp;id=352d6842eb" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <div id="mc_embed_signup_scroll">
            <input type="email" value="" name="EMAIL" class="pa3 mb3 w-100 ba bw1 brandon" id="mce-EMAIL" placeholder="Your email address" required>
            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_73bc7a6beb15eb3f00dbc95dd_352d6842eb" tabindex="-1" value=""></div>
            <input type="submit" value="Sign up" name="subscribe" id="mc-embedded-subscribe" class="ph3 pv2 br3 bg-compote white f4 ttu tracked bn brandon b">
          </div>
        </form>
      </div>
    </div>

    <footer class="fl-ns w-100 mt4 pa4 tc">
      <p>&copy; Food Passion Project, LLC <?php echo date("Y"); ?></p>
    </footer>

  </div>

</section>

<?php wp_footer(); ?>
</body>
</html>
