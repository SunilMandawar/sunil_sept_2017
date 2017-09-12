<?php

// Program to read a file
/*
$objFile = fopen( 'sunil.txt','w+' );

fwrite( $objFile, 'Sunil Mandawar' );

fclose( $objFile );

$objFile = fopen( 'sunil.txt','r' );

var_dump( fread( $objFile, filesize('sunil.txt') ) );

fclose( $objFile );
*/



// Program to reverse a string

$strString = 'The Great Indian Circus';

var_dump( strrev( $strString ) );

echo '<br>';

// program to reverse a number

$intNum = 123456789;
$intReversedNumber = 0;

while( $intNum <> 0 ) {
	$intReversedNumber = $intReversedNumber * 10 + $intNum % 10;
	$intNum = (int) $intNum/10;
}

var_dump( $intReversedNumber );

// Swap two numbers

$a = 10;
$b = 20;

echo 'a='. $a . ', b=' . $b;
echo '<br>';
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo 'a='. $a . ', b=' . $b;

//even odd

$a = 103;

if( 0 == $a%2 ) echo 'even'; else echo 'odd';


// factorial 
echo '<br>Fact<br>';
echo '<br>';
$intNum = 10;
$intFacto = 1;
for( $i=$intNum; $i>=1; $i-- ) {
	echo 'i = ' . $i . '<br>';
$intFacto = $intFacto * $i;
}
echo $intFacto;


//Table 

$intNum = 3;

for( $i = 0; $i<=10; $i++ ) {
	echo $intNum * $i . '<br>';
}


$strString = 'String';
$intLength = strlen( $strString );
//echo '<br>' . $strString;
//echo '<br>' . $strString[0];


for( $i=$intLength-1; $i>=0; $i-- ) {
	echo $strString[$i];
}

echo '<br>';
// Fibonacci

//0 1 1 2 3 5 8 ..

$a = 0;
$b = 1;

for( $i=0; $i<=10; $i++ ) {
	echo $a . ', ' . $b . ', ' ;
	$a = $a + $b;
	$b = $a + $b;
}

?>