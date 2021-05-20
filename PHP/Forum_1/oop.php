<?php
class office {
    public $eno;
    public $name;
    public #salary;
    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
}
$am = new office();
$am->set_name("Jashan");
echo $am->get_name("Jashan");
?>