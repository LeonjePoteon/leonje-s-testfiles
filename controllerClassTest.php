<?php
    use PHPUnit\Framework\TestCase;
    require __DIR__ . "/../classes/controllerClass.php";
    class controllerClassTest extends TestCase
    {
        public function test_controllerClass_object():void
        {
            $controller = new controllerClass;
            $this->assertIsObject($controller,"valid  object");
        }
        public function test_setModel():void 
        {
            $controller = new controllerClass;
            $m = new model;
            $controller = $m;
            $this->assertNull($m,"this variable is indeed set to null");
            

        }
        public function test_setview(): void
        {
            $controlller = new controller;
            $m = new view;
            $controller = $v; 
            $this->assertNull($v,"this vairiable is indeed set to null");
            
        }
    }
    ?>