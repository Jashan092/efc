<?php
    class account {
        public $name;
        public $title;
        public $status;
        public function __construct($name,$title,$status){
            $this->name = $name;
            $this->title = $title;
            $this->status = $status;
            $this->isActive();
        }
        private function isActive(){
            echo "The name is $this->name <br>";
            echo "The title is $this->title <br>";
            echo "The status is $this->status <br>";
        }
    }
    
    $me = new account("Jashan", "This is title", "Active");








?>