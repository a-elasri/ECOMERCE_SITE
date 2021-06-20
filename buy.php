<?php
include 'elements/head.html';
?>

<nav style="background: rgb(204,202,202);
background: linear-gradient(180deg, rgba(204,202,202,0.8127626050420168) 0%, rgba(255,255,255,0) 58%);" class="uk-navbar-container uk-visible@s" uk-navbar>
   
    <div class="uk-navbar-left">
        <a href="index.php"><img src="assets/img/cbd-logo.png" width="70px" alt=""></a>
</div>
    <div class="uk-navbar-right">
        <ul class="uk-navbar-nav">
            <li><a href="index.php">HOME</a></li>
            <li>
                <a href="products.php">PRODUCTS</a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li><a href="products.php">Huile de CBD</a></li>
                        <li><a href="products.php">Fleur de CBD</a></li>
                        <li><a href="products.php">E-liquide</a></li>
                        <li><a href="products.php">Comestible & boissons</a></li>
                        <li><a href="products.php">Résine et Extraction</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="about-us.php">ABOUT US</a></li>
            <li><a href="contact-us.php">CONTACT US</a></li>
            <li><a href="services.php">SERVICES</a></li>
            <li>
                <a href="panier.php" class="uk-icon-link" uk-icon="cart"></a>
            </li>
        </ul>
    </div>
</nav>
</div>
</div>

<!--Mobile-->
<div class="uk-position-top">

    <nav class="uk-navbar-transparent uk-navbar-container uk-hidden@s">
        <div class="uk-navbar-left">
            <a class="uk-navbar-toggle" href="#" uk-toggle="target: #offcanvas-nav">
                <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span>
            </a>
        </div>
    </nav>

    <div class="uk-light" id="offcanvas-nav" uk-offcanvas="overlay: true" >
        <div class="uk-offcanvas-bar uk-flex uk-flex-column">
            <ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical">
                <li class="uk-active"><a href="#">HOME</a></li>
                <li class="uk-parent">
                    <a href="products.php">PRODUCTS</a>
                    <ul class="uk-nav-sub">
                            <li><a href="products.php">Huile de CBD</a></li>
                            <li><a href="products.php">Fleur de CBD</a></li>
                            <li><a href="products.php">E-liquide</a></li>
                            <li><a href="products.php">Comestible et boissons</a></li>
                            <li><a href="products.php">Résine et Extraction</a></li>
                    </ul>
                </li>
                <li class="uk-nav-header">cbd Power</li>
                <li><a href="about-us.php">ABOUT US</a></li>
                <li><a href="contact-us.php">CONTACT US</a></li>
                <li><a href="services.php">SERVICES</a></li>
                <li class="uk-nav-divider"></li>
                <li><a href="#"><span class="uk-margin-small-right" uk-icon="cart"></span>Panier</a></li>
            </ul>
        </div>
    </div>
</div>

<body style="background-image: linear-gradient(rgba(255,255,255,0.9),rgba(255,255,255,0.9)), url(assets/img/b2.jpg); background-repeat: no-repeat;
  background-attachment: fixed; background-size: cover;" >
 
<div class="content" align="center">
<br><br><br>
    <h1 style="font-size:50px;">CHECK OUT</h1>
    <div class="uk-width-2-3 uk-align-center" uk-grid>
        <div >
            <div class="uk-card uk-card-default uk-card-body  uk-child-width-1-2@m  uk-child-width-1-2@s uk-margin  uk-text-left" uk-grid>

                <div class="uk-card uk-card-large uk-card-body uk-box-shadow-small">
                <form >
                        <fieldset class="uk-fieldset uk-align-center">

                            <h3 class="">Billing details</h3>
                            
                            <div class="uk-margin uk-width-child-1-3" uk-grid>
                                <div>
                                    <label for="">First name</label><br>
                                    <input class="uk-input " type="text" placeholder="First name">
                                </div>
                                <div>
                                    <label for="">Last name</label><br>
                                    <input class="uk-input " type="text" placeholder="Last name">
                                </div>
                            </div>
                            <div class="uk-margin uk-form-controls">
                                <label for="">Country</label>  
                                <select class="uk-select" >
                                    <option>MOROCCO</option>
                                    <option>ITALY</option>
                                    <option>SPAIN</option>
                                </select>
                            </div>
                            <div class="uk-margin ">
                                <label for="">adresse</label>
                                <input class="uk-input" type="text" placeholder="adresse">
                            </div>
                            <div class="uk-margin">
                                <label for="">Postcode</label>
                                <input class="uk-input" type="text" placeholder="PostCode">
                            </div>
                            <div class="uk-margin ">
                                <label for="">Phone</label>
                                <input class="uk-input" type="text" placeholder="phone">
                            </div>
                            <div class="uk-margin">
                                <label for="">E-mail</label>
                                <input class="uk-input" type="text" placeholder="email">
                            </div>
                            <a class="uk-button uk-button-secondary uk-align-center" href="index.php">go</a>
                        </fieldset>
                    </form>
                </div>
                <div class="uk-card-secondary uk-card-large uk-card-body uk-box-shadow-small">
                    <div class="uk-margin ">
                           <p>
                           manière de paiement
                           </p>
                           <h3>...</h3>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>

 <?php
include 'elements/footer.html';
?>