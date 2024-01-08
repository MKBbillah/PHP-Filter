<?php

$ip_address = "127.0.03";

if(filter_var($ip_address, FILTER_VALIDATE_IP)){
    echo "VALID_USER";
}
else{

    echo "INVALID_USER";
}


?>