<?php

namespace App\Models;



class Task
{
    protected $userName;
    protected $userEmail;
    protected $text;    
    protected $status;

    public function __construct($text, $username, $useremail, $status = 0)
    {
        $this->text = $text;        
        $this->username = $username;
        $this->useremail = $useremail;
        $this->status = $status;
    }

    public function getText()
    {
        return $this->text;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getUseremail()
    {
        return $this->useremail;
    }

    public function getStatus()
    {
        return $this->status;
    }
    
}
