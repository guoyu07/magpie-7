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

  $di->set('view', function(){
    $view = new \Phalcon\Mvc\View();
    $view->setViewsDir('../app/views/');
    $view->registerEngines(array(
      '.phtml' => 'Phalcon\Mvc\View\Engine\Volt'
    ));
    return $view;
  });

  $application = new \Phalcon\Mvc\Application($di);

  echo $application->handle()->getContent();

} 
catch (\Phalcon\Exception $e) {
	echo 'Phalcon Exception: '.$e->getMessage();
}