<?php
class Account_Account extends Controller{
    function Account_Account(){
        //needed to excecute the parent contructor
        parent::Controller();
    }
    
    function doBefore(){
        $this->site_title = "My Account";
    }

    function doDefault(){
        
    }
    function doAfter(){
        $this->setView("account/account",true);
    }
}