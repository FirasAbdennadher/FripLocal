<h1>Liste des categories</h1>
<input type="button" value="nouveau inscrit" onclick="window.location.href='index.php?controller=categorie&action=add1'">
<?php
echo "<table border=1>
<tr>
	<th>nom categorie</th>
	
</tr>";
foreach($categories as $categorie){

	echo "<tr>";
		echo "
			
			<td>".$categorie->nom_cat."</td>
			<td>
			    <a href='index.php?controller=categorie&action=supp&id=".$categorie->id."'>supp</a> 
                            <a href='index.php?controller=categorie&action=edit1&id=".$categorie->id."'>modif</a>
                        </td>
		";
	echo "</tr>";
	
}
echo "</table>";
?>