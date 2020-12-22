<?php


include "includes/connexion.php";

$query = "SELECT * FROM photo";

$statement = $connect->prepare($query);

$output = '<div class="row">';

if($statement->execute())
{
 $result = $statement->fetchAll();

 foreach($result as $row)
 {
  $output .= '
  <div class="col-md-2" style="margin-bottom:16px;">
   <img src="data:image/jpeg;base64,'.base64_encode($row['nom_photo'] ).'" class="img-thumbnail" />
  </div>
  ';
 }
}

$output .= '</div>';
echo $output;

?>
