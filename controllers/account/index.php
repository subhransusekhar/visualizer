<?php
class Account_Index extends Controller{
    function Account_Index(){
        //needed to excecute the parent contructor
        parent::Controller();
    }
    
    function doBefore(){
        $this->site_title = "Home";
    }
	function addToHead(){
    function doDefault(){
        
    }
	function printCount(){
    function doAfter(){
        $this->setView("account/index",true);
    }
}