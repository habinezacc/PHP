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
    		"PRIMARY KEY ( tutorial_id )); "; 
    // members can be in or string, umwaka can be time or int or string
    //mysql_query($query); //firstime event. better do it with mysql command line
   if(isset($_POST['submit'])){
	    for($count = 0; $count < 4 ;$count++){
	    	$umwaka = 'form_umwaka'.intval( $count);
	    	$denomination = $denominations[ $count];
	    	//handle the checkbox
	    	$lieu = 'form_lieu'.intval( $count);
	    	$membre = 'form_membre'.intval( $count);
	    	$row_data = array($$umwaka, $denomination, $$lieu3, $$members); // no double $ on denomination
	     	echo $denomination."\r\n";
	    	if (!empty($row_data)) {
	    		if (empty($$umwaka)  || empty($denomination) || empty($$lieu) ||empty($$membre)) {continue;}// you might need to change this !!
	    		$i =0;
	    		foreach ($row_data as $entry){
		    		switch ($i) {
					    case 0:
					       $entryKey = "umwaka";
					        break;
					    case 1:
					        $entryKey = "denomination";
					        break;
					    case 2:
					        $entryKey = "lieu";
					        break;
				        case 3:
				        	$entryKey = "members";
				        	break;
					}
					$i++;
	    			$query = "INSERT INTO church ($entryKey) VALUES ('$entry')";
		    		if (mysql_query($query)){
		    			continue;
		    			echo 'Successful inserts: ' . mysql_affected_rows()."\r\n"; //you dont really need to do anything
		    		}
		    		else
		    			echo 'query failed'."\r\n";
		    			//reload the page to give the user another chance to fill in the table
	    		}
	    	}
	    }
    }
?>
