<?php

try{
	
  $loader = new \Phalcon\Loader;
  $loader->registerDirs(
    array(
      '../app/controllers/',
      '../app/models/'
    )
  )->register();

  $di = new \Phalcon\DI\FactoryDefault();


} 
catch (\Phalcon\Exception $e) {
	echo 'Phalcon Exception: '.$e->getMessage();
}