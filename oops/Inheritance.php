<?php
    class Mobile{
        public $company;//public na enga vena use panikalam
        public $model;
        private $organization="apple";//within the class la matum access panikalam

        //constructor vanthu kudukura variable this class oda bind pannum
        public function __construct($c,$m)
        {
            $this->company=$c;
            $this->model=$m;
        }
        //destruct automatica function ah call pannum at the end of the script.

        public function __destruct()
        {
            echo "<h1>My dear modern world mobile user</h1>";
        }

        //final use pana again intha name use pani vera class la namalala function create pana mudiyathu
        final public function about(){
            echo "This is my mobile ".$this->company.$this->model." Welcome to ".$this->organization."<br/>";
        }
        public function intro(){
            echo "hello ".$this->company." user!<br/>";
        }
    }
    class Features extends Mobile{
        public $ram;
        public $rom;
        public $campixel;
        public function __construct($c, $m,$r,$ro,$cam)
        {
            parent::__construct($c, $m);
            $this->ram=$r;
            $this->rom=$ro;
            $this->campixel=$cam;
        }
//
        public function features(){
            echo "I had ".$this->company.$this->model." with ".$this->ram."gb ram".$this->rom."gb rom with ".$this->campixel."pixel<br/>";
        }
        public function intro(){
            echo "Hey ".$this->company." user stay tuned with us!<br/>";
        }
    }
    $dearam=new Mobile("iphone","14");
    $dearam->about();
    $dearamiphone=new Features("iphone","14","8","128","48");
    $dearamiphone->about();
    $dearamiphone->features();
    $dearamiphone->intro();//Method overriding
    $dearam->intro();

    echo "$dearam->company";//public access panalam
    //echo "$dearam->organization"; access pana mudiyathu bcoz private

?>