<?php
echo ' <table border="1">
<thead>
<tr>
	<th>nom</th>
	<th>prenom</th>
	<th>email</th>
	<th>tel</th>
	<th>pays</th>
</tr></thead>
<tbody>
';
foreach($results as $personne){

	echo "<tr>";
		echo "
			<td>".$personne->nom_pers."</td>
			<td>".$personne->prenom_pers."</td>
			<td>".$personne->email_pers."</td>
			
			<td>".$personne->tel_pers."</td>
			<td>".$personne->status."</td>

		";
	echo "</tr>";
	
}
echo "</tbody>
</table>";
?>
