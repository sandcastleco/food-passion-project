<?php

  function get_image_uri($image_name) {
    echo get_bloginfo('template_directory') . '/images/' . $image_name;
  }

?>
