<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Catégories de QCM</title>

    </head>

    <body>
        <h1>Catégories de QCM</h1>
       
        <form action="index.php">
            <label>Identifiant de la catégorie : </label>
            <input name="shortname" size="10" type="text"/>
        </form>

        <?php
            if(isset($_GET['shortname'])) {
                $shortname = $_GET['shortname'];
                print $shortname;
            }

            $host = "localhost";
            $username = "slamquiz";
            $passwd = "GTlUFtfzyPNaY9dh";
            $dbname = "slamquiz";

            $idConnexion = new MySQLi($host, $username, $passwd,$dbname);

                if ($idConnexion) {

                    $result = $idConnexion->query(
                        "SELECT * FROM tgv_categorie 
                        WHERE shortname='" . $shortname . "';");
                }
                else {
                    print "Error";
                }
        ?>
    </body>
</html>