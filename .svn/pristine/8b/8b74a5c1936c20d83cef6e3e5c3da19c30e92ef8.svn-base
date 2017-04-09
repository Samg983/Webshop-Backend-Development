<!doctype html>
<html lang="nl">

    <?php
    include_once './DAO/ProductDAO.php';
    include_once './DAO/ProductHoeveelheidDAO.php';
    include_once './DAO/HoeveelheidDAO.php';
    include_once './DAO/TagDAO.php';
    include_once './DAO/ProductTagDAO.php';
    include_once './DAO/ReviewDAO.php';
    require_once './Head.php';

    if (isset($_POST["productId"])) {
        $productId = $_POST["productId"];
        $naam = $_POST["firstName"] . " " . $_POST["lastName"];
        $reviewTekst = $_POST["reviewTekst"];

        $review = new Review(0, $naam, $reviewTekst, 3, $productId);

        ReviewDAO::insert($review);
    }
    ?>

    <body class="hansHendrick">
        <?php
        require_once './Upper.php';




        $productId = $_GET['productId'];

        $product = ProductDAO::getProductById($productId);

        $arrProductHoeveelheid = ProductHoeveelheidDAO::getProductHoeveelheidByProductId($productId);

        $arrProductTags = ProductTagDAO::getProductTagByProductId($productId);

        //$arrProductPrijzen = $product->getProductPrijzenByProductId();
        //echo '<pre>', var_dump($arrProductHoeveelheid), '</pre>';
        ?>

        <main class="wrapper ">

            <div class="row" style="margin-top:1em">
                <h4 class="col s12 red-border"><?php echo $product->getNaam(); ?></h4>
            </div>

            <div class="row">
                <div class="col s12 m6 l6">
                    <img alt="product" src="<?php echo $product->getLocatieFoto(); ?>" class="responsive-img" />
                </div>

                <div class="col s12 m6 l6">
                    <p class="priceInclBtw mediumFont"><?php
                        $priceInclBtw = number_format($arrProductHoeveelheid[0]->getPrijsInclBtw(), 2, '.', ' ');
                        echo $priceInclBtw;
                        ?><span style="font-size:.5em"> incl btw</span></p>
                    <p class="priceExclBtw"><?php
                        $priceExclBtw = number_format($arrProductHoeveelheid[0]->getPrijsExclBtw(), 2, '.', ' ');
                        echo $priceExclBtw;
                        ?><span style="font-size:.5em"> excl btw</span></p>
                    <form action="addProductToWinkelmandje.php" method="post">
                        <div class="input-field col s12 m6 l6">
                            <select class="amount-drink" name="gekozenHoeveelheid">
                                <?php
                                foreach ($arrProductHoeveelheid as $value) {


                                    $hoeveelheidId = $value->getHoeveelheidId();
                                    $hoeveelheid = HoeveelheidDAO::getHoeveelheidById($hoeveelheidId);
                                    ?>
                                    <option data-exclbtw="<?php echo $value->getPrijsExclBtw(); ?>" data-btw="<?php echo $value->getBtw(); ?>" data-inclbtw="<?php echo $value->getPrijsInclBtw(); ?>" value="<?php echo $hoeveelheidId; ?>"><?php echo $hoeveelheid->getNaam(); ?></option>
                                    <?php
                                }
                                ?>


                            </select>
                            <label>Selecteer je ultieme hoeveelheid</label>
                        </div>

                        <div class="input-field col s12 m6 l6">
                            <input id="aantal" type="number" name="aantal" min="1" max="10" value="1">
                            <label id="aantalLabel" for="aantal">Aantal</label>
                        </div>
                        <input type="hidden" name="productId" value="<?php echo $productId; ?>">
                        <button type="submit" class="waves-effect waves-light btn full-width red darken-4"><i class="material-icons left">shopping_cart</i>In winkelmandje</button>
                    </form>
                    <ul class="collection">
                        <?php
                        foreach ($arrProductTags as $productTag) {
                            $tag = TagDAO::getTagById($productTag->getTagId());
                            ?>

                            <li class="collection-item"><?php
                                echo $tag->getTagNaam();
                                ?></li>


                        <?php } ?>


                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col s12">
                    <h5>Smoothie beschrijving</h5>
                    <p class="small-margin-bottom product-description"><?php echo $product->getBeschrijving(); ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col s12">
                    <h5>Reviews</h5>
                    <h6 style="margin-top:1em">Algemene beoordeling</h6>
                    <div class="stars">
                        <i class="material-icons small red-text text-darken-4">stars</i>
                        <i class="material-icons small red-text text-darken-4">stars</i>
                        <i class="material-icons small red-text text-darken-4">stars</i>
                        <i class="material-icons small red-text text-darken-4">stars</i>
                        <i class="material-icons small grey-text text-lighten-2">stars</i>
                    </div>
                </div>
            </div>


            <div class="row" id="reviews">

                <?php
                $arrReviews = ReviewDAO::getReviewByProductId($productId);

