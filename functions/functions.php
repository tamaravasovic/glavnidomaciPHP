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