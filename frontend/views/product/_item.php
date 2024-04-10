<div class="col-md-4">
    <div class="card mb-4 product-wap rounded-0">
        <div class="card rounded-0">
            <img class="card-img rounded-0 img-fluid" src="<?php Yii::getAlias('@webroot')?> /zay/img/shop_03.jpg">
            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                <ul class="list-unstyled">
                    <li><a class="btn btn-success text-white" href="shop-single.html"><i class="far fa-heart"></i></a></li>
                    <li><a class="btn btn-success text-white mt-2" href="<?php echo \yii\helpers\Url::to(['product/view', 'id' => $model->id]) ?>"><i class="far fa-eye"></i></a></li>
                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="fas fa-cart-plus"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="card-body">
            <a href="<?php echo \yii\helpers\Url::to(['product/view', 'id' => $model->id]) ?>" class="h3 text-decoration-none"><?=$model->name?></a>
            <p class="text-center mb-0"><?=$model->price?></p>
        </div>
    </div>
</div>