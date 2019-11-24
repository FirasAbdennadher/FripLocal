<h1>Liste des sous categories</h1>
<input type="button" value="nouveau inscrit" onclick="window.location.href='index.php?controller=souscategorie&action=add1'">
<?php

echo "<table border=1>
<tr>
	<th>nom sous categorie</th>
	<th>nom categorie</th>
	
</tr>";

 $x="";

foreach($souscategories as $souscategorie){
	foreach ($tab as $tab1)

	{
		if($souscategorie->id_sous===$tab1->id_sous)
		{
		$x .= ' ' .$tab1->nom_cat;
		}
	}
	
	echo "<tr>";
		echo "
			
			<td>".$souscategorie->nom_sous_cat."</td>
			<td>".$x."</td>

			<td>
			    <a href='index.php?controller=souscategorie&action=supp&id_sous=".$souscategorie->id_sous."'>supp</a> 
                            <a href='index.php?controller=souscategorie&action=edit1&id_sous=".$souscategorie->id_sous."&nomcat=".$x."'>modif</a>
                        </td>
		";
	echo "</tr>";
$x="";
 
}
echo "</table>";
?>