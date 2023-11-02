<?php
    if ($voitto) {
        echo "<h3>Oikein! Arvasit sanan: $arvattava_sana.</h3>";
    } elseif ($havio) {
        echo "<h3>Arvasit väärin. Oikea sana oli: $arvattava_sana.</h3>";
    } else {
    ?>
    <div class="text-center">
    <h2>Arvaa Sekoitettu Sana:<br> <h3><?php echo $sekoitettu_sana; ?></h3></h2>
    </div>
    <center>
    <form method="post">
        <input type="hidden" name="arvattava_sana" value="<?php echo $arvattava_sana; ?>">
        <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault"></label>
            <input type="text" class="form-control" placeholder="Kirjoita Vastauksesi Tähän" id="inputDefault" name="arvaus"><br>
        </div>
        <button type="submit" value="tarkista" class="btn btn-primary">Tarkista</button>
    </form>
    </center>
    <?php
    }
    ?>

    <?php if ($voitto || $havio) { ?>
    <form method="get">
    <button type="submit" value="tarkista" class="btn btn-primary">Pelaa Uudestaan</button>
    </form>
    <?php } ?>
   
</body>
</html>