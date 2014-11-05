<?php
//singleton class
class Server {

    protected static $dbLink;
	
    public static function get(){
       if(self::$dbLink == null){
			$dns = 'mysql:host=localhost;';
            self::$dbLink = new PDO($dns, 'root', '');
			$encoding = strtoupper('UTF-8');
            self::$dbLink->exec("SET NAMES '{$encoding}'");
        }
        return self::$dbLink;
    }
	
    private function __construct() {
        return false;
    }
	
    private function __clone() {
		return self::get();
    }
}
?>