<?php
class BDCONFIG {

    private $HOST;
    private $USER;
    private $PASS;
    private $DBNAME;

    public function __construct()
    {
        $this->HOST="localhost";
        $this->USER = "root";
        $this->PASS="MikeGuazaky0212";
        $this->DBNAME="mscode_smartberrie";

    }
    public function __GET($k){ return $this->$k; }
    public function __SET($k, $v){ return $this->$k = $v; }


    static public function conectar(){
        // $link = new PDO("mysql:host=localhost;dbname=cartas","forge","fgIg28u3smG0TXCUU5nd");
        $link = new PDO("mysql:host=localhost;dbname=mscode_smartberrie","root","MikeGuazaky0212");
        $link->exec("set names utf8");
        $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $link;
    }
}
