<?php
//backend
$a[] = "Anna";
$a[] = "Brittany";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Gunda";
$a[] = "Hege";
$a[] = "Inga";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";

$q = $_GET["q"];
$q = strtolower($q);
$hint ="";
if($q != ""){
    foreach($a as $name){
        if(stristr($q,substr($name, 0, strlen($q)))){
            if($hint ==""){
                $hint = $name;
            }else{
                $hint += ", ".$name;
            }
        }
    }
    echo ($hint==="") ? "No suggestion" : $hint;
}

?>