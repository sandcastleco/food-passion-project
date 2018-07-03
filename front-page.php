<?php get_header(); ?>

<section class="ph3 pv5 cover" style="background-image: url(<?php get_image_uri('background-1.jpg'); ?>);">
  <div class="mw7 center tc">
    <h1 class="dib mt5 mb3 pt4 pt0-ns f1 f-subheadline-l compote ttu lh-solid fw9 tr bb pb4"><span class="outline-compote">Explore <br>your </span><br>food <br>passion <br>project </h1>
    <p class="f3 measure-narrow center">Repair your relationship with food by cultivating knowledge and pleasure at the table and in life</p>
  </div>
</section>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="ph3 pv5 cover shadow-2 z-max relative" style="background-image: url(<?php get_image_uri('background-2.jpg'); ?>);">
  <div class="measure center">
    <h2 class="mt0 lh-title compote">Trade guilt, shame, and nutrients for knowledge, enthusiasm, and wholeness.</h2>
  	<?php the_content(); ?>

    <h3 class="lh-title">Schedule your free 30-minute nutritional consultation with Tiffany.</h3>
<?php
  $response = "";

  function civic_contact_response($type, $message) {
    global $response;
    $class = "";
    if ($type == "success") $class = "green";
    else $class = "red";
    $response = "<div id='contact-response' class='mb3 ${class} ba bw1 pa2'>{$message}</div>";
    echo $response;
  }

  $missing_content = "Please supply all information.";
  $email_invalid   = "Email address invalid.";
  $message_unsent  = "Message was not sent. Please try again.";
  $message_sent    = "Thanks! Your message has been sent.";

  if ($_POST) {
    $response_type = "";
    $response_message = "";

    $name = $_POST['message_name'];
    $email = $_POST['message_email'];
    $message = $_POST['message_text'];
    // $human = $_POST['message_human'];

    $to = 'kevin.mcgillivray@me.com';
    $subject = "New message from foodpassionproject.com";
    $headers = 'From: '. $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n";

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $response_type = "error";
      $response_message = $email_invalid;
    }
    else {
      if(empty($name) || empty($message)) {
        $response_type = "error";
        $response_message = $missing_content;
      }
      else {
        $sent = wp_mail($to, $subject, strip_tags($message), $headers);
        if ($sent) {
          $response_type = "success";
          $response_message = $message_sent;
        }
        else {
          $response_type = "error";
          $response_message = $message_unsent;
        }
      }
    }
  }

  civic_contact_response($response_type, $response_message);

?>

<form id="test" action="<?php the_permalink(); ?>#contact-response" method="post">
  <div class="mb3">
    <label class="sr-only" for="message_name">Name</label>
    <input class="pa2 br3 bw1 ba b--silver w-100" type="text" name="message_name" placeholder="Name" value="<?php if ($_POST && $response_type == "error") echo $_POST['message_name'] ?>">
  </div>
  <div class="mb3">
    <label class="sr-only" for="message_email">Email</label>
    <input class="pa2 br3 bw1 ba b--silver w-100" type="email" name="message_email" placeholder="Email" value="<?php if ($_POST && $response_type == "error") echo $_POST['message_email'] ?>">
  </div>
  <div class="mb3">
    <label class="sr-only" for="message_text">Message</label>
    <textarea type="text" name="message_text" rows="8" class="pa2 br3 bw1 ba b--silver w-100" placeholder="Message"><?php if ($_POST && $response_type == "error") echo $_POST['message_text'] ?></textarea>
  </div>
  <div class="tc mt3">
    <button class="bn dib link pointer bg-civic-orange white b ttu tracked f5 pv2 ph4 br2 shadow-2 raise" type="submit">Send message</button>
  </div>
</form>

    <!-- <form>
      <div>
        <label class="sr-only" for="name">Name</label>
        <input class="w-100 mb2 ph2 pt1 pb0 bn brandon" name="name" type="text" placeholder="Your name">
      </div>

      <div>
        <label class="sr-only" for="email">Email</label>
        <input class="w-100 mb2 ph2 pt1 pb0 bn brandon" name="email" type="email" placeholder="Your email">
      </div>

      <button class="brandon pv1 ph2 bg-white bt-0 bb-0 bl-0 br bw2 ink b--ink ttu b">Submit</button>
    </form> -->
  </div>
</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
