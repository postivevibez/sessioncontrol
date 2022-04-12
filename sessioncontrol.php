<?php

/*
sessionControl.php
have controls to set all keys as a group or individually, return values from session as a group or individually, clear values as a group or individually
*/


//define vars

class sessioncontrol {
public $scprofileid = false;
public $scuserid = false;
public $scfirstname = false;
public $sclastname = false;
public $scemail = false;
public $scheadline = false;
public $scsummary = false;



//load data to object vars from an array variable such as $rows
//USED BY EDIT
public function loadarray($inputarray) {
    $this->scprofileid = ($inputarray[0]["profile_id"]);
    //$this->scuserid = ($inputarray[0]["user_id"]); //this is not being returned by add or edit db query since it is set by login.
    $this->scfirstname = ($inputarray[0]["first_name"]);
    $this->sclastname = ($inputarray[0]["last_name"]);
    $this->scemail = ($inputarray[0]["email"]);
    $this->scheadline = ($inputarray[0]["headline"]);
    $this->scsummary = ($inputarray[0]["summary"]);
}

//load values from superglobals to object vars  (input $_GET or $_POST into function call, and sanitize the input values)
//USED BY ADD
public function loadsuper($inputarray) {
    //$this->scprofileid = htmlentities(($inputarray["profile_id"]), ENT_QUOTES);
    //$this->scuserid = htmlentities(($inputarray["user_id"]), ENT_QUOTES);
    $this->scfirstname = htmlentities(($inputarray["first_name"]), ENT_QUOTES);
    $this->sclastname = htmlentities(($inputarray["last_name"]), ENT_QUOTES);
    $this->scemail = htmlentities(($inputarray["email"]), ENT_QUOTES);
    $this->scheadline = htmlentities(($inputarray["headline"]), ENT_QUOTES);
    $this->scsummary = htmlentities(($inputarray["summary"]), ENT_QUOTES);
}

//return variable values from object variables
public function return_scpid() {
    return $this->scprofileid;
    }
public function return_scuid() {
    return $this->scuserid;
    }
public function return_scfn() {
    return $this->scfirstname;
    }
public function return_scln() {
    return $this->sclastname;
    }
public function return_scem() {
    return $this->scemail;
    }
public function return_schl() {
    return $this->scheadline;
    }
public function return_scsm() {
    return $this->scsummary;
    }

//store object variable values in session keys
public function o2s_profileid(){
    $_SESSION['profileid'] = $this->scprofileid;
    }
public function o2s_userid(){
    $_SESSION['userid'] = $this->scuserid;
    }
public function o2s_firstname(){
    $_SESSION['firstname'] = $this->scfirstname;
    }
public function o2s_lastname(){
    $_SESSION['lastname'] = $this->sclastname;
    }
public function o2s_email(){
    $_SESSION['email'] = $this->scemail;
    }
public function o2s_headline(){
    $_SESSION['headline'] = $this->scheadline;
    }
public function o2s_summary(){
    $_SESSION['summary'] = $this->scsummary;
    }

public function o2s_all(){
    $_SESSION['profileid'] = $this->scprofileid;
    $_SESSION['userid'] = $this->scuserid;
    $_SESSION['firstname'] = $this->scfirstname;
    $_SESSION['lastname'] = $this->sclastname;
    $_SESSION['email'] = $this->scemail;
    $_SESSION['headline'] = $this->scheadline;
    $_SESSION['summary'] = $this->scsummary;
    }

public function o2s_all_add(){
    $_SESSION['firstname'] = $this->scfirstname;
    $_SESSION['lastname'] = $this->sclastname;
    $_SESSION['email'] = $this->scemail;
    $_SESSION['headline'] = $this->scheadline;
    $_SESSION['summary'] = $this->scsummary;
    }

//retrieve details from session keys to object variables
public function s2o_profileid(){
    $this->scprofileid = ($_SESSION['profileid']);
    }
public function s2o_userid(){
    $this->scuserid = ($_SESSION['userid']);
    }
public function s2o_firstname(){
    $this->scfirstname = ($_SESSION['firstname']);
    }
public function s2o_lastname(){
    $this->sclastname = ($_SESSION['lastname']);
    }
public function s2o_email(){
    $this->scemail = ($_SESSION['email']);
    }
public function s2o_headline(){
    $this->scheadline = ($_SESSION['headline']);
    }
public function s2o_summary(){
    $this->scsummary = ($_SESSION['summary']);
    }
public function s2o_all(){
        $this->scprofileid = ($_SESSION['profileid']);
        $this->scuserid = ($_SESSION['userid']);
        $this->scfirstname = ($_SESSION['firstname']);
        $this->sclastname = ($_SESSION['lastname']);
        $this->scemail = ($_SESSION['email']);
        $this->scheadline = ($_SESSION['headline']);
        $this->scsummary = ($_SESSION['summary']);
    }

//clear individual details from session
public function clearsession_profileid(){
    unset ($_SESSION['profileid']);
    }
public function clearsession_userid(){
    unset ($_SESSION['userid']);
    }
public function clearsession_firstname(){
    unset ($_SESSION['firstname']);
    }
public function clearsession_lastname(){
    unset ($_SESSION['lastname']);
    }
public function clearsession_email(){
    unset ($_SESSION['email']);
    }
public function clearsession_headline(){
    unset ($_SESSION['headline']);
    }
public function clearsession_summary(){
    unset ($_SESSION['summary']);
    }

//clearall
public function clearsession_all(){
    unset ($_SESSION['profileid']);
    unset ($_SESSION['userid']);
    unset ($_SESSION['firstname']);
    unset ($_SESSION['lastname']);
    unset ($_SESSION['email']);
    unset ($_SESSION['headline']);
    unset ($_SESSION['summary']);
    }
public function clearsession_msg(){
    unset ($_SESSION['success']);
    unset ($_SESSION['error']);
    }





//eof
}
