<h1>Liste des inscrits</h1>
<input type="button" value="nouveau inscrit" onclick="window.location.href='index.php?controleur=categorie&action=add1'">
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
			    <a href='index.php?controleur=categorie&action=supp&id=".$categorie->id_cat."'>supp</a> 
                            <a href='index.php?controleur=inscrit&action=edit1&id=".$categorie->id_cat."'>modif</a>
                        </td>
		";
	echo "</tr>";
	
}
echo "</table>";
?>