//echo '<pre>', var_dump($arrReviews), '</pre>';

                foreach ($arrReviews as $review) {
                    ?>
                    <div class="col s12  card hoverable review">

                        <div class="stars">
                            <?php
                            $aantalRood = $review->getAantalSterren();
                            $aantalGrijs = 5 - $aantalRood;

                            for ($i = 0; $i < $aantalRood; $i++) {
                                ?>
                                <i class="material-icons tiny red-text text-darken-4">stars</i>
                                <?php
                            }

                            for ($j = 0; $j < $aantalGrijs; $j++) {
                                ?>
                                <i class="material-icons tiny grey-text text-lighten-2">stars</i>
                            <?php } ?> 
                        </div>
                        <p><?php echo $review->getReviewTekst(); ?></p>
                        <p><?php echo $review->getKlantNaam(); ?></p>
                    </div>
                <?php } ?>

            </div>




            <div class="row">
                <div class="col s12">
                    <h6>Schrijf een review over dit product en wie weet wint u wel elke dag een verse smoothie gedurende 2 weken!</h6>
                    <form action="product_detail.php?productId=<?php echo $productId; ?>#reviews" method="post">
                        <div class="input-field col s12 m4">
                            <input id="first_name" type="text" class="validate" name="firstName">
                            <label for="first_name">Voornaam</label>
                        </div>
                        <div class="input-field col s12 m4">
                            <input id="last_name" type="text" class="validate" name="lastName">
                            <label for="last_name">Achternaam</label>
                        </div>

                        <div class="input-field col s12 m4">
                            <input id="email" type="email" class="validate" name="email">
                            <label for="email" data-error="Gelieve een juist email adres in te vullen">Email</label>
                        </div>
                        <div class="input-field col s12 m6">
                            <textarea id="reviewtext" class="materialize-textarea" name="reviewTekst"></textarea>
                            <label for="reviewtext ">Uw ongezoute mening</label>
                        </div>
                        <div class="input-field col s12 m6">
                            <p>Selecteer het aantal sterren dat dit product verdient</p>
                            <div>
                                <i class="material-icons small grey-text text-lighten-2 select-stars">stars</i>
                                <i class="material-icons small grey-text text-lighten-2 select-stars">stars</i>
                                <i class="material-icons small grey-text text-lighten-2 select-stars">stars</i>
                                <i class="material-icons small grey-text text-lighten-2 select-stars">stars</i>
                                <i class="material-icons small grey-text text-lighten-2 select-stars">stars</i>
                            </div>
                        </div>
                        <input type="hidden" name="productId" value="<?php echo $productId; ?>">
                        <button class="btn waves-effect waves-light red darken-4" type="submit">Submit
                            <i class="material-icons right">send</i>
                        </button>
                    </form>

                </div>
            </div>
        </main>

        <?php require './Footer.php'; ?>
    </body>

</html>