<?php
	class Database {
		private static $dbName = 'mseet_38465775_PraktPWIOT'; // Example: private static $dbName = 'myDB';
		private static $dbHost = 'sql109.hstn.me'; // Example: private static $dbHost = 'localhost';
		private static $dbUsername = 'mseet_38465775'; // Example: private static $dbUsername = 'myUserName';
		private static $dbUserPassword = 'Batakpunya'; // // Example: private static $dbUserPassword = 'myPassword';
		 
		private static $cont  = null;
		 
		public function __construct() {
			die('Init function is not allowed');
		}
		 
		public static function connect() {
      // One connection through whole application
      if ( null == self::$cont ) {     
        try {
          self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword); 
        } catch(PDOException $e) {
          die($e->getMessage()); 
        }
      }
      return self::$cont;
		}
		 
		public static function disconnect() {
			self::$cont = null;
		}
	}
?>