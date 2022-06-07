<?PHP
/*==========================*\
|   PDO Database connection  |
\*==========================*/

class Database
{

    private $archi;

    public function getConn()
    {

        // database informations configuration file
        include_once 'config/database.config.php';

        $this->archi = null;

        try {
            // connectiong to the database with PDO
            $this->archi = new PDO('mysql:host=' . $host . ';
                                port=' . $port . ';
                                dbname=' . $database, $user, $pass
            );

            // deactivate emulated requests
            $this->archi->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        } catch (Exception $e) {

            // dabtabase connection error message
            die('<p style=\"font:14px calibri;\">La connexion à la base de donnée est impossible: </p> ' . $e->getMessage());

        }
        return $this->archi;
    }

}
