Hi Welcome to India Pavilion Exotic Indian Cuisine from quiz2<br />
<?php
$fname=$_GET['fname'];
$lname=$_GET['lname'];
$gender=$_GET['gender'];
$password=$_GET['password'];
$payment=$_GET['payment'];
$email =$_GET['email'];
$at=strrpos($email,'@');
$dot=strrpos($email,'.');
$emailCorrect;
$foodCorrect;

echo "Name: ".$fname." ".$lname."<br />";
echo "Email: ".$email."<br />";
echo "Gender: " .$gender."<br>";
echo "Password: ".$password."<br />";
echo "Payment: ".$payment."<br />";

if($at != false && $dot != false && $dot > $at){
$emailName=substr($email, 0,strlen($email) -$at +1);
$domain=substr($email,$at+1,$dot- $at -1);
$domainExt=substr($email,$dot +1);
echo "EmailName:".$emailName."<br />";
echo "Domain:".$domain."<br />";
echo "Domain Ext: ".$domainExt."<br />";
$emailCorrect=true;
}else {
$emailCorrect=false;
}

$salt='salty';
$cryptPass=md5($password,$salt);
echo $fname." ".$lname."<br />".$gender."<br />".$cryptPass."<br />".$payment."<br />";
if(isset($_GET['lunch'])){
$lunch=$_GET['lunch'];
foreach($lunch as $value){
echo "IP Food Item: ".$value."<br />";
}
$foodCorrect=true;
}else {
$foodCorrect=false;
}
?>
