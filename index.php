<?php
  include 'data.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  </head>
  <body>
    <div style="height: 33vh;"></div>
    <div class="container">
      <div class="select-player">
        <select class = 'player_code' name ='player_code'>
          <option value = "">Seleziona giocatore</option>
          <?php foreach ($basket_players as $code => $stats): ?>
              <option class="code" value="<?php echo $code ?>" > <?php echo $code;?></option>
          <?php endforeach; ?>
        </select>
        <button type="button" class = 'btn'>Mostra giocatore</button>
      </div>
      <div class="playerStats_container">
        <h1 class="code">Codice Giocatore: <span></span></h1>
        <div class="punti">Punti: <span></span></div>
        <div class="rimbalzi">Rimbalzi: <span></span></div>
        <div class="falli">Falli: <span></span></div>
        <div class="tiriDa2">Tiri da 2 (%): <span></span></div>
        <div class="tiriDa3">Tiri da 3 (%): <span></span></div>
      </div>
    </div>
    <script src="script.js" charset="utf-8"></script>
  </body>
</html>
