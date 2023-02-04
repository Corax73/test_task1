<?php
/*Написать метод/функцию, который/которая на вход принимает массив городов. В качестве результата возвращает строку, где города разделены запятыми, а в конце стоит точка. 
Пример:
«Москва, Санкт-Петербург, Воронеж.» */

function printStringFromArr ($arr) {
    $string = '';
    foreach ($arr as $city) {
        $string .= ' ' . $city . ',';
    }
    $string = substr($string, 0, -1);
    print $string . '.';
}
$cityArr = [
    'Москва',
    'Санкт-Петербург',
    'Воронеж'
];
//printStringFromArr($cityArr);

/*Написать метод/функцию, который/которая на вход принимает число (float), а на выходе получает число, округленное до пятерок.
Пример:
27 => 25, 27.8 => 30, 41.7 => 40.*/

function roundFloatToIntmMultiple5 ($float) {
    $x = 5;
    $float = round($float, 0);
    if($float % $x === 0) {
        $outputInt = $float;
    } elseif ($float % $x < 3) {
        $outputInt = round(($float - $x / 2) /$x ) * $x;
    } elseif ($float % $x >= 3) {
        $outputInt = round(($float + $x / 2) /$x ) * $x;
    }
    return $outputInt;
}

$float = 27.8;

//print roundFloatToIntmMultiple5 ($float);

/*Написать метод/функцию, который/которая на вход принимает число (int), 
а на выходе выдает слово “компьютер” в падеже, соответствующем указанному количеству.
Например, «25 компьютеров», «41 компьютер», «1048 компьютеров».*/
/*1 компьютер
2,3, 4 компьютера
5, 6, 7, 8, 9, 0 компьютеров*/

function wordDeclension ($count) {
    if( ($count % 100 >= 11) && ($count % 100 <= 19) ){
        return print $count . ' '. 'компьютеров';
    }else{
        switch( $count % 10 ){
            case 1:
                return print $count . ' '. 'компьютер';
            case 2:case 3:case 4:
                return print $count . ' '. 'компьютера';
            default:
            return print $count . ' '. 'компьютеров';
        }
    }
}

$count = 123213;

//wordDeclension ($count);

/*Написать метод/функцию, который/которая на вход принимает целое число,
а на выходе возвращает то, является ли число простым (не имеет делителей кроме 1 и самого себя).*/

function findPrimeNumber($number) {
    
	for ($i = 2; $i < $number; $i++) {
		if ($number % $i === 0) {
			return print 'Число ' . $number . ' не простое';
		} else {
            return print 'Число ' . $number . ' простое';
        }
	}
}
$number = 110;
//findPrimeNumber($number);

/*Написать метод, который определяет, какие элементы присутствуют в двух экземплярах
в каждом из массивов (= в двух и более, причем в каждом). 
На вход подаются два массива. На выходе массив с необходимыми совпадениями.
Пример:
[7, 17, 1, 9, 1, 17, 56, 56, 23], [56, 17, 17, 1, 23, 34, 23, 1, 8, 1]
На выходе [1, 17]*/
class WorkerWithArrays {
    public function arrDoubleIntersect ( array $arr1, array $arr2) {
        $doubleElement1 = array_count_values($arr1);
        $doubleElement2 = array_count_values($arr2);
        foreach ($doubleElement1 as $key=>$value) {
            if($value >= 2){
                $repeatVal1[] = $key;
            }
        }
        foreach ($doubleElement2 as $key=>$value) {
            if($value >= 2){
                $repeatVal2[] = $key;
            }
        }
        return print_r(array_intersect($repeatVal1, $repeatVal2));
    }
}

$arr1 = [7, 17, 1, 9, 1, 17, 56, 56, 23];
$arr2 = [56, 17, 17, 1, 23, 34, 23, 1, 8, 1];
$Worker = New WorkerWithArrays;
//$Worker->arrDoubleIntersect($arr1, $arr2);

/*Написать метод, который в консоль выводит таблицу умножения.
На вход метод получает число, до которого выводит таблицу умножения.
В консоли должна появиться таблица. Например, если на вход пришло число 5, то получим:
 
Важно: 
●	В последней строке между числами ровно по одному пробелу должно выводиться. 
●	В каждом столбце числа должны быть выровнены по правому краю.*/

class ConsoleTable {
    public function createTable ($inputNumber) {
        $cols = $inputNumber;
        $rows = $inputNumber;
        switch ($inputNumber) {
            case 1:
                $tableHeader = '    1';
                break;
            case 2:
                $tableHeader = '    1   2';
                break;
            case 3:
                $tableHeader = '    1   2   3';
                break;
            case 4:
                $tableHeader = '    1   2   3   4';
                break;
            case 5:
                $tableHeader = '    1   2   3   4   5';
                break;
            case 6:
                $tableHeader = '    1   2   3   4   5   6';
                break;
            case 7:
                $tableHeader = '    1   2   3   4   5   6   7';
                break;
            case 8:
                $tableHeader = '    1   2   3   4   5   6   7   8';
                break;
            case 9:
                $tableHeader = '    1   2   3   4   5   6   7   8   9';
                break;
        }
        
        print $tableHeader;
        for ($tr = 1; $tr <= $rows; $tr++) {
            print "\n";
            print $tr;
            for($td = 1; $td <= $cols; $td++){
                //print $tr;
                printf("%4d", $tr * $td, $cols);
            }
        }
}
}

$inputNumber = rand(1, 9);
$Worker = New ConsoleTable;
//$Worker->createTable($inputNumber);
