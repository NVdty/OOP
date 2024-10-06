<?php

require_once 'robot.php';
    //inheritance
    class robot_hewann  extends robot{

        public function get_kekuatan(){
            echo 'saya hewan laut';
        }
        
    //overidding

        public function get_suara(){
            return 'suaraya adalah....' .$this->suara;
        }
        // self and parent
        public function testing(){
           return parent::get_suara();
        }
    }  
?>
