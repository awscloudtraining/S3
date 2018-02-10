<?php

//connection string
include 'connecttoaws.php';

// Create a unique bucket name
$bucket = uniqid("awscloudtraining", true);

// Create our bucket using our unique bucket name
$result = $client->createBucket(array(
    'Bucket' => $bucket
));

//HTML to Create our webpage
echo "<h1 align=\"center\">Hello and Welcome to AWS Cloud Training!</h1>";
echo "<div align = \"center\"><img src=\"https://s3.ap-south-1.amazonaws.com/vijaytest1234/Capture.JPG"></img></div>";
echo "<h2 align=\"center\">You have successfully created a bucket called {$bucket}</h2>";
echo "<div align=\"center\"><a href=\"createfile.php?bucket=$bucket\">Click Here to Continue</a></div>";
?>
