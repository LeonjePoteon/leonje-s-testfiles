<?php
    use PHPUnit\Framework\TestCase;
    require __DIR__ . "/../classes/modelClass.php";

    class modelClassTest extends TestCase
    {
        public function test_model():void
        { 
            $model= new model();
            $this->assertObject($model,"valid object");
        }

        public function Test_getAll():void
        {
            $model = new model();
            $getAll=array();
            $getAll= new getAll(JSON);
            $result = $model->getAll($getall);

            $this->assertArray($model,"valid array");
        }

        public function test_getRecord():void
        {
            $model = new model();
           $info = array();
            $record = new model($getall);
            $ID = 'kyle';
            $output = $model->getRecord($password);
            $this->assertIsString($password,"valid Id");

        }
    }
    ?>