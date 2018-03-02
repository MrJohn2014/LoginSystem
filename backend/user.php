<?php
	include_once 'dbconnect.php';
    $query = "SELECT userid from users";
    $result = mysqli_query($conn,$query);
    $i = 0;
    while($row = mysqli_fetch_row($result)){
       $userid[$i] = $row[0];
       $i++;
    }
    $data = "";
    
    for($j=0;$j<count($userid);$j++){
      $data = json_decode($data,true);
      $data["users"][$j]["id"] = $userid[$j];
      $data = json_encode($data);
    }

    echo $data;
    
?>