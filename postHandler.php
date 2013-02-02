<?php
	import_request_variables("pg", "form_");
    mysql_connect("localhost", "conco", "password") or die(mysql_error());
    
    //mysql_query("CREATE DATABASE jeanpierre");//one time event
    mysql_select_db("jeanpierre") or die(mysql_error());
    $denominations = array ("concorde", "Protestants", "baptistes","E.E.R Anglican", "Presbyteriens"); //expand this array to match the leng of your denomination )( respectez l'ordre mr.!!)
    
    $query = "CREATE TABLE church( ".
    		"id INT NOT NULL AUTO_INCREMENT, ".
    		"umwaka VARCHAR(100) NOT NULL, ".
    		"denomination VARCHAR(140) NOT NULL, ".
    		"lieu VARCHAR(140) NOT NULL, ".
    		"membres VARCHAR(140) NOT NULL, ".
    		"PRIMARY KEY (id )); "; 
    // members can be in or string, umwaka can be time or int or string
   //mysql_query($query); //firstime event. better do it with mysql command line
   if(isset($_POST['submit'])){
	    for($count = 0; $count < 5 ;$count++){
	    	$umwaka = 'form_umwaka'.intval( $count);  $year = $$umwaka;
	    	$denomination = $denominations[ $count];
	    	//handle the checkbox
	    	$lieu = 'form_lieu'.intval( $count); $location = $$lieu;
	    	$membre = 'form_membre'.intval( $count); $member = $$membre;
	    	$row_data = array($year, $denomination, $location, $member); // no double $ on denomination
	     	
	    	if (!empty($row_data)) {
	    		//if (empty($year)  || empty($denomination) || empty($location) ||empty($$member)) {continue;}// you might need to change this !!
	    		$query = "INSERT INTO church (umwaka, denomination, lieu, membres) VALUES ('$year', '$denomination', '$location', '$member')";
	    		if (mysql_query($query)){
	    			continue;
	    			echo 'Successful inserts: ' . mysql_affected_rows()."\r\n"; //you dont really need to do anything
	    		}
	    		else
	    			echo 'query failed'."\r\n";
	    			//reload the page to give the user another chance to fill in the table
	    	}
	    	else {
	    		continue;
	    		//ask the user to fill in the table appropriatly
	    	}
	    }
    }
?>
