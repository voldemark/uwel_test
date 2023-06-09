<?php

//Задача №1 - объеденить массивы таким образом, чтобы получить один массив с уникальными ключами,
//заполнив пустые значения, а при совпадении ключей с заполненными значениям - получить многомерный массив
//Выполните задачу 2мя способами - через цикл, и с помощью php функций.

/* //Ожидаемый результат

	Array
	(
		[Материал] => Array
			(
				[0] => Кожа
				[1] => Ткань
			)

		[Вид] => Матрас
		[Тип] => Детские
		[Цвет] => Черный
		[Размер] => Array
			(
				[0] => 200*520
				[1] => 200*420
			)

		[Подсветка] => LED
		[Ножка] => Дерево
	)

*/

$result = array();

$array_1 = array(
    'Материал' => 'Кожа',
    'Вид' => 'Матрас',
    'Тип' => 'Детские',
    'Подсветка' => '',
    'Цвет' => 'Черный',
    'Ножка' => '',
    'Размер' => '200*520'
);

$array_2 = array(
    'Материал' => 'Ткань',
    'Вид' => '',
    'Тип' => '',
    'Подсветка' => 'LED',
    'Цвет' => '',
    'Ножка' => 'Дерево',
    'Размер' => '200*420'
);

$array_1 = array_filter($array_1, "check_emty_value");

$array_2 = array_filter($array_2, "check_emty_value");

$result = array_merge_recursive($array_1, $array_2);

echo "<pre>";
var_dump($result);
echo "</pre>";


function check_emty_value($value){
    if($value == ''){
        return false;
    };

    return true;
}

?>
