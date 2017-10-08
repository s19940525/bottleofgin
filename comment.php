

<?php

$name = $_POST["name"];
$mes = $_POST["mes"];
$post = $_POST["post"];

if($post){

     #WRITE DOWN COMMENTS#

    $write = fopen("com.txt", "a+");
    fwrite($write, "<b><u>$name</u></b><br>$mes<br>");
    fclose($write);


     #DISPLAY COMMENTS#

    $read = fopen("com.txt", "r+t");

    echo "All comments:";

    while(!feof($read)){
        echo fread($read, 1024);
    }

    fclose($read);

}

else {
     #DISPLAY COMMENTS#

    $read = fopen("com.txt", "r+t");

    echo "All comments:";

    while(!feof($read)){
        echo fread($read, 1024);
    }

    fclose($read);
}

?>﻿﻿