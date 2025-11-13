<?php

function checkEligibility($age) {
    if ($age >= 18) {
        return "Eligible to vote.";
    } else {
        return "Not eligible to vote.";
    }
}

echo checkEligibility(20);  // Output: Eligible to vote.

?>