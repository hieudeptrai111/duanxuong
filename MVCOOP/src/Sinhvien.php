<?php
namespace hieu\mvcoop;
class sinhVien
{
    public function __construct(
        protected string $name , 
        protected string $code
    ){}


    public function ShowName(){
        echo $this-> name . PHP_EOL;
    }

}
?>