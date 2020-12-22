<?php
class dashboard extends fonction
{
private $status;

public function __construct($status)
{
$this->status = $status;
}

public function etat1($cnx){
	$results=$cnx->query("select * from personne where status='".$this->status."'")->fetchAll(PDO::FETCH_OBJ);
	return $results;
}

}
?>