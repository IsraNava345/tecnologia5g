<?php
    class ConnectionServer{
        /* private $host = "localhost";
        private $database = "tecnologia_5g";
        private $user = "root";
        private $password = "";
        private $connection; */
        private $host = "localhost";
        private $database = "dlujhujc_tecnologia_5g";
        private $user = "dlujhujc_israel_nava";
        private $password = "Vegito1810";
        private $connection;


        public function getConnection(){
            $this->connection = null;
            try {
                $this->connection = mysqli_connect(
                    $this->host, $this->user, $this->password, $this->database);
            } catch (Exception $th) {
                echo "Error: " . $th->getMessage();
            }
            return $this->connection;
        }
        public function closeConnection(){
            mysqli_close($this->connection);
        }
    }

?>