<?php
    include ('../inc/functions.php');
    $categories = get_all_category();
    $products = get_product(3);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruit Shop</title>
</head>
<body>
    <!-- HEADER SECTION -->
    <header></header>
    <!-- MAIN CONTENT -->
    <section id="main-content">
        <!-- MENU -->
        <div id="side-menu">
            <ul>
                <?php for($i = 0 ; $i < count($categories) ;$i++){?>
                    <li><a href=""> <?= $categories[$i][1] ?></a></li>
                <?php } ?>
            </ul>
        </div>
        <!-- CENTER CONTENTES -->
        <div id="contents">
            <div id="category-showcase">
                <h2>Category</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
            </div>
            <div id="product-showcase">
                <?php for ($i=0; $i < count($products); $i++) { ?>
                    <div class="product">
                    <img src="" alt="">
                    <div>
                        <h3><?=$products[$i][1]?></h3>
                        <p><?=$products[$i][4]?></p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- FOOTER SECTION -->
    <footer></footer>
</body>
</html>