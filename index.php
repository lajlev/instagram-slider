<?php
    require_once __DIR__ . '/vendor/autoload.php';
    $tag = $_GET['tag'];
    $media = Bolandish\Instagram::getMediaByHashtag($tag, 20);
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>#<?php echo $tag; ?></title>

  <link href="https://fonts.googleapis.com/css?family=Bungee|Raleway:400,700,900" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="jquery.fullpage.css" />
  <link rel="stylesheet" href="style.css">

  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" src="jquery.fullpage.js"></script>
  <script type="text/javascript" src="custom.js"></script>

  </script>
</head>
<body>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-23082526-3', 'auto');
    ga('send', 'pageview');
  </script>

  <header>
    <h1 class="logo">
    #<?php echo $tag; ?></h1>
    <h2 class="subheader">Del dit billede på Instagram</h2>
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