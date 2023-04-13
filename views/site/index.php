<?php

/** @var yii\web\View $this */
/** @var app\models\Trip[] $trips */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <?php foreach ($trips as $trip) {?>
                    <div><?= $trip->id ?></div>
                <?php }?>
            </div>
        </div>

    </div>
</div>
