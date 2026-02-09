<?php


$filename="example.txt";
$content= "Hello, this text was written using PHP!";


/*The w tells the PHP how to open the file where by w means writemode */
//fopen for opening the specified file 
$file=fopen($filename,"w");

//write in the specified file with the fwrite function 

fwrite($file,$content);

//close file
fclose($file);

echo "File created  and written successfully";



?>