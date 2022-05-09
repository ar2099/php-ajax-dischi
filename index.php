<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<?php
include __DIR__ . "./album.php";
?>
<?php
    // var_dump($database)
    ?>
<body>
  <div id="app">
    <?php
    foreach($database as $album => $voce){
     echo "$album";
     echo "</br>";
     foreach($voce as $caratteristica => $descrizione){
         echo "$caratteristica - $descrizione";
         echo "</br>";
     }
     echo "</br>----------------</br>";
    }
    ?>
  </div>

<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="main.js"></script>
</body>
</html>