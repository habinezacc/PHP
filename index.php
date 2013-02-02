<form action="postHandler.php" method="POST">
  <table dir="ltr" border="1">
		<colgroup width="50%" />
		<colgroup id="colgroup" class="colgroup" align="center" valign="middle" title="title" width="1*" span="2" style="background:#ddd;" />
		<thead>
			<tr> 
				<th scope="col">DENOMINATION</th>
				<th scope="col"></th>
				<th scope="col">Lieu</th>
				<th scope="col">MEMBERS</th>
				<th scope="col">Umwaka</th>
			</tr>
		</thead>
		<tbody>
		<tr>
				<td><label for="denomination1" name ="denomination1" >concorde</label></td>
				<td><input type="checkbox" name="selected0"></td>
				<td><input type="text" name="lieu0"></td>
				<td><input type="text" name="membre0"></td>
				<td><input type="text" name="umwaka0"></td>
			</tr>
			<tr>
				<td><label for="denomination1" name ="denomination1" >Protestanst</label></td>
				<td><input type="checkbox" name="selected1"></td>
				<td><input type="text" name="lieu1"></td>
				<td><input type="text" name="membre1"></td>
				<td><input type="text" name="umwaka1"></td>
			</tr>
			<tr>
				<td><label for="denomination2" name ="denomination2" >Baptistes</label></td>
				<td><input type="checkbox" name="selected2"></td>
				<td><input type="text" name="lieu2"></td>
				<td><input type="text" name="membre2"></td>
				<td><input type="text" name="umwaka2"></td>
			</tr>
			<tr>
				<td><label for="denomination3" name ="denomination3" >E.E.R Anglican</label></td>
				<td><input type="checkbox" name="selected3"> </td>
				<td><input type="text" name="lieu3"></td>
				<td><input type="text" name="membre3"></td>
				<td><input type="text" name="umwaka3"></td>
			</tr>
			<tr>
				<td><label for="denomination3" name ="denomination4" >Presbyteriens</label></td>
				<td><input type="checkbox" name="selected4"></td>
				<td><input type="text" name="lieu4"></td>
				<td><input type="text" name="membre4"></td>
				<td><input type="text" name="umwaka4"></td>	
			</tr>
		</tbody>
	</table>
	<input type="submit" value="submit" name="submit">
</form>
<?php
//include("religon.php");
?>
