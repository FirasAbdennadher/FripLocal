<h1>Liste des photos</h1>
<input type="button" value="nouveau photos" onclick="window.location.href='index.php?controller=photo&action=add1'">
<?php
echo "<table border=1>
<tr>
	<th>nom photo</th>
	
</tr>";
foreach($photos as $photo){

	echo "<tr>";
		echo "
			
		<td><img src='photos/".$photo->nom_photo."' height='150'></td>
			<td>
			    <a href='index.php?controller=photo&action=supp&id=".$photo->id."'>supp</a> 
                            <a href='index.php?controleur=photo&action=edit1&id=".$photo->id."'>modif</a>
                        </td>
		";
	echo "</tr>";
	
}
echo "</table>";
?>