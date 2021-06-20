<?php
include("cnx.php");
session_start();

if(isset($_SESSION['id1'])){
    $loginLink=1;
    $req="select * FROM users WHERE id = ".$_SESSION['id1'];
    $res=$dbcnx->query($req);
    $row=$res->fetch_assoc();
    
    $id=$row['id'];
    $nme=$row['fname'];
    $nme.=" ".$row['lname'];
    $_SESSION['nom']=$nme;
 }
 else{
    $loginLink=0;
 }

?>
<?php

if(isset($_POST['login'])){
    if(!empty($_POST['user']) || !empty($_POST['pass'])){
        $log=$_POST['user'];
        $pass=$_POST['pass'];
        $req="select id from users 
                where email='$log' 
                and password='$pass' ";
        $res=$dbcnx->query($req);
        if($res->num_rows){
            $tab=$res->fetch_assoc();
            $_SESSION['id1']=$tab['id'];
            header("location:index.php");
        }
        else{
        }
    }
    else{
        echo "requette non valide ";        
    }
}
if(isset($_GET['logout'])){
    unset($_SESSION['id1']);
    unset($_SESSION['nom']);
    unset($_SESSION['all_id']);
    header("location:index.php");
}


if(isset($_SESSION['all_id'])){
    $nbr = count($_SESSION['all_id']);
}
else{
    $nbr = 0;
}


?>

<?php
include 'elements/head.html';
include 'elements/navbar.php';
?>
<body style="background-image: linear-gradient(rgba(255,255,255,0.9),rgba(255,255,255,0.9)), url(assets/img/b2.jpg); background-repeat: no-repeat;
  background-attachment: fixed; background-size: cover;" >
    <div id="content"  >
    <br><br>
        <div align="center" class="uk-margin">
            <a href="index.php"><img src="assets/img/blvckn.jpg" width="200px" alt=""></a>
            <br><br><br>
        </div>
        <br>            
            <br>
            <input STYLE="background-color:#736F6E " type='submit' id="remove" value='clear the basket' style>
            <br>
            
<?php
if(isset($_POST['find']) ){
    $x=$_POST['sel'];
}
else{
    $req="SELECT * FROM categorie";
    $res=$dbcnx->query($req);
    $arr=$res->fetch_assoc();
    $x=$arr['id'];
}
?>

<form method="post" action="index.php">
              
                <select name="sel">
                <?php
                $v="";
                $req="SELECT * FROM categorie";
                $res=$dbcnx->query($req);
                $arr=$res->fetch_all();
                    foreach($arr as $val){
                        ?>
                        <option value='<?=$val[0]?>'
                        
                        <?php
                        if(isset($_POST['find'])){

                            if($val[0]==$_POST['sel']){$v=" selected";
                            }
                            else{ $v="";
                            }
                        }
                       ?>
                       
                        <?php echo $v; ?>

                         >
                          <?=$val[1]?>

                        </option>
                        <?php
                    }
                ?>
            </select>
            
            <input STYLE="background-color:#736F6E" type="submit" name="find">
                
</form>

            <br>
            
            <div class="uk-position-relative uk-margin-medium uk-width-2-3  uk-flex-center uk-align-center">
                <div align="center" class="uk-margin">
                <?php 
                        ini_set('memory_limit','5512M'); 
                        set_time_limit(5000);

                            $query='';
                            $req="SELECT * FROM categorie where id='$x'";
                            $res=$dbcnx->query($req);
                            $arr=$res->fetch_all();
                            // var_dump($arr);

                            foreach($arr as $val){
                                $req1="SELECT * FROM products";
                                $res1=$dbcnx->query($req1);
                                $arr1=$res1->fetch_all();
                                echo "<h1  class='uk-margin'>$val[1]</h1>";
                        ?>
                    <div class="uk-width-2-4 uk-child-width-1-4@l uk-child-width-1-3@m uk-child-width-1-3@s uk-flex-center" uk-grid >
                        <?php
                                foreach($arr1 as $ligne){
                                        $myString = $ligne[5];
                                        
                                        if (strpos($myString, "$val[0]") !== false){

                                            echo "<div class='uk-animation-toggle' tabindex='0'>
                                                <div class='uk-card uk-card-default' >
                                                    <div class='uk-card-media-top'>
                                                        <a>
                                                            <img src='$ligne[4]'>
                                                        </a>
                                                    </div>
                                                    <div class='uk-card-body' >
                                                        <h3 class='uk-card-title'>$ligne[1]</h3>
                                                      
                                                        <p> price : $ligne[3]</p>
                                                        <input Add a product class='add' data-id='$ligne[0]' type='submit' value='Add a product'>
                                                        
                                                    </div>
                                                </div>
                                            </div> ";
                                            ?>
                                            <?php
                                        }
                                        else{
                                        }
                            }
                        ?>   
                         
                    </div>
                    <?php
                        }
                    ?>
                </div>     
            </div>
        <br>
        
<?php
include 'elements/footer.html';
?>

<script>
$(document).on("click",".add", function(event){
    event.preventDefault();
    const userId = event.target.getAttribute("data-id");
    console.log(userId);
    var id=userId;
    var action='add';
    $('#pannel').load('index.php #pannel', {
  }, function() {});
    $.ajax({
        url:"add.php",
        method:"POST",
        dataType:"JSON",
        data: {id:id,action:action},
        success:function(data){
            console.log(data);
        }
    }
    );
   
});

$(document).on("click","#remove",function(){
        var action ="delete";
        $('#pannel').load('index.php #pannel', {
        }, function() {});
        $.ajax({
        url: "add.php",
        method:"POST",
        data:{action:action},
        dataType:"JSON",
        success:function(data){
            console.log(data);
            load_data();
        }
    });
});




</script>
