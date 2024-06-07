<?php
$json = '{"1:"Значение 1"}';
$array = json_decode($json, true);
 
switch (json_last_error()) {
	case JSON_ERROR_NONE:
		echo 'Ошибок нет';
	break;
	case JSON_ERROR_DEPTH:
		echo 'Достигнута максимальная глубина стека';
	break;
	case JSON_ERROR_STATE_MISMATCH:
		echo 'Некорректные разряды или несоответствие режимов';
	break;
	case JSON_ERROR_CTRL_CHAR:
		echo 'Некорректный управляющий символ';
	break;
	case JSON_ERROR_SYNTAX:
		echo 'Синтаксическая ошибка, некорректный JSON';
	break;
	case JSON_ERROR_UTF8:
		echo 'Некорректные символы UTF-8, возможно неверно закодирован';
	break;
	default:
		echo 'Неизвестная ошибка';
	break;
}
$constants = get_defined_constants(true);

foreach ($constants['json'] as $name => $value) {

	echo $name . ': ' . $value . '<br>';

}
   ?>