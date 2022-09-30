<?php
use PHPUnit\Framework\TestCase;
require __DIR__ . "/../classes/viewClass.php";
class viewClassTest extends TestCase
{
    public function test_view():void
    {
        $view = new view();
        $this->assertObject($view,"valid object");

    }
    public function test_setTemplate():void
    {
        $view = new view();
        $input = "index";
        $results = $view->setTemplate($input);

        $this->assertIsString($results,"valid string");   
        //$tpl = new $filename;
        //$this->assertContains($tpl);
    }
    public function test_display():void
    {
        $view = new view();
        $filename = "view.tpl.php";
        $view->setTemplate($filename);
        $display = $view->display();
       $this->assertIsString($filename,"valid string");   
    }


    public function test_addVar():void
    {
       $view = new view();
       $input="addVar";
       $output = $view->setTemplate($name,$value);
         $this->assertEquals($name,$value);
    }
}
?>