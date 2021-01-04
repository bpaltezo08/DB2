<?php 

    $DBNAME = "id14264360_manager";
    $DBPWD = "Acesadasop@12345";
    $DBUSER = "id14264360_user";
    $DBHOST = "localhost";
    
    class createCon  {

        function connect() {
            // $this->host = $DBHOST;
            // $this->user = $DBUSER;
            // $this->pass = $DBPWD;
            // $this->db = $DBNAME;

            // print_r($this->host);
            
            $con = mysqli_connect("localhost", "id14264360_user", "Acesadasop@12345", "id14264360_manager");
            if (!$con) {
                die('Could not connect to database!');
            } else {
                $this->myconn = $con;
                // echo 'Connection established!';}
            }
            return $this->myconn;
        }

        function close() {
            mysqli_close($this->myconn);
            // echo 'Connection closed!';
        }

    }

    function Fetch($query){
        $connection = new createCon();
        $connection->connect();
        $result = mysqli_query($connection->myconn, $query);
        $connection->close();
        return $result;
    }
    
    function GetFetch($query){
        $connection = new createCon();
        $connection->connect();
        $result = mysqli_query($connection->myconn, $query);
        $res = [];
        $res[] = $result;
        $res[] = mysqli_insert_id($connection->myconn);
        $connection->close();
        return $res;
    }

?>
