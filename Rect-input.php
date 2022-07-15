<form action="" method="post">
    <input type="text" name="n" value="" placeholder="Please the width of rect"><br><br>
    <input type="text" name="n2" value="" placeholder="Please Enter the height of rect"><br><br>
    <input type="submit" name="s" value="Submit">
</form>

<?php
if(isset($_POST['s'])){
    $l=$_POST['n']; //taking the value from the first text box
    $w=$_POST['n2'];
}


for ($i=1 ; $i<=$w; $i++){
    for ($j=1; $j<=$l; $j++){
        if($j==1 || $j==$l || $i==1 || $i == $w){
            echo "* ";
        }else{
            echo "&nbsp;&nbsp;&nbsp;";
        }
        
    }
    
    echo "<br/>";
}

?>