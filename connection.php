<?php

$severname='localhost';
$dbname='student_db';
$username='root';
$password='';

$conn=mysqli_connect($severname,$username,$password,$dbname);
if(!$conn){
    echo "Connection failed!";
}else{
    echo "Connected successfully!";
};

?>