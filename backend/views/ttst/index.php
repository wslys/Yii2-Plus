<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2018/11/28
 * Time: 20:00
 */
use kartik\select2\Select2;
$this->title = 'Ttst';
?>

<h1>Ttst</h1>
<?php
$data = [2 => 'widget', 3 => 'dropDownList', 4 => 'yii2'];
echo Select2::widget([ 'name' => 'title',
    'data' => $data,
    'options' => ['placeholder' => '请选择...']
]);

?>
