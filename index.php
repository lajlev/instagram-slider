<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Instagram slider</title>

  <link href="https://fonts.googleapis.com/css?family=Bungee|Raleway:400,700,900" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="jquery.fullpage.css" />
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" src="jquery.fullpage.js"></script>

  <link rel="stylesheet" href="style.css">

  <script type="text/javascript">
    $(document).ready(function() {
      $('#fullpage').fullpage({
        navigation: true,
        navigationPosition: 'right',
        paddingTop: '50px',
        css3:false
      });
      // Scroll to next section every 5 sec
      window.setInterval(function(){
        $.fn.fullpage.moveSectionDown();
      }, 7000);

      // reload page after 20 * 7 sec
      window.setInterval(function(){
        location.reload();
      }, 140000);
    });
  </script>
</head>
<body>
  <?php
    require_once __DIR__ . '/vendor/autoload.php';
    $media = Bolandish\Instagram::getMediaByHashtag("$_GET['tag']", 20);
  ?>

  <header>
    <h1 class="logo">
    #<?php echo $_GET['tag']; ?></h1>
    <h2 class="subheader">Del dit billede på Instagram #<?php echo $_GET['tag']; ?></h2>
  </header>

  <div id="fullpage">
    <?php foreach($media as $value){ ?>
    <div class="section">
      <div class="img-wrap">
        <img
          data-src="<?php echo $value->display_src; ?>'"
          class="instagram"
          style="transform: rotate(<?php echo rand(-5, 5); ?>deg) translate(-50%, 0);"
        >
      </div>
    </div>
    <?php } // End foreach ?>
  </div>
</body>
</html>