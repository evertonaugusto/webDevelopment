<?php 

function formatCpf($numberCpf){

    $numberCpf = preg_replace("/[^0-9]/", "", $numberCpf);
    $digits = strlen($numberCpf);
    
    if($digits === 11){
        $cpfFormatted = substr($numberCpf, 0,3). '.'.
                        substr($numberCpf, 3,3). '.'.
                        substr($numberCpf, 6,3). '-'.
                        substr($numberCpf, 9,2);
    } else {
        return "Invalid CPF =/";
    }

        return $cpfFormatted;
    
}
    echo formatCpf("01234567891");

?>



 



