<?php

// Set the time zone
date_default_timezone_set("America/New_York");

// Include the Library
require_once("s3_object.php");

// Response Array
$resp = array();

// Params
$callback = (isset($_GET['callback'])) ? $_GET['callback']:"callback";
$bucket = (isset($_GET['bucket'])) ? $_GET['bucket']:"bayarea";

// Make sure we have something in the bucket
if( ($contents = $s3->getBucket($bucket)) !== false )
{
	// Save the bucket name in response
	$resp = $contents;
}

// Show us what we got
echo $callback."(".json_encode($resp).")";

?>
