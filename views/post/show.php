<h1>Show Action</h1>
<button class="btn btn-success" id="btn">CLICK ME</button>
<?php //$this->registerJsFile('@web/js/scripts.js', ['depends' => 'yii\web\YiiAsset']) ?>
<?php //$this->registerJS("$('.container').append('<p>SHOW!!!</p>');", \yii\web\View::POS_LOAD) ?>
<?php //$this->registerCss('.container{background: #ccc;}')?>
<?php

$js = <<<JS
   $('#btn').on('click', function(){
       $.ajax({
       url: 'index.php?r=post/index',
       data: {test: '123'},
       type: 'GET',
       success: function(res) {
           console.log(res);
       },
       error: function(){
           alert('Error!');
       }
       })
   }); 
JS;
$this->registerJs($js);

?>