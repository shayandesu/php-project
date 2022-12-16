<?php

$firstname= $_GET["fn"];
$lastname = $_GET["ln"];
$email = $_GET["email"];
$message = $_GET["msg"];


$storagefile = "storage.txt";
if (!file_exists($storagefile))
{
	file_put_contents($storagefile, "1");
}

$count = file_get_contents($storagefile);
file_put_contents($storagefile, ($count + 1));

$newfile= fopen("$count.txt", "w+") or die("Unable to open file!");

$txt =  "Name: $firstname $lastname\n";
fwrite($newfile, $txt);

$txt =  "Email-Address: $email\n";
fwrite($newfile, $txt);

$txt =  "Comment is: $message\n";
fwrite($newfile, $txt);

fclose($newfile);

echo "Information Saved Successfully";

?>
