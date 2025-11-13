<?php
// $age = 25;
// $hasID = true;

// if ($age >= 18 && $hasID) {
//     echo "Access granted.";
// } else {
//     echo "Access denied.";
// }

$age = 50;
    $hasLicense = false; 

    if ($age >= 18) {
    
        if ($hasLicense) {
            printf("You can drive.\n");
        } else {
            printf("You need a license to drive.\n");
        }
        
    } 
    else {
        printf("You are too young to drive.\n");
    }


  
?>
