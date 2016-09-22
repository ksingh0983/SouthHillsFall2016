<?php
echo "Welcome to India Pavillion<br /><br />";
echo "<form action ='quiz2.php' method='get'>";
echo "Enter your first Name <input type='text' name='fname'><br/>";
echo "Enter your last Name<input type='text' name='lname'><br/>";
echo "Enter your password<input type='text' name='password'><br/><br />";
echo "Email:<input type='text' name='email'><br /><br />";
echo "Please select your gender<br />";
echo "Male <input type='radio' name='gender' value='Male'>";
echo "Female<input type='radio' name='gender' value='Female'><br/><br />";
echo "Lunch Menue<br />";
echo "<input type='checkbox' name='lunch[]' value='Saag Paneer' >Sagg Paneer&nbsp";
echo "<input type='checkbox' name='lunch[]' value='Veg Biryani' >Veg Biryani&nbsp";
echo "<input type='checkbox' name='lunch[]' value='Ch Malabar' >Ch Malabar&nbsp<br/>";
echo "<input type='checkbox' name='lunch[]' value='Ch Tikka Masala' >Ch Tikka Masala&nbsp";
echo "<input type='checkbox' name='lunch[]' value='Lamb Kadahai' >Lamb Kadahai&nbsp<br/><br/>";
echo "Please Select Payment option<br />";
echo "<select name='payment'>";
echo "<option 'Check'>Check</option>";
echo "<option 'Visa'>Visa</option>";
echo "<option 'Visa'>MasterCard</option>";
echo "<option 'American Express'>American Express</option>";
echo "</select><br />";
echo "<input type='submit' name='Button'>";
echo "</form>"
?>

