<?php
    abstract class Got{
        public $head;
        public $orghead;
        public $temphead;
        public function __construct($h,$oh,$th){
            $this->head=$h;
            $this->orghead=$oh;
            $this->temphead=$th;
        }
        //abstract na ithu kandippa irukanum nu mean;
        abstract public function intro();
    }
    class Kingslanding extends Got{
        public function intro(){
            echo "praise the seven lands my queen ".$this->head;
        }
        public function Ourland(){
            echo "kingslanding is ours";
        }
    }
    class Winterfell extends Got{
        public function intro(){
            echo "praise the seven lands my queen ".$this->head."<br/>";
        }
        public function Ourland(){
            echo "Winterfell is ours";
        }
    }

    $sansa=new Winterfell("mother of dragon","Jon snow","cersei");
    $sansa->intro();
    $sansa->Ourland();
    ?>
