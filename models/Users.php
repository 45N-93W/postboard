<?php
class Users {
    public  $username;
    public $useremail;
    public $userpassword;
        /**
     * @param string $useremail;
     */
    public function setUseremail($useremail)
    {
        $this->useremail = $useremail;
    }


    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }
}