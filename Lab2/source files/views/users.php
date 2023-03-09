<?php 
$users = convert_file_to_array();
$key = array("visit Date","IP","Name","email","Message");
foreach($users as $user){
    $i=0;
    $userDetails = explode(",",$user);
    echo str_repeat("*",30);
    echo "<div>";
    foreach($userDetails as $value){
       echo "<h3> $key[$i]: $value </h3>";
       $i++; 
    }
    echo "</div>";
    
}
