<?php
class paiement{
    private  $cin= null;
    private  $fn =null ;
    private  $ln =null ;
    private  $email = null ;
    private  $mobile = null ; 
    private  $info = null ;
    public function __construct($cin=NULL,$fn,$ln,$email,$mobile,$info){
        $this->cin= $cin; 
        $this->fn= $fn ; 
        $this->ln= $ln ;
        $this->email= $email ;
        $this->mobile= $mobile ;
        $this->info= $info ;
    }
    public function getcin(){
        return $this->cin ;
     }
    
    public function getfn(){
        return $this->fn ;
     }
    public function setfn(){
        $this->fn= $fn ;
        return $this ;
     }
    public function getln(){
        return $this->ln ;
     }
    public function setln(){
        $this->ln= $ln ;
        return $this ;
     }
    public function getemail(){
        return $this->email ; 
     }
    public function setemail(){
        $this->email= $email ;
        return $this ; 
     }
    public function getmobile(){
        return $this->mobile ; 
     }
    public function setmobile(){
        $this->mobile= $mobile ;
        return $this ; 
     }
    public function getinfo(){
        return $this->info ;   
     }
    public function setinfo(){
        $this->info= $info ;
        return $this ;
     }
     
}
?>