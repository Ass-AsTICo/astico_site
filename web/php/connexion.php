
<?php
    //include("vars.php");
    session_start();
    $user = "root";
    $pass = "";
    $db_name = "astico";

    $dbh = new PDO('mysql:host=localhost;dbname='.$db_name, $user, $pass);
    if( array_key_exists('email', $_POST) and array_key_exists('password', $_POST) ){
        $mail = $_POST['email'];
        $mdp  = $_POST['password'];

        $tab = array();
        $indice = 0;
        $t = array();
        try {
            $q = "SELECT mail,password FROM astico_adherant where  mail='".$mail."' and password='".$mdp."'";
            
            $stmt = $dbh->prepare($q);
            $stmt->execute();

            $ligne = $stmt->fetch(PDO::FETCH_ASSOC);

            if( $ligne != false ){
                $_SESSION["connecter"] = true;
                $tab["code"] = 200;
                /*foreach ($ligne as $col_value) {
                    $tab[$indice] = $col_value;
                    $indice = $indice + 1;
                }*/
            }

            $stmt->closeCursor();

            $t['infos'] = $tab;
            
        } 
        catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
        echo json_encode($t);
    }
    $dbh = null;
?>