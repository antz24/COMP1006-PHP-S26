<?php 
    class database 
    {
        private $host = '172.31.22.43';
        private $username = 'Anthony200636049';
        private $password = 'BxaMeyPaQf';
        private $database = 'Anthony200636049';
        protected $connection;

        public function __construct(
            {
                if(!isset($this->connection))
                    {
                        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
                        if(!$this->connection)
                            {
                                echo '<p>Could not connect to the database </p>'
                                exit;
                            }
                    }
                    return $this->connection;
            }
        )
    }   
?>