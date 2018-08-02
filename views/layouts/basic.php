<?php

use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title>Document</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
    <div class="container">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <?=Html::a('Главная', '/web')?>
            </li>
            <li class="nav-item">
                <?=Html::a('Статьи', ['post/index'])?>
            </li>
            <li class="nav-item">
                <?=Html::a('Статья', ['post/show'])?>
            </li>
        </ul>
        <?=$content?>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>