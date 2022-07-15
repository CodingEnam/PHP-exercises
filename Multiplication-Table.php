<?php
//This is my 4th Assignmnet Part I
//For part I, I am creating a multiplication table for numbers from 2-10

//First, I will begin my code with a for loop
//I will use some HTML codes to sort the numbers and the table
    echo "<style>"; //We can use internal CSS to design our table and give it simple borders
    echo "table, tr, td {
        border: 1px solid black}";
    echo "</style>";
    echo "<table>";
    for ($x=1; $x<=10; $x++){
        echo "<tr>";
        //I started one loop that would take values for x from 2 to 10
        //Now I will create another loop that would make the multiplication table
        for ($y=1; $y<=10; $y++){
            //I am using another loop to create a cross multiplication table complete from both rows and columns
            echo "<td>". $x * $y ."</td>";
        }
        echo "</tr>"; //This is for closing the table rows
    }
    echo "</table>"; //This is for closing the table
?>