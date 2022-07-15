<!--We will first start our code by creating simple form that will include the 4 buttons for operations and two boxes for numbers-->
<!--The boxes will take input from the user and will tell the user to enter their first and second numbers-->
<form action="" method="post">
    <input type="text" name="n" value="" placeholder="Please Enter a #"><br><br> <!--creating the first input text box-->
    <input type="text" name="n2" value="" placeholder="Please Enter another # "><br><br> <!--creating the second input text box-->
    <input type="submit" name="a" value="ADD"> <!--creating the first button with the add text on it-->
    <input type="submit" name="s" value="SUB"> <!--creating the next button for subtraction-->
    <input type="submit" name="m" value="PRO"> <!--creating the button for multiplication-->
    <input type="submit" name="d" value="DIV"> <!--creating the button for division-->
</form>

<?php

if(isset($_POST['a']))//a is used for add button in the form above
{
    $n=$_POST['n']; //taking the value from the first text box
    $n2=$_POST['n2']; //taking value from the second text box
    $add = $n+$n2; //performing the operatino on the two values
    
    echo "<br><br>The sum of your two numbers is ".$add; //printing the results on the secreen
    
}

if(isset($_POST['s']))
{
    $n=$_POST['n'];
    $n2=$_POST['n2'];
    $sub = $n-$n2;
    
    echo "<br><br>The difference of your two numbers is ".$sub;
    
}

if(isset($_POST['m']))
{
    $n=$_POST['n'];
    $n2=$_POST['n2'];
    $pro = $n*$n2;
    
    echo "<br><br>The product of your two numbers is ".$pro;
    
}

if(isset($_POST['d']))
{
    $n=$_POST['n'];
    $n2=$_POST['n2'];
    $div = $n/$n2;
    
    echo "<br><br>The quotient of your two numbers is ".$div;
    
}

?>