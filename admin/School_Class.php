<?php



class School_Manager{
public function Login($Email,$Password,$link){
$sql = "SELECT * FROM `Teacher_List` WHERE `Email`='$Email'";
$result = $link->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
$Password_Row = $row["Password"];
$id           = $row["id"];

if(password_verify($Password,$Password_Row)){
$_SESSION["loggedin"] = true;
$_SESSION["id"] = $id;
$_SESSION["Email"] = $Email;
return  header("location: index.php");
} else{
return "Password incorrect";
}

}
} else{
 return "The Email Error";
}
}
public function Insert_Student($Full_Name,$Number,$Email,$Address,$Name_Father,$link){

$TimeNow = $this->TimeNow();

$sql = "INSERT INTO Students_List (Full_Name, Number, Email, Address, Name_Father, Time_Add)
VALUES ('$Full_Name', '$Number', '$Email', '$Address', '$Name_Father', '$TimeNow')";
if ($link->query($sql) === TRUE) {
return "New record created successfully";
} else {
return "Error: " . $sql . "<br>" . $link->error;
}

}

public function TimeNow(){
    return date("Y/m/d");
}
}