<?php
  function generatePlayer(){
    $basket_players = [];
    for ($i=0; $i < 100; $i++) {
      $basket_players[playerCode()] = [
        'punti' => mt_rand(0,50),
        'rimbalzi' => mt_rand(0,200),
        'falli' => mt_rand(0, 5),
        'strike_2' => number_format((mt_rand(0,1000)/10),1,'.',''),
        'strike_3' => number_format((mt_rand(0,900)/10),1,'.','')
      ];
    }
    return $basket_players;
  }

  if (isset($_GET['player']) && strlen($_GET['player']) > 0) { //quando passo get all'ajax
    echo json_encode($basket_players);
    //print_r($basket_players);exit();
  } else { //avvio normasle
    $basket_players = generatePlayer();
  }


  function playerCode(){
    $player_code_container = []; //creo un container che andrà a contenere tutti i codici giocatori generati e
                                //successivamente ne faccio un controllo tra i codici generati in modo che siano unici
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $player_code = '';
    do {
      for ($i = 0; $i < 3; $i++){
        $player_code .= $characters[mt_rand(0, 25)];
      }
      for ($i=0; $i < 3; $i++) {
        $player_code .= mt_rand(0,9);
      }
    }while(in_array($player_code, $player_code_container));
    $player_code_container[] = $player_code;

    return $player_code;
  }

  //serve per non mostrare l'echo a inizio pagina
  // if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' ) {
  //   echo json_encode($basket_players);
  // }


?>
