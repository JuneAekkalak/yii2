<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Products */

$this->title = $model->product_name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<style>
    .product {
        max-width: 1200px;
        margin: 0 auto;
        padding: 15px;
        display: flex;
    }

    /* Columns */
    .left-column {
        width: 65%;
        position: relative;
    }

    .right-column {
        width: 35%;
        margin-top: 60px;
    }


    /* Left Column */
    .left-column img {
        width: 500px;
        position: absolute;
        left: 70px;
        top: 60px;
        box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
        /* opacity: 0; */
        /* transition: all 0.3s ease; */
    }

    .left-column img.active {
        opacity: 1;
    }


    /* Right Column */

    /* Product Description */
    .product-description {
        border-bottom: 1px solid #E1E8EE;
        margin-bottom: 20px;
    }
    .product-description span {
        font-size: 12px;
        color: #358ED7;
        letter-spacing: 1px;
        text-transform: uppercase;
        text-decoration: none;
    }
    .product-description h1 {
        font-weight: 300;
        font-size: 52px;
        color: #43484D;
        letter-spacing: -2px;
    }
    .product-description p {
        font-size: 16px;
        font-weight: 300;
        color: #86939E;
        line-height: 24px;
    }

    /* Product Configuration */
    .product-color span,
    .cable-config span {
        font-size: 14px;
        font-weight: 400;
        color: #86939E;
        margin-bottom: 20px;
        display: inline-block;
    }

    /* Product Color */
    .product-color {
        margin-bottom: 30px;
    }

    .color-choose div {
        display: inline-block;
    }

    .color-choose input[type="radio"] {
        display: none;
    }

    .color-choose input[type="radio"] + label span {
        display: inline-block;
        width: 40px;
        height: 40px;
        margin: -1px 4px 0 0;
        vertical-align: middle;
        cursor: pointer;
        border-radius: 50%;
    }

    .color-choose input[type="radio"] + label span {
        border: 2px solid #FFFFFF;
        box-shadow: 0 1px 3px 0 rgba(0,0,0,0.33);
    }

    .color-choose input[type="radio"]#red + label span {
        background-color: #C91524;
    }
    .color-choose input[type="radio"]#blue + label span {
        background-color: #314780;
    }
    .color-choose input[type="radio"]#black + label span {
        background-color: #323232;
    }

    .color-choose input[type="radio"]:checked + label span {
        background-image: url(images/check-icn.svg);
        background-repeat: no-repeat;
        background-position: center;
    }

    /* Cable Configuration */
    .cable-choose {
        margin-bottom: 20px;
    }

    .cable-choose button {
        border: 2px solid #E1E8EE;
        border-radius: 6px;
        padding: 13px 20px;
        font-size: 14px;
        color: #5E6977;
        background-color: #fff;
        cursor: pointer;
        transition: all .5s;
    }

    .cable-choose button:hover,
    .cable-choose button:active,
    .cable-choose button:focus {
        border: 2px solid #86939E;
        outline: none;
    }

    .cable-config {
        border-bottom: 1px solid #E1E8EE;
        margin-bottom: 20px;
    }

    .cable-config a {
        color: #358ED7;
        text-decoration: none;
        font-size: 12px;
        position: relative;
        margin: 10px 0;
        display: inline-block;
    }
    .cable-config a:before {
        content: "?";
        height: 15px;
        width: 15px;
        border-radius: 50%;
        border: 2px solid rgba(53, 142, 215, 0.5);
        display: inline-block;
        text-align: center;
        line-height: 16px;
        opacity: 0.5;
        margin-right: 5px;
    }

    /* Product Price */
    .product-price {
        display: flex;
        align-items: center;
    }

    .product-price span {
        font-size: 26px;
        font-weight: 300;
        color: #43474D;
        margin-right: 20px;
    }

    .cart-btn {
        display: inline-block;
        background-color: #7DC855;
        border-radius: 6px;
        font-size: 16px;
        color: #FFFFFF;
        text-decoration: none;
        padding: 12px 30px;
        transition: all .5s;
    }
    .cart-btn:hover {
        background-color: #64af3d;
    }

    /* Responsive */
    @media (max-width: 940px) {
        .container {
            flex-direction: column;
            margin-top: 60px;
        }

        .left-column,
        .right-column {
            width: 100%;
        }

        .left-column img {
            width: 300px;
            right: 0;
            top: -65px;
            left: initial;
        }
    }

    @media (max-width: 535px) {
        .left-column img {
            width: 220px;
            top: -85px;
        }
    }
</style>
<?php $form = ActiveForm::begin(); ?>
<div class="products-view ">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    
    <main class="product">

        <!-- Left Column / Headphones Image -->
        <div class="left-column">
            <!-- <img data-image="black" src="../../theme/product-page/images/black.png" alt="">
            <img data-image="blue" src="../../theme/product-page/images/blue.png" alt=""> -->
            <img data-image="red" class="active" src="<?=$model->image_url ?>" alt="">
        </div>


        <!-- Right Column -->
        <div class="right-column">

            <!-- Product Description -->
            <div class="product-description">
                <span>T-Shirt</span>
                <h1><?= Html::encode($this->title) ?></h1>
                <p>The preferred choice of a vast range of acclaimed DJs. Punchy, bass-focused sound and high isolation. Sturdy
                headband and on-ear cushions suitable for live performance</p>
            </div>

            <!-- Product Configuration -->
            <div class="product-configuration">

                <!-- Product Color -->
                <div class="product-color">
                    <h5>COLOR : </h5>
                        <?php 
                            $colors = [];
                            foreach ($model->colors as $color) {
                                $colors[$color] = $color;
                            }
                            echo $form->field($cartModel, 'color')->radioList($colors)->label(false);
                        ?>
                </div>

                <!-- Cable Configuration -->
                <div class="cable-config">
                    <h5>SIZE : </h5>
                    <div class="cable-choose">
                        <?php 
                            $sizes = [];
                            foreach ($model->sizes as $size) {
                                $sizes[$size] = $size;
                            }
                            echo $form->field($cartModel, 'size')->radioList($sizes)->label(false);
                        ?>
                    </div>
                    <a href="#">How to configurate your headphones</a>
                </div>
            </div>

            <!-- Product Pricing -->
            <div class="product-price">
                <span>$<?=$model->price?></span>
                <?php 
                    echo $form->field($cartModel, 'product_id')->hiddenInput(['value'=>$product_id])->label(false);
                    echo $form->field($cartModel, 'price')->hiddenInput(['value'=>$model->price])->label(false);
                    echo $form->field($cartModel, 'user_id')->hiddenInput(['value'=>Yii::$app->user->identity->id])->label(false);
                    echo $form->field($cartModel, 'quantity')->hiddenInput(['value'=>1])->label(false);
                ?>
                <!-- <a href="#" class="cart-btn">Add to cart</a> -->
                <?= Html::submitButton('Add to cart', ['class' => 'cart-btn']) ?>
            </div>
        </div>
  </main>

</div>
<?php ActiveForm::end(); ?>
