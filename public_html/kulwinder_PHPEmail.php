<!DOCTYPE>
<html>
<head>
<title>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html14/strict.dtd">PHP E-mail</title>
</head>
<body>
<?php
/* 
   $From="Kulwinder Singh <ksingh37@southhills.edu>";
   $To=str_replace("\r\n", ",", $_GET['to']);
   $CC=str_replace("\r\n", ",", $_GET['cc']);
   $BCC=str_replace("\r\n", ",", $_GET['bcc']);
   $subject ="Agenda for tomorrow's meeting";
   $message ="In tomorrow's meeting,we will discuss our new marketing compaign and third-quarter sales result.We will also introduce the sales associates who made
    this quarter's \"100% Club\".";*/
  
  function validateSender($Address)
{
 if(strpos($Address,'@') !==FALSE && strpos($Address,'.')!==FALSE)
{
       return true;
}else{
       return false;
     }
}  

function validateRecipients($Addresses)
{
$Address=explode(",",$Addresses);
$RetValue = true;
foreach($Address as $Email)
{
if(strpos($Email, '@') !==FALSE
   && strpos($Email, '.') !==FALSE)
{
   $RetValue=true;

}else{
     $RetValue=false;
         }
    } 
    return $RetValue;
}

function checkForDuplicates($Addresses)
{
      $Address=explode(",",$Addresses);
      $Count =count($Address);
      $RetValue=false;
      $i=0;
     while($i<$Count){
      $j=0;
      while($j<$Count){
               if(strcasecmp($Adress[$i],$Address[$j])== 0 && $i!=$j)
        {
         $RetValue = true;
        }
        ++$j;
     }
   ++$i;
  }
return $RetValue;
}

$from = "{$_GET['sender_name']} <{$_GET['sender_email']}>";
$to =str_replace("\r\n", ",",$_GET['to']);

$CC =str_replace("\r\n",",",$_GET['cc']);
$BCC =str_replace("\r\n",",",$_GET['bcc']);
$Subject=$_GET['subject'];
$Message=$_GET['message'];

$Headers ="From: $From\r\n";
$Headers .="CC: $cc\r\n";
$Headers .="BCC: $bCC\r\n";
$Headers .="MIME-Version: 1.0\r\n";
$Headers .="Content-Type: text/plain;charset=\"iso-8859-1\"r\n";
$Headers .="Content-Transfer-Encoding: 8-bit\r\n";

if(empty($_GET['sender_name']) || empty($_GET['sender_email']) || empty($_GET['to']) || empty($_GET['subject']) || empty($_GET['message']))
{
 echo "<p>You must enter values in the sender name,sender email,To,subject,and message fields.</p>";

}else if(validateSender($_GET['sender_email']) == false)
{
 echo "The sender's e-mail address does not appear to be valid. Click your browser's back button to return to the message";
}

else if(validateRecipients($To) == false)
{
  echo "<p>One or more of the \"To\" email addresses does not appear to be valid. Click your browser's Back button to return to the message.</p>";
}

else if(isset($GET['cc']) && validateRecipients($cc) == false)
{

  echo "<p>One or more of the \"CC\" email addresses does not appear to be valid. Click your browser's Back button to return to the message.</p>";
}

else if(isset($GET['bcc']) && validateRecipients($bcc) == false)
{
  echo "<p>One or more of the \"BCC\" email addresses does not appear to be valid. Click your browser's Back button to return to the message.</p>";
}

else if(checkForDuplicates($To) ==true)
{
  echo "<p>The \"To\" email addresses contain duplicates. Click your browser's Back button to return to the message.</p>";
}
else if (checkForDuplicates($CC) ==true)
{
  echo "<p>The \"CC\" email addresses contain duplicates. Click your browser's Back button to return to the message.</p>";
}
else if (checkForDuplicates($BCC) ==true)
{
  echo "<p>The \"BCC\" email addresses contain duplicates. Click your browser's Back button to return to the message.</p>";
}
else
{
$MessageSent= mail($To, $Subject, $Message, $Header);
//$MessageSent=true;

if($MessageSent){
  echo"<p>The following message was sent successfully:</p>";
  echo "<p><strong>From</strong>: $From</p>";
  echo "<p><strong>To</strong>: $To</p>";
  echo "<p><strong>CC</strong>: $CC</p>";
  echo "<p><strong>BCC</strong>: $BCC</p>";
  echo "<p><strong>Subject</strong>: $Subject</p>";
  echo "<p><strong>Message</strong>: $Message</p>";
}
else{
    echo "<p>The message was not sent successfully!</p>";
  }
}
?>
<hr /><p><a href="PHPEmail.html">Return to E-Mail form</a></p>

</body>
</html>
