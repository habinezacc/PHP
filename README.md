what you need to know about this code
===

The way to handle your question is implemented in the file postHandler.php. However, it is crucial that you look into the index.php to see how my form is implememted. 
it is very posible to create a table row dynamically with some indeces, say name='denomination100",but it up to you........
If you decide to follow my way, you will need to expand your switch to how many incries you have in each row
you need to handle the check box;
line 30 to 46 in postHandler.php could be replaced by 
//
  $row_data = array($$umwake, $denomination, $$lieu; $$members);
  $querry = "Insert into church(umwaka, denomination, lieu, members) VALUES (implode(',',$row_data)";
   // this raise "Array to string converstion" error.. try it if you know how to handle this error
   
   
   
   /////////////////////////////////////////////////
   good luck                            ///////////
   ///////////////////////////////////////////////
   
   Conco
