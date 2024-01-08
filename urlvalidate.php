<?php

$url = "https://github.com/MKBbillah";

$url = filter_var($url, FILTER_SANITIZE_URL);


if(filter_var($url,FILTER_VALIDATE_URL)){
    echo "Perfect";
}
else{
    echo "sorry";
}



?>