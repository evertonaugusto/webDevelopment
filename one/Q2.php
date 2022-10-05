<?php 

    function printSelection($animals, $animal_selecting){

        $arr = $animals;

        print "<select name='animal'>";

        foreach($arr as $animals){

        if($animals == $animal_selecting){
            print "<option selected>$animals</option>";
        } else {
            print  "<option>$animals</option>";
        }
       
      }
            print "</select>"; 
        
    }

    printSelection(['dog', 'cat', 'bunny'], 'cat');
?>
