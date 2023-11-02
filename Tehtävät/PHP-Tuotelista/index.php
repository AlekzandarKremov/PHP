<?php 
    include "functions.php";
    include "header.php";
?>
<body>
    <div class="container-fluid p-5 bg-primary text-white text-center">
        <nav class="navbar navbar-expand-sm bg-primary-row">
            <a>Selaa Kahveja</a>
            <a>Lisää Uusi Kahvi</a>
        </nav>
    </div>
        <table style="width:100%" class="border border-3">
            <tr class="border border-bottom-1">
              <th>AutoID</th>
              <th>Auto</th>
              <th>Varastossa</th>
              <th>Myyty</th>
              <th>Muokkaa</th>
              <th>Poista</th>
            </tr>
            <?php foreach ($cars as $car) { ?>
            <tr class="border border-bottom-1">
                <td><?php echo $car[0]; ?></td>
                <td><?php echo $car[1]; ?></td>
                <td><?php echo $car[2]; ?></td>
                <td><?php echo $car[3]; ?></td>
                <td>
                    <a title="edit_car.php?id=<?php echo $car[0]; ?>" href="edit_car.php?id=<?php echo $car[0]; ?>"><i class="bi bi-pencil-square"></i></a>
                </td>
                <td>
                    <a title="delete_car.php?id=<?php echo $car[0]; ?>" href="delete_car.php?id=<?php echo $car[0]; ?>"><i class="bi bi-trash"></i><a>
                </td>
        <?php } ?>
        </table>
</body>
</html>