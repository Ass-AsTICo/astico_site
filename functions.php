<?php
    // variables d'environement
    require_once 'vars.php';

    function echo_liste_contact(){
        global $USER_DB, $PASSWORD_DB, $NAME_DB;

        $user       = $USER_DB;
        $pass       = $PASSWORD_DB;
        $db_name    = $NAME_DB;

        $dbh = new PDO('mysql:host=localhost;dbname='.$db_name, $user, $pass);

        try {
            $q = "SELECT * FROM astico_membres;";
            
            $stmt = $dbh->prepare($q);
            $stmt->execute();

            while( $ligne = $stmt->fetch(PDO::FETCH_ASSOC) ){
                echo "<tr>\n";
                foreach ($ligne as $col_value) {
                    echo "<td>\n";
                    echo $col_value;
                    echo "\n</td>\n";
                }
                echo "\n</tr>\n";
            }

            $stmt->closeCursor();

        } 
        catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
        $dbh = null;
    }

?>