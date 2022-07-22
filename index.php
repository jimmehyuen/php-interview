<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="bsphp/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="style.php"/>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a href= "https://github.com/jimmehyuen" target="_blank"><span class="navbar-brand mb-0 h1">Logo</span></a>
    </nav>

    <div class="container container-bg">
      <div class="article-container">
        <h2 class="article-title">Articles</h2>
        <div class="cards">
        <?php
          $jsondata = file_get_contents("data/articles.json");
          $data = json_decode($jsondata, true);
          // $output = "<div class='container'>";
          foreach($data as $article) {
            // echo "<div class= 'card'>".$article["title"];
            // echo $article["date"]."<br>";
            //  '<div class ="card">'
          ?>
            <div class="card">
              <a href='<?=$article["url"]?>' target="_blank"><h3 class="card-title"><?=$article["title"]?></h3></a>
              <a href='<?=$article["url"]?>' target="_blank"><img src='<?=$article["image"]?>' class="card-img" /></a>
              <h6 class="card-content"><?=$article["content"]?></h6>
            </div>

          <?php
          }
          ?>



      </div>
      </div>
      <div class="event-container">
        <p class= "event-title">Events</p>
        <div class="event-cards">
        <?php
          $jsondata = file_get_contents("data/events.json");
          $data = json_decode($jsondata, true);
          foreach($data as $events) {

          ?>
            <div class="event-card">
              <a href='<?=$events["url"]?>' target="_blank"><h3 class="event-card-title"><?=$events["title"]?></h3></a>
              <a href='<?="https://maps.google.com/maps?q=".$events["location"]?>' target="_blank"><h3 class="event-card-txt"><?="Location: ".$events["location"]?></h3></a>
              <h3 class="event-card-txt"><?="Date: ".$events["date"]?></h3>
            </div>

          <?php
          }
          ?>
      </div>
    </div>
  </body>
</html>
