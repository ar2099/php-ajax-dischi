<?php
require __DIR__ . "/asset/componenti/database.php";
?>
<?php
require __DIR__ . "/asset/componenti/head.php";
?>

<div id="app">
    <?php
    require __DIR__ . "/asset/componenti/header.php";
    ?>
    
    <div class="corpo">




        <div class="posto-album">

          <div v-for="album in dischi" class="album" >
            <img :src="album.poster" alt="album" class="img-album">
            <p class="titolo">{{ album.title }}</p>
            <p class="autore">{{ album.author }}</p>
            <p class="anno">{{ album.year }}</p>
          </div>

        </div>
    </div>
</div>




<?php
require __DIR__ . "/asset/componenti/footer.php";
?>