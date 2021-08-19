<?php

    class AccesoDatos
    {
        private static $ObjetoAccesoDatos;
        private $objetoPDO;
    
        private function __construct()
        {
            try 
            { 
                $this->objetoPDO = new PDO('mysql:host=remotemysql.com;dbname=lyb9P0rQaP;charset=utf8', 'lyb9P0rQaP', 'lrg8FDRWqW', array(PDO::ATTR_EMULATE_PREPARES => false,PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                $this->objetoPDO->exec("SET CHARACTER SET utf8");
            } 
            catch (PDOException $e) 
            { 
                print "Error!: " . $e->getMessage(); 
                die();
            }
        }
    
        public function RetornarConsulta($sql)
        { 
            return $this->objetoPDO->prepare($sql); 
        }

        public function RetornarUltimoIdInsertado()
        { 
            return $this->objetoPDO->lastInsertId(); 
        }
    
        public static function DameUnObjetoAcceso()
        { 
            if (!isset(self::$ObjetoAccesoDatos)) 
            {          
                self::$ObjetoAccesoDatos = new AccesoDatos(); 
            } 
            return self::$ObjetoAccesoDatos;        
        } 
    }

?>