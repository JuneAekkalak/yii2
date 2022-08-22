<?php
use app\models\Products;

/** @var yii\web\View $this */

$products = Products::find()->all();
//var_dump($products);

$this->title = 'My Yii Application';
?>
<div class="site-index mx-auto mt-7 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="carousel slide" id="carouselBestDeals" data-bs-touch="false" data-bs-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <div class="row h-100 align-items-center g-2">
                            <?php 
                                foreach ($products as $index => $obj) { ?>
                                   <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white">
                                            <img class="img-fluid h-100" src="<?=$obj->image_url ?>" alt="..." />
                                            <div class="card-img-overlay ps-0"> </div>
                                            <div class="card-body ps-0 bg-200">
                                                <h5 class="fw-bold text-1000 text-truncate"><?=$obj->product_name ?></h5>
                                                <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$<?=$obj->price ?></span><span class="text-primary">$<?=$obj->price-3000 ?></span></div>
                                            </div>
                                            <a class="stretched-link" href="#"></a>
                                        </div>
                                    </div>
                            <?php }
                            ?>
                        </div>
                        <!-- <div class="row">
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselBestDeals" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselBestDeals" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>