<?php
    $conn = new mysqli("localhost", "root", "", "adsi" ) ;
    if( $conn->connect_errno ) {
          echo "Falla al conectarse a Mysql ( ". $conn->connect_errno . ") " .
          $conn->connect_error ;
} else {
echo $conn->host_info. "\n" ;
} ;