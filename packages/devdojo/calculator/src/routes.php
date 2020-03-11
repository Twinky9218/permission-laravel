

<?php


Route::get('calculator',function(){

	echo 'Hello from the calculator package!';

//Route::get('add/{a}/{b}','Devdojo\Calculator\CalculatorController@add');

//dd('daadada');
//dd('add/{a}/{b}', 'Devdojo\Calculator\CalculatorController@add');	

	//Route::resource('/calculator','Devdojo\Calculator\CalculatorController');


});

Route::get('add/{a}/{b}', 'Devdojo\Calculator\CalculatorController@add');


Route::get('subtract/{a}/{b}','Devdojo\Calculator\CalculatorController@subtract');

?>