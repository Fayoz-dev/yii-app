<h4>Bu Post List sahifasi</h4>
<?php

/**
 * @var $model \frontend\models\Post
 */

 echo "<table class='table table-striped'>";

 foreach ($model as $item) {
     echo "<tr>";
     echo "<td>". $item->id. "</td>";
     echo "<td>". $item->body. "</td>";
     echo "<td>". $item->author->username. "</td>";
     echo "<td>". $item->category->title. "</td>";
     echo "</tr>";
 }

echo "</table>";

 echo \yii\bootstrap5\LinkPager::widget([
         'pagination' => $pagination,
 ]);

