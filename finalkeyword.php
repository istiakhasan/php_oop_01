<?php


final class UserData{   //final use korar karone aita r entend kora jabe na 
    public $user;
    public $userId;
    
    
    public function __construct($userName,$userId){
        
        $this->user=$userName;
        $this->userId=$userId;
        
    }
    public final function display(){   //method er moddhe final key use korar karone aita r entend kora jabe na 
        echo "Username is{$this->user} and user id is{$this->userId}";
    }
}

class Admin extends UserData{
    public $level;
    public function display(){
        echo "Username is {$this->user} and userid is {$this->userId} and user level is {$this->level}";
    }
}
$user="Mamun";
$id="25";
$ur=new UserData($user,$id);
echo "<br>";
$ur->display();
    echo "<br>";
$user="Admin";
$id="1";
$ad=new Admin($user,$id);
$ad->level="Administrator";
$ad->display();


?>