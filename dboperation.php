<?php
class dboperation  
{
    public $con,$res;
    function __construct()
{
    $this->con=mysqli_connect("localhost","root","","db_dthquickpay");
    if(!$this->con)
    {
        die("Connection failed :".mysqli_connection_error());
    }
}
public function query($sql)
{
$this->res=mysqli_query($this->con,$sql);
return $this->res;
}
}
?>