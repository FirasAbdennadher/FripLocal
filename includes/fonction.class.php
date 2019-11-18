<?php
class fonction
{
	
public function generer_chaine($size)
{
$password = '';
$chars = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9,
"a", "b", "c", "d", "e", "f", "g",
"h", "i", "j", "k", "l", "m", "n",
"o", "p", "q", "r", "s", "t", "u",
"v", "w", "x", "y", "z"
);

for($i=0;$i<$size;++$i)
$password .= ($i%3) ? strtoupper($chars[array_rand($chars)]) : $chars[array_rand($chars)];

return $password;
}

public function redirect($url){
	//header("location:$url");
	echo "<script>window.location.href='".$url."';</script>";
}
}
?>