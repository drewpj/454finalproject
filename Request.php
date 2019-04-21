<?php

echo "This is in request";
print_r($_POST);
print_r($_GET);
$myfile = fopen("newFile.txt","w");
$myFile2 = fopen("/home/ubuntu/newFile.txt","w");

sleep(60);

fwrite($myfile,"yeet");
fwrite($myFile2,"dope");
fclose($myfile);
fclose(myFile2);


echo "this is after request";


?>
