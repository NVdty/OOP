<?php

require_once 'robot.php';
require_once 'hewan.php';
require_once 'orang.php';

/* $robot1 = new robot('rerere', 20);
 $robot1->set_berat(30);
 echo 'beratnya..' .$robot1->get_berat() . '<br>';

 $robothewan = new robot_hewann('huam', 10);
 echo $robothewan->get_suara();
*/
$robot = new robot ('testing', 10);
$robot->set_suara('oke oek')->set_berat(15);

echo $robot->suara . ' - ' . $robot->berat;
 
 ?> 
