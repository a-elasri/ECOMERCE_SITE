<?php
include("../cnx.php");
?>
<?php
ini_set('memory_limit','5512M'); 
set_time_limit(5000);
    $query='';
    $table_data = '';
    $filename = "products1.json";
    $data = file_get_contents($filename); 
    $array = json_decode($data, true); 

    $req="SELECT * FROM categorie";
    $res=$dbcnx->query($req);
    $arr=$res->fetch_all();

    foreach($arr as $val){
        echo "<br>".$val[1]."---- CATEGORY --------------------------------------------------------------------------------------------------------- <br>";
        $req1="SELECT * FROM products";
        $res1=$dbcnx->query($req1);
        $arr1=$res1->fetch_all();
        echo "<h1  class='uk-margin'>$val[1]</h1>";
        foreach($arr1 as $ligne){
                $myString = trim($ligne[5]);
                
                if (strpos($myString, "$val[0]") !== false){
                    echo "product is $ligne[1] <br>";
                }            
        }
    }
        
?>