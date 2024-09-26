<?php
declare(strict_types=1); 

require_once 'A.php';
require_once 'B.php';
require_once 'C.php';
require_once 'I.php';

class Demo {
   
    public function demoMethod(I $x, I $y): I {
        return $y;  
    }
    
}
$demo = new Demo();
$a = new A();
$b = new B();
$c = new C();
$demo->demoMethod($a, $b);  
$demo->demoMethod($c, $a); 
?>