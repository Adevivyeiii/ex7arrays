<?php
  $company = 'album Time';
  $title = 'Array practice';
  $topic = 'Music';
  $franchise = 'Iron Maiden';

  // A simple array
  $albums = array(
    'Iron Maiden',
    'Killers',
    'Number of the Beast',
    'Piece of Mind',
    'Powerslave',
    'Somewhere in Time',
    'The Clairvoyant',
    'No Prayer for the Dying',
    'Fear of the Dark',
    'Virtual XI',
    'X-factor',
    'Brave New World',
    'Dance of Death',
    'A Matter of Life and Death',
    'Final Frontier',
    'Book of Souls'
  );

  //An associative array
  $albumYears = array(
     'Iron Maiden' => 1980,
    'Killers' => 1981,
    'Number of the Beast' => 1982,
    'Piece of Mind' => 1983,
    'Powerslave' => 1984,
    'Somewhere in Time' => 1985,
    'The Clairvoyant' => 1986,
    'No Prayer for the Dying' => 1988,
    'Fear of the Dark' => 1990,
    'Virtual XI' => 1994,
    'X-factor' => 1996,
    'Brave New World' => 2000,
    'Dance of Death' => 2004,
    'A Matter of Life and Death' => 2008,
    'Final Frontier' => 2012,
    'Book of Souls' => 2016
      );

  // Count how many items are stored in the array $album
  $albumLength = count($albums);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body>
    <main class="container py-4">
      <h1><?php echo $topic; ?>: <em><?php echo $franchise; ?></em></h1>
      <p>There are <?php echo $albumLength; ?> studio albums from  <em><?php echo $franchise; ?></em> .</p>
      <ul class="list-group pb-4" style="max-width: 20rem;">
        <?php
          foreach ($albums as $album) {
              echo '<li class="list-group-item">'.$album.'</li>';
          }
          // Let's unset $album so it can be used again later
          unset($album);
        ?>
      </ul>
      <p>The best <em><?php echo $franchise; ?></em> album is <em><?php echo $albums[3]; ?></em>.</p>
      <hr>
      <h2 class="h5 mb-4">The <em><?php echo $franchise; ?></em> albums were released in the following years:</h2>
      <ul class="list-group pb-4" style="max-width: 20rem;">
        <?php
          foreach ($albumYears as $album => $year) {
              echo '<li class="list-group-item justify-content-between"><em>'.$album.'</em> '.$year.'</li>';
          }
          // Let's unset $album so it can be used again later
          unset($album);
        ?>
      </ul>
    </main>
    <footer class="container">
      <hr>
      <?php echo '<p>Copyright &copy; '.date('Y').' '.$company.'. All rights reserved.</p>'; ?> 
  </body>
</html>