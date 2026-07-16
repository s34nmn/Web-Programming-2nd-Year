<?php
$age = 70;

if ($age >= 60) {
    echo "Senior Citizen";
}
elseif ($age >= 18){
    echo "Adult";
}
elseif ($age >= 13){
    echo "Teenager";
} 
elseif ($age >= 0){
    echo "Child";
} 
else {
    echo "Invalid Age";
}


?>