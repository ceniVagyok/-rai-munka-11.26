<?php 
    class students
    {   
        public $nev = "";
        public $jegyek = array();

        public function atlag(){
            $atlag = array_sum($this->jegyek) / count($this->jegyek);
            return $atlag;
        }
        
        public function __construct($name)
        {
            $this->nev = $name;
        }

        public function jegyetkap($jegy)
        {
            array_push($this->jegyek, $jegy);
        }

        public function __destruct()
        {
            echo $this->nev . " elballagott az iskolából <br/>";
        }

    }  
?>