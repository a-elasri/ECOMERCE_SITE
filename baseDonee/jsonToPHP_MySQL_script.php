<?php
include("../cnx.php");
?>
<?php
     ini_set('memory_limit','1024M');    
     set_time_limit(8000); 
        $query='';
        $table_data = '';
        $filename = "products.json";
        $data = file_get_contents($filename); 
        $array = json_decode($data, true); 
            foreach($array as $row){               
                echo "<br> ------------------------------------------------------------ <br>";
                $req_exist_prod="SELECT * FROM products where sku = '".$row["sku"]."'";
                    $res_exist_prod=$dbcnx->query($req_exist_prod);
                    
                    if(!$res_exist_prod->num_rows){
                        foreach($row['category'] as $tab){
                            $query .= "".$tab["id"]." ";
                            $requette="SELECT * FROM categorie where id ='".$tab["id"]."'";
                            $res=$dbcnx->query($requette);
                            if(!$res->num_rows){
                                $req = "INSERT INTO categorie (id,name)  VALUES ('".$tab["id"]."', '".$tab["name"]."')";
                                $res=$dbcnx->query($req);
                                echo "data created !";
                            }                          
                        }
                        $reqProd = "INSERT INTO products (`sku`, `name`, `description`, `price`, `image`,`catId` )  
                        VALUES ('".$row["sku"]."', '".$row["name"]."','".$row["description"]."','".$row["price"]."','".$row["image"]."','".$query."')";
                        $resultat=$dbcnx->query($reqProd);
                    }
                    else
                    {
                        echo "prod allready in BD";
                    }
              }           
          ?>