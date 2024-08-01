<?php
    include ('../inc/functions.php');
    $categories = get_all_category();
    $id_category = 0;
    if(isset($_GET['id_category'])){
        $id_category = $_GET['id_category'];
    }
    $products = get_product($id_category);
    
?>
<!-- MAIN CONTENT -->
<section id="main-content" class="container">
    <div class="row">

        <div class="d-flex">
            <!-- MENU -->
            <div id="side-menu" class="col-3">
            <ul>
                <?php for($i = 0 ; $i < count($categories) ;$i++){?>
                <li><a href="template.php?id_category=<?=$categories[$i][0]?>"> <?= $categories[$i][1] ?></a></li>
                <?php } ?>
            </ul>
        </div>
        <!-- CENTER CONTENTES -->
        <div id="contents" class="col-9">
            <div class="row">
                <div id="category-showcase">
                    <h2>Category</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
                </div>
                <div id="product-showcase" class="row gy-3">
                    <?php for ($i=0; $i < count($products); $i++) { ?>
                        <div class="col-4">
                            <div class="card" >
                                <a href="template.php?page=product">
                                    <img src="../assets/image/<?=$products[$i][3]?>.jpg" alt="fruit image" class="card-img-top">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title"><?=$products[$i][1]?></h5>
                                    <p class="card-text"><?=$products[$i][4]?></p>
                                    <a href="" class="btn btn-primary">add to cart </a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
</section>