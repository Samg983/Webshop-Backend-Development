<!--NAV-->
<?php
include_once './DAO/WinkelwagenItemDAO.php';
include_once './DAO/CategorieDAO.php';

$arrCategorieen = CategorieDAO::getCategorieen();
?>
<ul id="nav-mobile" class="side-nav fixed">
    <li>
        <img id="logo_menu" alt="logo Smooth" src="img/smooth_logo.svg">
    </li>
    <li>

        <div class="input-field">
            <input id="search" type="search" required>
            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
            <i class="material-icons">close</i>
            <div class="search-results"></div>
        </div>


    </li>
    <li><a class="waves-effect waves-red disabled" href="">Welkom gast!<i class="material-icons">mood</i></a></li>
    <li><a class="waves-effect waves-red" href="index.php">Home <i class="material-icons">store</i></a></li>
    <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
            <li>
                <a class="collapsible-header waves-effect waves-red">Smoothies <i class="material-icons">arrow_drop_down</i></a>
                <div class="collapsible-body">
                    <ul>
                        <?php 
                        foreach ($arrCategorieen as $categorie) {
                        ?>
                        <li><a href="smoothies_overview_categorie.php?categorieId=<?php echo $categorie->getCategorieId(); ?>"><?php echo $categorie->getNaam();  ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </li>
        </ul>
    </li>
    <?php
    $countWinkelwagenItems = count(WinkelwagenItemDAO::getWinkelwagenItems());
    ?>
    <li><a class="waves-effect waves-red " href="winkelmandje.php">Winkelmandje <i class="material-icons">shopping_cart</i> 
    <?php if (!($countWinkelwagenItems == 0)) { ?>
                <span class="new badge red" data-badge-caption="item(s)"><?php echo $countWinkelwagenItems; ?></span></a></li>
            <?php } ?> 
    <li><a class="waves-effect waves-red" href="account.php">Account <i class="material-icons">account_circle</i></a></li>
    <li><a class="waves-effect waves-red" href="contact.php">Contact <i class="material-icons">info_outline</i></a></li>
    <li><a class="waves-effect waves-red" href="admin.php">Admin <i class="material-icons">supervisor_account</i></a></li>
</ul>
<a href="#" data-activates="nav-mobile" id="nav_icon" class="button-collapse hide-on-large-only">Menu<i class="material-icons">menu</i></a>
<!--END NAV--> 


<header>
    <div class="carousel carousel-slider" data-indicators="true">
        <div class="carousel-item backgroundOne left-align" href="#one!">
            <div class="position-text-left">
                <h2>Smootness Smoothies</h2>
                <p>The best you can get!</p>
            </div>
        </div>
        <div class="carousel-item backgroundTwo right-align" href="#two!">
            <div class="position-text-right">
                <h2>Smootness Smoothies</h2>
                <p>Every sip is a hit!</p>
            </div>
        </div>
        <div class="carousel-item backgroundThree left-align" href="#three!">
            <div class="position-text-left white-text">
                <h2>Smootness Smoothies</h2>
                <p>Fresh fruit every day!</p>
            </div>
        </div>
        <div class="carousel-item backgroundFour right-align" href="#four!">
            <div class="position-text-right white-text">
                <h2>Smootness Smoothies</h2>
                <p>Awesome freshness!</p>
            </div>
        </div>
    </div>

</header>