<?php
$array = array("1" => "PHP code tester Sandbox Online",  
              "foo" => "bar", 5 , 5 => 89009, 
              "case" => "Random Stuff: " . rand(100,999),
              "PHP Version" => phpversion()
              );
              
foreach( $array as $key => $value ){
    echo $key."\t=>\t".$value."\n";
}

$data4 = surprise rebase;

//Adding things by the master to test rebase
$data = squash;
$data2 = squash;
$data3 = squash;

//Master changing things

function set(int $data, int $test){
  $data = 1;
  $test = 2;
}

function test(){
    $data = 1;
    $test = 2;
}

function set(int $data, int $test){
  $data = 1;
  $test = 2;
}

function set2(int $data, int $test){
  $data = 1;
  $test = 2;
}

function squash(int $data, int $test){
  $data = 1;
  $test = 2;
}

function squash2(int $data, int $test){
  $data = 1;
  $test = 2;
}

function squash3(int $data, int $test){
  $data = 1;
  $test = 2;
}

//first commit
//second commit
//third commit
