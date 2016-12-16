<?php
//__call

class LearnCall{
    public $errormessgae='error';

    public function __construct()
    {
        echo 'success!';
    }

    public function __call($name, $arguments)
    {
        echo "class $name is not exits.";
        echo "the arguments is".var_dump($arguments);
    }

    public function teemo(){
        echo "teemo is exist";

    }
}

$learncall=new LearnCall();
$learncall->teemo();
$learncall->teeddd('ddd','ccc');
