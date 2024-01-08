<?php


$person_email = "hadijaman@gmail.com";

echo $person_email = filter_var($person_email,FILTER_VALIDATE_EMAIL);
exit();

if(filter_var($person_email,FILTER_VALIDATE_EMAIL)){
    echo "Perfect";
}
else{
    echo "sorry";
}



?>