<?php

namespace frontend\controllers;

use app\models\Cart;
use app\models\Products;
use app\models\ProductsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProductsController implements the CRUD actions for Products model.
 */
class ProductsController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    public function actionView($_id)
    {
        $cartModel = new Cart();
        if ($this->request->isPost && $cartModel->load($this->request->post()) && $cartModel->save()) {
            return $this->redirect(['cart/index']);
        }
        return $this->render('view', [
            'model' => $this->findModel($_id),
            'product_id' => $_id,
            'cartModel' => $cartModel
        ]);
    }

    protected function findModel($_id)
    {
        if (($model = Products::findOne(['_id' => $_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
