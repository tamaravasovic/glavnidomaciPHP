<?php
session_start();
ob_start();

function redirect($location) {
    return header("Location: $location");
    exit();
}
function console_log($data) {
    echo '<script>';
    echo 'console.log(' . json_encode($data) . ')';
    echo '</script>';
}
function alert($data) {
    echo '<script>';
    echo 'alert(' . json_encode($data) . ')';
    echo '</script>';
}

function getProducts() {
    $sql = "SELECT * FROM oprema o
            JOIN vrsta vr ON vr.vrstaId = o.vrstaId
            JOIN velicina v ON o.velicinaId = v.velicinaId";
    $result = query($sql);
    confirm($result);
    while ($row = fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row["naziv"] . "</td>";
        echo "<td>" . $row["cena"] . "</td>";
        echo "<td>" . $row["nazivVrste"] . "</td>";
        echo "<td>" . $row["nazivVelicine"] . "</td>";
        if(isset($_COOKIE['user'])) {
            echo "<td><a href='izmeni-proizvod.php?id=".$row["opremaId"]."' class='btn btn-success mr-2'><i class='fas fa-edit'></i></a><a class='btn btn-danger' data-toggle='modal' data-target='#delete-product-modal' data-productid='".$row["opremaId"]."' href='javascript:void(0)'><i class='far fa-trash-alt'></i></a></td>";
        }
        echo "</tr>";
    }
}
?>