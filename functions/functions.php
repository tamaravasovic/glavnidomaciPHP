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


    function validate_user_login() {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $Username = clean($_POST['Username']);
            $Password = clean($_POST['Password']);
            if (empty($Username) || empty($Password)) {
                $errors[] = "Sva polja moraju biti popunjena!";
            }
            if (!empty($errors)) {
                foreach ($errors as $error) {
                    echo "<div class='alert alert-danger alert-dismissible'  role='alert'>
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
              </button>
              <strong>Greška!</strong> $error
              </div>";
                }
            } else {
                login($Username, $Password);
            }
        }
    }
    function login($Username, $Password) {
        $sql = "SELECT * FROM zaposleni WHERE username='$Username'";
        $result = query($sql);
        confirm($result);
        if (row_count($result) == 1) {
            $row = fetch_array($result);
            $db_password = $row['password'];
            if ($Password === $db_password) {
                $UserId = $row["idZaposlenog"];
                $_SESSION["User_ID"] = $UserId;
                $_SESSION["User_Name"] = $row["ime"];
                $token = bin2hex(random_bytes(50));
                $user = array('id' => $row["idZaposlenog"], 'name' => $row["ime"], 'token' => $token,);
                setcookie("user", json_encode($user), time() + 2678400, '/' );
                redirect("./");
    
            } else {
                echo "<div class='alert alert-danger alert-dismissible'  role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            <strong>Greška!</strong> Pogrešno korisničko ime ili lozinka!
            </div>";
            }
        } else {
            echo "<div class='alert alert-danger alert-dismissible'  role='alert'>
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
          </button>
          <strong>Greška!</strong> Pogrešno korisničko ime ili lozinka!
          </div>";
        }
    }
    
    function contactUs(){
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $kontaktIme = clean($_POST['kontaktIme']);
            $kontaktEmail = clean($_POST['kontaktEmail']);
            $kontaktTelefon = clean($_POST['kontaktTelefon']);
            $kontaktPoruka = clean($_POST['kontaktPoruka']);
            if (empty($kontaktIme) || empty($kontaktEmail) || empty($kontaktTelefon) || empty($kontaktPoruka)) {
                $errors[] = "Sva polja moraju biti popunjena!";
            }
            if (!empty($errors)) {
                foreach ($errors as $error) {
                    echo "<div class='alert alert-danger alert-dismissible'  role='alert'>
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
              </button>
              <strong>Greška!</strong> $error
              </div>";
                }
            } else {
                echo "<div class='alert alert-success alert-dismissible'  role='alert'>
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
              </button>
              Poruka uspešno poslata!
              </div>";
            }
        }
    }
}
?>