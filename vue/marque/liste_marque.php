<h1>Liste des marques</h1>
<input type="button" value="nouveau marque" onclick="window.location.href='index.php?controller=marque&action=add1'">
<?php
echo "<table border=1>
<tr>
	<th>nom marque</th>
	
</tr>";
foreach($marques as $marque){

	echo "<tr>";
		echo "
			
			<td>".$marque->nom_marq."</td>
			<td>
			    <a href='index.php?controller=marque&action=supp&id=".$marque->id."'>supp</a> 
                            <a href='index.php?controller=marque&action=edit1&id=".$marque->id."'>modif</a>
                        </td>
		";
	echo "</tr>";
	
}
echo "</table>";
?>