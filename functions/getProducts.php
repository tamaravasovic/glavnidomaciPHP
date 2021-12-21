<?php include("db.php"); ?>
<?php
    $namePrice = $_POST['namePrice'];
    $lowHigh = $_POST['lowHigh'];
    $sql = "SELECT * FROM oprema o
            JOIN vrsta vr ON vr.vrstaId = o.vrstaId
            JOIN velicina v ON o.velicinaId = v.velicinaId
            order by $namePrice $lowHigh";
    $result = query($sql);
    confirm($result);
    while ($row = fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row["naziv"] . "</td>";
        echo "<td>" . $row["cena"] . "</td>";
        echo "<td>" . $row["nazivVrste"] . "</td>";
        echo "<td>" . $row["nazivVelicine"] . "</td>";
        if(isset($_COOKIE['user'])) {
            echo "<td><a href='izmeni-proizvod.php?id=".$row["opremaId"]."' class='btn btn-success mr-2'><i class='fas fa-edit'></i></a>
            <a class='btn btn-danger' data-toggle='modal' data-target='#delete-product-modal' data-productid='".$row["opremaId"]."' href='javascript:void(0)'><i class='far fa-trash-alt'></i></a></td>";
        }
        echo "</tr>";
    }

?>
