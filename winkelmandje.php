<!doctype html>
<html lang="nl">
    <?php
    require_once './Head.php';

    include_once './DAO/WinkelwagenItemDAO.php';
    include_once './DAO/ProductDAO.php';
    include_once './DAO/HoeveelheidDAO.php';
    include_once './DAO/ProductHoeveelheidDAO.php';

    $arrWinkelwagenItems = WinkelwagenItemDAO::getWinkelwagenItems();

    // echo '<pre>', var_dump($arrProductHoeveelheid), '</pre>';
    ?>

    <body class="hansHendrick">

        <?php require_once './Upper.php'; ?>


        <main class="wrapper">

            <div class="row" style="margin-top:1em">
                <h4 class="col s12  red-border">Winkelmandje</h4>
            </div>

            <?php if (count($arrWinkelwagenItems) == 0) { ?>
                <div class="row">
                    <h5><i class="material-icons">remove_shopping_cart</i>  Geen items in het winkelmandje</h5>
                    <a href="index.php">Koop snel onze overheerlijke smoothies!</a>

                </div>
                <div class="row">
                    <div class="col s4 offset-s8">
                        <div class="mandjeExclBtw">
                            <div class="col s6">
                                <p>Totaal excl btw</p>
                            </div>
                            <div class="col s6">
                                <p><?php
                                    foreach ($arrWinkelwagenItems as $item) {
                                        $exclBTW += $item->getTotaalPrijsExclBtw();
                                        $btw += $item->getTotaalBtw();
                                        $inclBTW += $item->getTotaalPrijsInclBtw();
                                    }
                                    echo "€ " . number_format($exclBTW, 2, '.', ' ');
                                    ?></p>
                            </div>
                        </div>
                        <div class="mandjeBtw ">
                            <div class="col s6 marginTop">
                                <p>Totaal btw</p>
                            </div>
                            <div class="col s6 marginTop">
                                <p><?php echo "€ " . number_format($btw, 2, '.', ' '); ?></p>
                            </div>
                        </div>
                        <div class="mandjeInclBtw ">
                            <div class="col s6 marginTop">
                                <p>Totaal incl btw</p>
                            </div>
                            <div class="col s6 marginTop">
                                <p><?php echo "€ " . number_format($inclBTW, 2, '.', ' '); ?></p>
                            </div>
                        </div>

                        <a class="waves-effect waves-light btn disabled marginTop col s12"><i class="material-icons left">local_atm</i>Betalen</a>
                    </div>

                </div>

            <?php } else { ?>
                <div class="row">

                    <table class="col s12 striped responsive-table">
                        <thead>
                            <tr style="font-size:1.1em">
                                <th data-field="id">Product</th>
                                <!--<th data-field="description">Omschrijving</th>-->
                                <th data-field="exclBtw">Excl BTW</th>
                                <th data-field="inclBtw">Incl BTW</th>
                                <th data-field="aantal">Aantal</th>
                                <th data-field="hoeveelheid">Hoeveelheid</th>
                                <th data-field="Totaal">Totaal</th>
                                <th data-field="verwijder"></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            foreach ($arrWinkelwagenItems as $item) {
                                ?>
                                <tr>
                                    <td><a href="product_detail.php?productId=<?php echo $item->getProduct()->getProductId(); ?>"><?php echo $item->getProduct()->getNaam(); ?></a></td>

                                    <td><?php echo "€ " . number_format($item->getProductHoeveelheid()->getPrijsExclBtw(), 2, '.', ' '); ?></td>
                                    <td><?php echo "€ " . number_format($item->getProductHoeveelheid()->getPrijsInclBtw(), 2, '.', ' '); ?></td>
                                    <td><input id="aantal" type="number" name="aantal" min="1" max="10" value="<?php echo $item->getAantal() ?>">
                                    </td>
                                    <td>
                                        <div class="input-field">
                                            <select class="amount-drink">
                                                <?php
                                                $arrProductHoeveelheid = ProductHoeveelheidDAO::getProductHoeveelheidByProductId($item->getProductId());
                                                foreach ($arrProductHoeveelheid as $value) {
                                                    $hoeveelheidId = $value->getHoeveelheidId();
                                                    $hoeveelheid = HoeveelheidDAO::getHoeveelheidById($hoeveelheidId);
                                                    ?>
                                                    <option <?php
                                                    if ($item->getGekozenHoeveelheidId() == $hoeveelheidId) {
                                                        echo "selected";
                                                    }
                                                    ?> value="<?php echo $hoeveelheidId; ?>"><?php echo $hoeveelheid->getNaam(); ?></option>
                                                    <?php } ?>
                                            </select>

                                        </div>
                                    </td>
                                    <td><?php echo "€ " . number_format($item->getTotaalPrijsInclBtw(), 2, '.', ' '); ?></td>
                                    <td id="deleteItem"><i class="material-icons" >delete</i></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                </div>

                <div class="row">
                    <div class="col s4 offset-s8">
                        <div class="mandjeExclBtw">
                            <div class="col s6">
                                <p>Totaal excl btw</p>
                            </div>
                            <div class="col s6">
                                <p><?php
                                    foreach ($arrWinkelwagenItems as $item) {
                                        $exclBTW += $item->getTotaalPrijsExclBtw();
                                        $btw += $item->getTotaalBtw();
                                        $inclBTW += $item->getTotaalPrijsInclBtw();
                                    }
                                    echo "€ " . number_format($exclBTW, 2, '.', ' ');
                                    ?></p>
                            </div>
                        </div>
                        <div class="mandjeBtw ">
                            <div class="col s6 marginTop">
                                <p>Totaal btw</p>
                            </div>
                            <div class="col s6 marginTop">
                                <p><?php echo "€ " . number_format($btw, 2, '.', ' '); ?></p>
                            </div>
                        </div>
                        <div class="mandjeInclBtw ">
                            <div class="col s6 marginTop">
                                <p>Totaal incl btw</p>
                            </div>
                            <div class="col s6 marginTop">
                                <p><?php echo "€ " . number_format($inclBTW, 2, '.', ' '); ?></p>
                            </div>
                        </div>

                        <a class="waves-effect waves-light btn red darken-4 marginTop col s12"><i class="material-icons left">local_atm</i>Betalen</a>
                    </div>

                </div>
            <?php } ?>
        </main>

        <?php
        require_once './Footer.php';
        ?>
    </body>

</html>