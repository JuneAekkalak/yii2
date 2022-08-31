<?php

use app\models\Products;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CartSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Carts';
$this->params['breadcrumbs'][] = $this->title;
$total = 0;
?>
<style>
    .cart-page {
        margin: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
    }

    .cart-info {
        display: flex;
        flex-wrap: wrap;
    }

    th {
        text-align: left;
        padding: 10px 15px;
        color: #ffffff;
        background: #ff523b;
        font-weight: normal;
    }
    td {
        padding: 10px 15px;
    }

    td a {
        color: #ff523b;
        font-size: 12px;
    }
    .check-btn {
        padding: 10px 15px;
        color: white;
        background: #ff523b;
        border: none;
        min-width: 100%;
    }
    .shopnow,
    .contact {
        background-color: #000;
        padding: 10px 20px;
        font-size: 30px;
        color: white;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: all 0.5s;
        cursor: pointer;
    }
    .shopnow:hover {
        text-decoration: none;
        color: white;
        background-color: #c41505;
    }
    /* for button animation*/
    .shopnow span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: all 0.5s;
    }
    .shopnow span:after {
        content: url("https://badux.co/smc/codepen/caticon.png");
        position: absolute;
        font-size: 30px;
        opacity: 0;
        top: 2px;
        right: -6px;
        transition: all 0.5s;
    }
    .shopnow:hover span {
        padding-right: 25px;
    }
    .shopnow:hover span:after {
        opacity: 1;
        top: 2px;
        right: -6px;
    }

    td img {
        width: 80px;
        height: 80px;
        margin-right: 10px;
    }

    .total-price {
        margin-top:15px;
        display: flex;
        justify-content: flex-end;
    }

    .total-price table {
        border-top: 3px solid #ff523b;
        width: 100%;
        max-width: 400px;
    }

    td:last-child {
        text-align: right;
    }

    th:last-child {
        text-align: right;
    }

    /* media query for less than 600 screen size */

    @media only screen and (max-width: 600px) {
        .cart-info p {
            display: none;
        }
    }

</style>

<div class="cart-index">
    <div class="small-container cart-page">
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            <?php foreach ($cart as $model) : 
                $total += (int)$model->quantity * (int)$model->price; 
                $product = Products::find()->where(["_id"=> new \MongoDB\BSON\ObjectId($model->product_id)])->one();    
            ?>
                <tr>
                    <td>
                        <div class="cart-info">
                        <img src="<?=$product->image_url ?>" alt="" />
                        <div>
                            <p><?=$product->product_name ?></p>
                            <small>Color : <?=$model->color?></small>
                            <small>Size : <?=$model->size?></small>
                            <br />
                        </div>
                        </div>
                    </td>
                    <td>
                        <span ><?=$model->quantity?></span>
                    </td>
                    <td>$<?=$model->price?></td>
                    <td>
                        <?= Html::a('Delete', ['delete', '_id' => (string) $model->_id], [
                            'class' => 'check-btn',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

        <div class="total-price">
            <table>
                <tr>
                    <td>
                        <h4>Total</h4>
                        <br>
                    </td>
                    <td>
                        <h4>$<?=$total ?></h4>
                        <br>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button class="check-btn shopnow"><span>Checkout</span></button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>

