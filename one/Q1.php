<?php 
    function printMatriz($dim){
        
         $min    = 1;
         $max    = 10;
         $number = mt_rand($min,$max);

        print "<table border='1'>";
        
        for($l = 0; $l < $dim; $l++){
            print "<tr>";
                for($c = 0; $c < $dim; $c++){
                    print "<td>$number</td>" ;
                }
            print "</tr>" ;
            
        }

        print "</table>";
    }

    printMatriz(10);

    ?>