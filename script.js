$(document).ready(function() {
  $('.btn').on('click',function(){
    var selected = $('.player_code').val();
    callApi(selected);
  });

  function callApi(player_code) {
    //console.log(player_code);
    $.ajax({
      'url': 'http://localhost:8888/boolean/ex/php-basket/data.php',
      'method': 'GET',
      'data':{
        'player': player_code
      },
      'contentType': 'application/json',
      'success': function(data) {
        console.log(data);
        var player = JSON.parse(data);
        // console.log(player);
        // var keys = Object.keys(db);
        // console.log(db[keys[1]]);

        /*for (var key in db) {
          console.log(key);
          // console.log('----------------');
          // console.log('selezionato '+ selected);
          // console.log('----------------');
          // console.log('chiave '+key);
          if (key == player_code) {
            console.log('ok');
          };
        };*/

      },
      'error':function() {
        alert('db non caricato');
      }
    });
  }
});
