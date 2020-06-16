<?php  
	$servername="localhost";
	$username="root";
	$password="M0n0Chin0";
	$dbname="chatbot";

	$server_time=date("Y-m-d H:i:s");

	$conn=new mysqli($servername,$username,$password,$dbname);

	if($conn){
          echo "Connected";
      }else{
          echo "Failed to Connect";
    }
?>