<?php
use PHPUnit\Framework\TestCase;
require __DIR__ . "/../classes/sessionClass.php";   
    class sessionClassTest extends TestCase
    {
        public function test_sessionclass_object(): void 
        {
            $session = new sessionclass();
            
            $this->assertObject($session,"this is a valid object");
        }

        public function test_create() : void
        {
            $session = new session;
            $this->assertContains($session,"this is a valid variable");
        }

        public function test_destroy():void 
        {
            $session = new sessionClass();
            $delete = "$session";
            $result = $session->test_destroy($delete);
            $this->assertEmpty('',"no variable is in the class thus successful");
        }

        public function test_remove(): void
        {
            $session = new sessionClass();
            $delete = "$name";
            $result= $session->test_remove($delete);
            $this->assertEmpty('',"no variable is in the class thus successful");
        }

        public function test_add(): void
        { 
            $session = new sessionClass();
            $session = "$name";
            $session="$value";
            $output= $session->test_add($name,$value);
            $this->assertIsInt($value,"valid parameter");
            $this->assertIsString($user,"valid string");

        }

        public function test_accessible() : void
        {
            $session = new sessionClass;
            $session = "$user";
            $session = "$page";
            $display = $session->test_accessible($user,$page);
            $this->assertIsString($user,$page,"valid string");
        }
       

    }
?>