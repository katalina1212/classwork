<?php
namespace aitsydney;
class Database{
    protected $connection;
    public function_construct(){
        $this -> connection = mysqli_connect('localhost','website','password','data');
    }
}
?>