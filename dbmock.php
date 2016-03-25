<?php

function getDdData()
{
	$dbData = new stdClass();
	$dbData->fname = "Steph";	
	$dbData->lname = "Miller";
	$dbData->phone = "7575553322";
	$dbData->email = "steph_miller@example.com";
	$dbData->dob = "031281";
	$dbData->mother = "Jill Miller";

	return json_encode($dbData);
}

?>