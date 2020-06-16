<?php
include"db.php";
  
$server_time=date("Y-m-d H:i:s");

if(isset($_POST['text'])){

$msg=mysqli_real_escape_string($conn,$_POST["text"]);

$query=mysqli_query($conn,"SELECT * FROM question WHERE question LIKE '[[:<:]]".$msg."[[:>:]]'");
$count = mysqli_num_rows($query);

    if($count=="0"){
      
        $data = "Perdon, no entiendo lo que quieres decir";
        $query4=mysqli_query($conn,"INSERT INTO chats(user,chatbot,date)values('$msg','$data','$server_time')");
      
    }else{
        while($row = mysqli_fetch_array($query)){
              
                $data= $row["answer"];
                $query4=mysqli_query($conn,"INSERT INTO chats(user,chatbot,date)values('$msg','$data','$server_time')");
            }
        }
}  
?>