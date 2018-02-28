<?php

use Slim\Http\Request;
use Slim\Http\Response;
use App\Service\StatsService;

// Routes
// Define named route
$app->get('/profile_page', function ($request, $response, $args) {
    return $this->view->render($response, 'profile_page.html', [
        'name' => $args['name']
    ]);
})->setName('profile_page');

// CURS ESO 
//ESO 1
    $app->get('/curs1reso', function ($request, $response, $args) {

    $tot_aprobat = new \stdClass;
    $tot_aprobat->label = 'Tot aprobat';
    $tot_aprobat->backgroundColor = "green";

    $params['filter'] = 'tot-aprobat';
    $params['idESO'] = 1;

    $tot_aprobat->data = $this->StatsService->getESOStats($params);

    $suspeses1o2 = new \stdClass;
    $suspeses1o2->label = '1 o 2 suspeses';
    $suspeses1o2->backgroundColor = "yellow";
    
    
    $params['filter'] = '1o2-suspeses';
    $params['idESO'] = 1;

    $suspeses1o2->data = $this->StatsService->getESOStats($params);

    $suspeses3o4 = new \stdClass;
    $suspeses3o4->label = '3 o 4 suspeses';
    $suspeses3o4->backgroundColor = "orange";

    $params['filter'] = '3o4-suspeses';
    $params['idESO'] = 1;

    $suspeses3o4->data = $this->StatsService->getESOStats($params);

    $suspeses5omes = new \stdClass;
    $suspeses5omes->label = '5 o més suspeses';
    $suspeses5omes->backgroundColor = "red";

    $params['filter'] = '5omes-suspeses';
    $params['idESO'] = 1;

    $suspeses5omes->data = $this->StatsService->getESOStats($params);


    $datasets = array($tot_aprobat, $suspeses1o2, $suspeses3o4, $suspeses5omes);

 print_r("<pre>");
  print_r($datasets);
  print_r($tot_aprobat + $suspeses1o2 + $suspeses3o4 + $suspeses5omes);
   print_r("</pre>");
  die("---"); 

    
    return $this->view->render($response, 'curs1reso.html', [
        'name' => $args['name'],
        'nstudents' => $tot_aprobat + $suspeses1o2 + $suspeses3o4 + $suspeses5omes,
       'datasets' => json_encode($datasets),
       'datasetes' => $datasets
    ]);
    })->setName('curs1reso');

//ESO 2

    $app->get('/curs2neso', function ($request, $response, $args) {

    $tot_aprobat = new \stdClass;
    $tot_aprobat->label = 'Tot aprobat';
    $tot_aprobat->backgroundColor = "green";

    $params['filter'] = 'tot-aprobat';
    $params['idESO'] = 2;

    $tot_aprobat->data = $this->StatsService->getESOStats($params);

    $suspeses1o2 = new \stdClass;
    $suspeses1o2->label = '1 o 2 suspeses';
    $suspeses1o2->backgroundColor = "yellow";
    
    
    $params['filter'] = '1o2-suspeses';
    $params['idESO'] = 2;

    $suspeses1o2->data = $this->StatsService->getESOStats($params);
    

    $suspeses3o4 = new \stdClass;
    $suspeses3o4->label = '3 o 4 suspeses';
    $suspeses3o4->backgroundColor = "orange";

    $params['filter'] = '3o4-suspeses';
    $params['idESO'] = 2;

    $suspeses3o4->data = $this->StatsService->getESOStats($params);



    $suspeses5omes = new \stdClass;
    $suspeses5omes->label = '5 o més suspeses';
    $suspeses5omes->backgroundColor = "red";

    $params['filter'] = '5omes-suspeses';
    $params['idESO'] = 2;

    $suspeses5omes->data = $this->StatsService->getESOStats($params);

   

    $datasets = array($tot_aprobat, $suspeses1o2, $suspeses3o4, $suspeses5omes);

    
    return $this->view->render($response, 'curs2neso.html', [
        'name' => $args['name'],
       'datasets' => json_encode($datasets)
    ]);
    })->setName('curs2neso');

//ESO 3

    $app->get('/curs3reso', function ($request, $response, $args) {
    $tot_aprobat = new \stdClass;
    $tot_aprobat->label = 'Tot aprobat';
    $tot_aprobat->backgroundColor = "green";

    $params['filter'] = 'tot-aprobat';
    $params['idESO'] = 3;

    $tot_aprobat->data = $this->StatsService->getESOStats($params);

    $suspeses1o2 = new \stdClass;
    $suspeses1o2->label = '1 o 2 suspeses';
    $suspeses1o2->backgroundColor = "yellow";
    
    
    $params['filter'] = '1o2-suspeses';
    $params['idESO'] = 3;

    $suspeses1o2->data = $this->StatsService->getESOStats($params);
    

    $suspeses3o4 = new \stdClass;
    $suspeses3o4->label = '3 o 4 suspeses';
    $suspeses3o4->backgroundColor = "orange";

    $params['filter'] = '3o4-suspeses';
    $params['idESO'] = 3;

    $suspeses3o4->data = $this->StatsService->getESOStats($params);



    $suspeses5omes = new \stdClass;
    $suspeses5omes->label = '5 o més suspeses';
    $suspeses5omes->backgroundColor = "red";

    $params['filter'] = '5omes-suspeses';
    $params['idESO'] = 3;

    $suspeses5omes->data = $this->StatsService->getESOStats($params);

   

    $datasets = array($tot_aprobat, $suspeses1o2, $suspeses3o4, $suspeses5omes);

    
    return $this->view->render($response, 'curs3reso.html', [
        'name' => $args['name'],
       'datasets' => json_encode($datasets)
    ]);
    })->setName('curs3reso');

//ESO 4

    $app->get('/curs4teso', function ($request, $response, $args) {
    $tot_aprobat = new \stdClass;
    $tot_aprobat->label = 'Tot aprobat';
    $tot_aprobat->backgroundColor = "green";

    $params['filter'] = 'tot-aprobat';
    $params['idESO'] = 4;

    $tot_aprobat->data = $this->StatsService->getESOStats($params);

    $suspeses1o2 = new \stdClass;
    $suspeses1o2->label = '1 o 2 suspeses';
    $suspeses1o2->backgroundColor = "yellow";
    
    
    $params['filter'] = '1o2-suspeses';
    $params['idESO'] = 4;

    $suspeses1o2->data = $this->StatsService->getESOStats($params);
    

    $suspeses3o4 = new \stdClass;
    $suspeses3o4->label = '3 o 4 suspeses';
    $suspeses3o4->backgroundColor = "orange";

    $params['filter'] = '3o4-suspeses';
    $params['idESO'] = 4;

    $suspeses3o4->data = $this->StatsService->getESOStats($params);



    $suspeses5omes = new \stdClass;
    $suspeses5omes->label = '5 o més suspeses';
    $suspeses5omes->backgroundColor = "red";

    $params['filter'] = '5omes-suspeses';
    $params['idESO'] = 4;

    $suspeses5omes->data = $this->StatsService->getESOStats($params);

   

    $datasets = array($tot_aprobat, $suspeses1o2, $suspeses3o4, $suspeses5omes);

    
    return $this->view->render($response, 'curs4teso.html', [
        'name' => $args['name'],
       'datasets' => json_encode($datasets)
    ]);
    })->setName('curs4teso');




// CURS BATXILLERAT ARTISTIC
$app->get('/curs1rbatArts', function ($request, $response, $args) {
    return $this->view->render($response, 'curs1rbatArts.html', [
        'name' => $args['name']
    ]);
})->setName('curs1rbatArts');


$app->get('/curs2nbatArts', function ($request, $response, $args) {
    return $this->view->render($response, 'curs2nbatArts.html', [
        'name' => $args['name']
    ]);
})->setName('curs2nbatArts');

// CURS BATXILLERAT HUMANISTIC I CIENCIES SOCIALS
$app->get('/curs1rbatHumsis', function ($request, $response, $args) {
    $tot_aprobat = new \stdClass;
    $tot_aprobat->label = 'Tot aprobat';
    $tot_aprobat->backgroundColor = "green";

    $params['filter'] = 'tot-aprobat';
    $params['idBat'] = 1;

    $tot_aprobat->data = $this->StatsService->getBATStats($params);

    $suspeses1o2 = new \stdClass;
    $suspeses1o2->label = '1 o 2 suspeses';
    $suspeses1o2->backgroundColor = "yellow";
    
    $params['filter'] = '1o2-suspeses';
    $params['idBat'] = 1;

    $suspeses1o2->data = $this->StatsService->getBATStats($params);

    $suspeses3o4 = new \stdClass;
    $suspeses3o4->label = '3 o 4 suspeses';
    $suspeses3o4->backgroundColor = "orange";

    $params['filter'] = '3o4-suspeses';
    $params['idBat'] = 1;

    $suspeses3o4->data = $this->StatsService->getBATStats($params);

    $suspeses5omes = new \stdClass;
    $suspeses5omes->label = '5 o més suspeses';
    $suspeses5omes->backgroundColor = "red";

    $params['filter'] = '5omes-suspeses';
    $params['idBat'] = 1;

    $suspeses5omes->data = $this->StatsService->getBATStats($params);

    $datasets = array($tot_aprobat, $suspeses1o2, $suspeses3o4, $suspeses5omes);

    return $this->view->render($response, 'curs1rbatHumsis.html', [
        'name' => $args['name'],
       'datasets' => json_encode($datasets)
    ]);
})->setName('curs1rbatHumsis');


$app->get('/curs2nbatHumsis', function ($request, $response, $args) {
    $tot_aprobat = new \stdClass;
    $tot_aprobat->label = 'Tot aprobat';
    $tot_aprobat->backgroundColor = "green";

    $params['filter'] = 'tot-aprobat';
    $params['idBat'] = 2;

    $tot_aprobat->data = $this->StatsService->getBATStats($params);

    $suspeses1o2 = new \stdClass;
    $suspeses1o2->label = '1 o 2 suspeses';
    $suspeses1o2->backgroundColor = "yellow";
    
    $params['filter'] = '1o2-suspeses';
    $params['idBat'] = 2;

    $suspeses1o2->data = $this->StatsService->getBATStats($params);

    $suspeses3o4 = new \stdClass;
    $suspeses3o4->label = '3 o 4 suspeses';
    $suspeses3o4->backgroundColor = "orange";

    $params['filter'] = '3o4-suspeses';
    $params['idBat'] = 2;

    $suspeses3o4->data = $this->StatsService->getBATStats($params);

    $suspeses5omes = new \stdClass;
    $suspeses5omes->label = '5 o més suspeses';
    $suspeses5omes->backgroundColor = "red";

    $params['filter'] = '5omes-suspeses';
    $params['idBat'] = 2;

    $suspeses5omes->data = $this->StatsService->getBATStats($params);

    $datasets = array($tot_aprobat, $suspeses1o2, $suspeses3o4, $suspeses5omes);

    return $this->view->render($response, 'curs2nbatHumsis.html', [
        'name' => $args['name'],
       'datasets' => json_encode($datasets)
    ]);
})->setName('curs2nbatHumsis');

//CURS BATXILLERAT CIENCIES I TECNOLOGIA
$app->get('/curs1rbatCientec', function ($request, $response, $args){
    $tot_aprobat = new \stdClass;
    $tot_aprobat->label = 'Tot aprobat';
    $tot_aprobat->backgroundColor = "green";

    $params['filter'] = 'tot-aprobat';
    $params['idBat'] = 3;

    $tot_aprobat->data = $this->StatsService->getBATStats($params);

    $suspeses1o2 = new \stdClass;
    $suspeses1o2->label = '1 o 2 suspeses';
    $suspeses1o2->backgroundColor = "yellow";
    
    $params['filter'] = '1o2-suspeses';
    $params['idBat'] = 3;

    $suspeses1o2->data = $this->StatsService->getBATStats($params);

    $suspeses3o4 = new \stdClass;
    $suspeses3o4->label = '3 o 4 suspeses';
    $suspeses3o4->backgroundColor = "orange";

    $params['filter'] = '3o4-suspeses';
    $params['idBat'] = 3;

    $suspeses3o4->data = $this->StatsService->getBATStats($params);

    $suspeses5omes = new \stdClass;
    $suspeses5omes->label = '5 o més suspeses';
    $suspeses5omes->backgroundColor = "red";

    $params['filter'] = '5omes-suspeses';
    $params['idBat'] = 3;

    $suspeses5omes->data = $this->StatsService->getBATStats($params);

    $datasets = array($tot_aprobat, $suspeses1o2, $suspeses3o4, $suspeses5omes);

    return $this->view->render($response, 'curs1rbatCientec.html', [
        'name' => $args['name'],
       'datasets' => json_encode($datasets)
    ]);
})->setName('curs1rbatCientec');

$app->get('/curs2nbatCientec', function($request, $response, $args){
    $tot_aprobat = new \stdClass;
    $tot_aprobat->label = 'Tot aprobat';
    $tot_aprobat->backgroundColor = "green";

    $params['filter'] = 'tot-aprobat';
    $params['idBat'] = 4;

    $tot_aprobat->data = $this->StatsService->getBATStats($params);

    $suspeses1o2 = new \stdClass;
    $suspeses1o2->label = '1 o 2 suspeses';
    $suspeses1o2->backgroundColor = "yellow";
    
    $params['filter'] = '1o2-suspeses';
    $params['idBat'] = 4;

    $suspeses1o2->data = $this->StatsService->getBATStats($params);

    $suspeses3o4 = new \stdClass;
    $suspeses3o4->label = '3 o 4 suspeses';
    $suspeses3o4->backgroundColor = "orange";

    $params['filter'] = '3o4-suspeses';
    $params['idBat'] = 4;

    $suspeses3o4->data = $this->StatsService->getBATStats($params);

    $suspeses5omes = new \stdClass;
    $suspeses5omes->label = '5 o més suspeses';
    $suspeses5omes->backgroundColor = "red";

    $params['filter'] = '5omes-suspeses';
    $params['idBat'] = 4;

    $suspeses5omes->data = $this->StatsService->getBATStats($params);

    $datasets = array($tot_aprobat, $suspeses1o2, $suspeses3o4, $suspeses5omes);

    return $this->view->render($response, 'curs2nbatCientec.html', [
        'name' => $args['name'],
       'datasets' => json_encode($datasets)
    ]);
})->setName('curs2nbatCientec');

//CURS CAS CIENTIFICOTECNOLOGIC
$app->get('/curscasCientec', function($request, $response, $args){
    $tot_aprobat = new \stdClass;
    $tot_aprobat->label = 'Tot aprobat';
    $tot_aprobat->backgroundColor = "green";

    $params['filter'] = 'tot-aprobat';
    $params['idCAS'] = 1;

    $tot_aprobat->data = $this->StatsService->getCASStats($params);

    $suspeses1o2 = new \stdClass;
    $suspeses1o2->label = '1 o 2 suspeses';
    $suspeses1o2->backgroundColor = "yellow";
    
    $params['filter'] = '1o2-suspeses';
    $params['idCAS'] = 1;

    $suspeses1o2->data = $this->StatsService->getCASStats($params);

    $suspeses3o4 = new \stdClass;
    $suspeses3o4->label = '3 o 4 suspeses';
    $suspeses3o4->backgroundColor = "orange";

    $params['filter'] = '3o4-suspeses';
    $params['idCAS'] = 1;

    $suspeses3o4->data = $this->StatsService->getCASStats($params);

    $suspeses5omes = new \stdClass;
    $suspeses5omes->label = '5 o més suspeses';
    $suspeses5omes->backgroundColor = "red";

    $params['filter'] = '5omes-suspeses';
    $params['idCAS'] = 1;

    $suspeses5omes->data = $this->StatsService->getCASStats($params);

    $datasets = array($tot_aprobat, $suspeses1o2, $suspeses3o4, $suspeses5omes);

    return $this->view->render($response, 'curscasCientec.html', [
        'name' => $args['name'],
       'datasets' => json_encode($datasets)
    ]);
})->setName('curscasCientec');

//CURS CAS HUMANISTIC I SOCIAL
$app->get('/curscasHumsis', function($request, $response, $args){
    return $this->view->render($response, 'curscasHumsis.html', [
        'name' => $args['name']
    ]);
})->setName('curscasHumsis');

//CURS ADMINISTRACIÓ I GESTIÓ
    //GESTIÓ ADMINISTRATIVA
    $app->get('/curs1rAGga', function($request, $response, $args){
        $tot_aprobat = new \stdClass;
        $tot_aprobat->label = 'Tot aprobat';
        $tot_aprobat->backgroundColor = "green";
    
        $params['filter'] = 'tot-aprobat';
        $params['idFP'] = 8;
    
        $tot_aprobat->data = $this->StatsService->getFPStats($params);
    
        $suspeses1o2 = new \stdClass;
        $suspeses1o2->label = '1 o 2 suspeses';
        $suspeses1o2->backgroundColor = "yellow";
        
        $params['filter'] = '1o2-suspeses';
        $params['idFP'] = 8;
    
        $suspeses1o2->data = $this->StatsService->getFPStats($params);
    
        $suspeses3o4 = new \stdClass;
        $suspeses3o4->label = '3 o 4 suspeses';
        $suspeses3o4->backgroundColor = "orange";
    
        $params['filter'] = '3o4-suspeses';
        $params['idFP'] = 8;
    
        $suspeses3o4->data = $this->StatsService->getFPStats($params);

        $suspeses5omes = new \stdClass;
        $suspeses5omes->label = '5 o més suspeses';
        $suspeses5omes->backgroundColor = "red";
    
        $params['filter'] = '5omes-suspeses';
        $params['idFP'] = 8;
    
        $suspeses5omes->data = $this->StatsService->getFPStats($params);

        $datasets = array($tot_aprobat, $suspeses1o2, $suspeses3o4, $suspeses5omes);

        return $this->view->render($response, 'curs1rAGga.html', [
            'name' => $args['name'],
           'datasets' => json_encode($datasets)
        ]);
    })->setName('curs1rAGga');

    $app->get('/curs2nAGga', function($request, $response, $args){
        $tot_aprobat = new \stdClass;
        $tot_aprobat->label = 'Tot aprobat';
        $tot_aprobat->backgroundColor = "green";
    
        $params['filter'] = 'tot-aprobat';
        $params['idFP'] = 9;
    
        $tot_aprobat->data = $this->StatsService->getFPStats($params);
    
        $suspeses1o2 = new \stdClass;
        $suspeses1o2->label = '1 o 2 suspeses';
        $suspeses1o2->backgroundColor = "yellow";
        
        $params['filter'] = '1o2-suspeses';
        $params['idFP'] = 9;
    
        $suspeses1o2->data = $this->StatsService->getFPStats($params);
    
        $suspeses3o4 = new \stdClass;
        $suspeses3o4->label = '3 o 4 suspeses';
        $suspeses3o4->backgroundColor = "orange";
    
        $params['filter'] = '3o4-suspeses';
        $params['idFP'] = 9;
    
        $suspeses3o4->data = $this->StatsService->getFPStats($params);

        $suspeses5omes = new \stdClass;
        $suspeses5omes->label = '5 o més suspeses';
        $suspeses5omes->backgroundColor = "red";
    
        $params['filter'] = '5omes-suspeses';
        $params['idFP'] = 9;
    
        $suspeses5omes->data = $this->StatsService->getFPStats($params);

        $datasets = array($tot_aprobat, $suspeses1o2, $suspeses3o4, $suspeses5omes);

        return $this->view->render($response, 'curs2nAGga.html', [
            'name' => $args['name'],
           'datasets' => json_encode($datasets)
        ]);
    })->setName('curs2nAGga');

    //ADMINISTRACIÓ I FINANCES
    $app->get('/curs1rAGaf', function($request, $response, $args){
        $tot_aprobat = new \stdClass;
        $tot_aprobat->label = 'Tot aprobat';
        $tot_aprobat->backgroundColor = "green";
    
        $params['filter'] = 'tot-aprobat';
        $params['idFP'] = 10;
    
        $tot_aprobat->data = $this->StatsService->getFPStats($params);
    
        $suspeses1o2 = new \stdClass;
        $suspeses1o2->label = '1 o 2 suspeses';
        $suspeses1o2->backgroundColor = "yellow";
        
        $params['filter'] = '1o2-suspeses';
        $params['idFP'] = 10;
    
        $suspeses1o2->data = $this->StatsService->getFPStats($params);
    
        $suspeses3o4 = new \stdClass;
        $suspeses3o4->label = '3 o 4 suspeses';
        $suspeses3o4->backgroundColor = "orange";
    
        $params['filter'] = '3o4-suspeses';
        $params['idFP'] = 10;
    
        $suspeses3o4->data = $this->StatsService->getFPStats($params);

        $suspeses5omes = new \stdClass;
        $suspeses5omes->label = '5 o més suspeses';
        $suspeses5omes->backgroundColor = "red";
    
        $params['filter'] = '5omes-suspeses';
        $params['idFP'] = 10;
    
        $suspeses5omes->data = $this->StatsService->getFPStats($params);

        $datasets = array($tot_aprobat, $suspeses1o2, $suspeses3o4, $suspeses5omes);

        return $this->view->render($response, 'curs1rAGaf.html', [
            'name' => $args['name'],
           'datasets' => json_encode($datasets)
        ]);
    })->setName('curs1rAGaf');

    $app->get('/curs2nAGaf', function($request, $response, $args){
        $tot_aprobat = new \stdClass;
        $tot_aprobat->label = 'Tot aprobat';
        $tot_aprobat->backgroundColor = "green";
    
        $params['filter'] = 'tot-aprobat';
        $params['idFP'] = 11;
    
        $tot_aprobat->data = $this->StatsService->getFPStats($params);
    
        $suspeses1o2 = new \stdClass;
        $suspeses1o2->label = '1 o 2 suspeses';
        $suspeses1o2->backgroundColor = "yellow";
        
        $params['filter'] = '1o2-suspeses';
        $params['idFP'] = 11;
    
        $suspeses1o2->data = $this->StatsService->getFPStats($params);
    
        $suspeses3o4 = new \stdClass;
        $suspeses3o4->label = '3 o 4 suspeses';
        $suspeses3o4->backgroundColor = "orange";
    
        $params['filter'] = '3o4-suspeses';
        $params['idFP'] = 11;
    
        $suspeses3o4->data = $this->StatsService->getFPStats($params);

        $suspeses5omes = new \stdClass;
        $suspeses5omes->label = '5 o més suspeses';
        $suspeses5omes->backgroundColor = "red";
    
        $params['filter'] = '5omes-suspeses';
        $params['idFP'] = 11;
    
        $suspeses5omes->data = $this->StatsService->getFPStats($params);

        $datasets = array($tot_aprobat, $suspeses1o2, $suspeses3o4, $suspeses5omes);

        return $this->view->render($response, 'curs2nAGaf.html', [
            'name' => $args['name'],
           'datasets' => json_encode($datasets)
        ]);
    })->setName('curs2nAGaf');

//CURS INFORMÀTICA
    //SISTEMES MICROINFORMÀTICS I XARXES
    $app->get('/curs1rsmix', function($request, $response, $args){

        $tot_aprobat = new \stdClass;
        $tot_aprobat->label = 'Tot aprobat';
        $tot_aprobat->backgroundColor = "green";
    
        $params['filter'] = 'tot-aprobat';
        $params['idFP'] = 1;
    
        $tot_aprobat->data = $this->StatsService->getFPStats($params);
    
        $suspeses1o2 = new \stdClass;
        $suspeses1o2->label = '1 o 2 suspeses';
        $suspeses1o2->backgroundColor = "yellow";
        
        $params['filter'] = '1o2-suspeses';
        $params['idFP'] = 1;
    
        $suspeses1o2->data = $this->StatsService->getFPStats($params);
    
        $suspeses3o4 = new \stdClass;
        $suspeses3o4->label = '3 o 4 suspeses';
        $suspeses3o4->backgroundColor = "orange";
    
        $params['filter'] = '3o4-suspeses';
        $params['idFP'] = 1;
    
        $suspeses3o4->data = $this->StatsService->getFPStats($params);

        $suspeses5omes = new \stdClass;
        $suspeses5omes->label = '5 o més suspeses';
        $suspeses5omes->backgroundColor = "red";
    
        $params['filter'] = '5omes-suspeses';
        $params['idFP'] = 1;
    
        $suspeses5omes->data = $this->StatsService->getFPStats($params);

        $datasets = array($tot_aprobat, $suspeses1o2, $suspeses3o4, $suspeses5omes);

        return $this->view->render($response, 'curs1rsmix.html', [
            'name' => $args['name'],
           'datasets' => json_encode($datasets)
        ]);
    })->setName('curs1rsmix');

    $app->get('/curs2nsmix', function($request, $response, $args){
        $tot_aprobat = new \stdClass;
        $tot_aprobat->label = 'Tot aprobat';
        $tot_aprobat->backgroundColor = "green";
    
        $params['filter'] = 'tot-aprobat';
        $params['idFP'] = 3;
    
        $tot_aprobat->data = $this->StatsService->getFPStats($params);
    
        $suspeses1o2 = new \stdClass;
        $suspeses1o2->label = '1 o 2 suspeses';
        $suspeses1o2->backgroundColor = "yellow";
        
        $params['filter'] = '1o2-suspeses';
        $params['idFP'] = 3;
    
        $suspeses1o2->data = $this->StatsService->getFPStats($params);
    
        $suspeses3o4 = new \stdClass;
        $suspeses3o4->label = '3 o 4 suspeses';
        $suspeses3o4->backgroundColor = "orange";
    
        $params['filter'] = '3o4-suspeses';
        $params['idFP'] = 3;
    
        $suspeses3o4->data = $this->StatsService->getFPStats($params);

        $suspeses5omes = new \stdClass;
        $suspeses5omes->label = '5 o més suspeses';
        $suspeses5omes->backgroundColor = "red";
    
        $params['filter'] = '5omes-suspeses';
        $params['idFP'] = 3;
    
        $suspeses5omes->data = $this->StatsService->getFPStats($params);

        $datasets = array($tot_aprobat, $suspeses1o2, $suspeses3o4, $suspeses5omes);

        return $this->view->render($response, 'curs2nsmix.html', [
            'name' => $args['name'],
           'datasets' => json_encode($datasets)
        ]);
    })->setName('curs2nsmix');

    //ADMINISTRACIÓ DE SISTEMES INFORMÀTICS EN XARXES
    $app->get('/curs1rasix', function($request, $response, $args){
        $tot_aprobat = new \stdClass;
        $tot_aprobat->label = 'Tot aprobat';
        $tot_aprobat->backgroundColor = "green";
    
        $params['filter'] = 'tot-aprobat';
        $params['idFP'] = 4;
    
        $tot_aprobat->data = $this->StatsService->getFPStats($params);
    
        $suspeses1o2 = new \stdClass;
        $suspeses1o2->label = '1 o 2 suspeses';
        $suspeses1o2->backgroundColor = "yellow";
        
        $params['filter'] = '1o2-suspeses';
        $params['idFP'] = 4;
    
        $suspeses1o2->data = $this->StatsService->getFPStats($params);
    
        $suspeses3o4 = new \stdClass;
        $suspeses3o4->label = '3 o 4 suspeses';
        $suspeses3o4->backgroundColor = "orange";
    
        $params['filter'] = '3o4-suspeses';
        $params['idFP'] = 4;
    
        $suspeses3o4->data = $this->StatsService->getFPStats($params);

        $suspeses5omes = new \stdClass;
        $suspeses5omes->label = '5 o més suspeses';
        $suspeses5omes->backgroundColor = "red";
    
        $params['filter'] = '5omes-suspeses';
        $params['idFP'] = 4;
    
        $suspeses5omes->data = $this->StatsService->getFPStats($params);

        $datasets = array($tot_aprobat, $suspeses1o2, $suspeses3o4, $suspeses5omes);

        return $this->view->render($response, 'curs1rasix.html', [
            'name' => $args['name'],
           'datasets' => json_encode($datasets)
        ]);
    })->setName('curs1rasix');

    $app->get('/curs2nasix', function($request, $response, $args){
        $tot_aprobat = new \stdClass;
        $tot_aprobat->label = 'Tot aprobat';
        $tot_aprobat->backgroundColor = "green";
    
        $params['filter'] = 'tot-aprobat';
        $params['idFP'] = 5;
    
        $tot_aprobat->data = $this->StatsService->getFPStats($params);
    
        $suspeses1o2 = new \stdClass;
        $suspeses1o2->label = '1 o 2 suspeses';
        $suspeses1o2->backgroundColor = "yellow";
        
        $params['filter'] = '1o2-suspeses';
        $params['idFP'] = 5;
    
        $suspeses1o2->data = $this->StatsService->getFPStats($params);
    
        $suspeses3o4 = new \stdClass;
        $suspeses3o4->label = '3 o 4 suspeses';
        $suspeses3o4->backgroundColor = "orange";
    
        $params['filter'] = '3o4-suspeses';
        $params['idFP'] = 5;
    
        $suspeses3o4->data = $this->StatsService->getFPStats($params);

        $suspeses5omes = new \stdClass;
        $suspeses5omes->label = '5 o més suspeses';
        $suspeses5omes->backgroundColor = "red";
    
        $params['filter'] = '5omes-suspeses';
        $params['idFP'] = 5;
    
        $suspeses5omes->data = $this->StatsService->getFPStats($params);

        $datasets = array($tot_aprobat, $suspeses1o2, $suspeses3o4, $suspeses5omes);

        return $this->view->render($response, 'curs2nasix.html', [
            'name' => $args['name'],
           'datasets' => json_encode($datasets)
        ]);
    })->setName('curs2nasix');

    //DESENVOLUPAMENT D'APLICACIONS MULTIPLATAFORMA
    $app->get('/curs1rdam', function($request, $response, $args){
        $tot_aprobat = new \stdClass;
        $tot_aprobat->label = 'Tot aprobat';
        $tot_aprobat->backgroundColor = "green";
    
        $params['filter'] = 'tot-aprobat';
        $params['idFP'] = 6;
    
        $tot_aprobat->data = $this->StatsService->getFPStats($params);
    
        $suspeses1o2 = new \stdClass;
        $suspeses1o2->label = '1 o 2 suspeses';
        $suspeses1o2->backgroundColor = "yellow";
        
        $params['filter'] = '1o2-suspeses';
        $params['idFP'] = 6;
    
        $suspeses1o2->data = $this->StatsService->getFPStats($params);
    
        $suspeses3o4 = new \stdClass;
        $suspeses3o4->label = '3 o 4 suspeses';
        $suspeses3o4->backgroundColor = "orange";
    
        $params['filter'] = '3o4-suspeses';
        $params['idFP'] = 6;
    
        $suspeses3o4->data = $this->StatsService->getFPStats($params);

        $suspeses5omes = new \stdClass;
        $suspeses5omes->label = '5 o més suspeses';
        $suspeses5omes->backgroundColor = "red";
    
        $params['filter'] = '5omes-suspeses';
        $params['idFP'] = 6;
    
        $suspeses5omes->data = $this->StatsService->getFPStats($params);

        $datasets = array($tot_aprobat, $suspeses1o2, $suspeses3o4, $suspeses5omes);

        return $this->view->render($response, 'curs1rdam.html', [
            'name' => $args['name'],
           'datasets' => json_encode($datasets)
        ]);
    })->setName('curs1rdam');

    $app->get('/curs2ndam', function($request, $response, $args){
        $tot_aprobat = new \stdClass;
        $tot_aprobat->label = 'Tot aprobat';
        $tot_aprobat->backgroundColor = "green";
    
        $params['filter'] = 'tot-aprobat';
        $params['idFP'] = 7;
    
        $tot_aprobat->data = $this->StatsService->getFPStats($params);
    
        $suspeses1o2 = new \stdClass;
        $suspeses1o2->label = '1 o 2 suspeses';
        $suspeses1o2->backgroundColor = "yellow";
        
        $params['filter'] = '1o2-suspeses';
        $params['idFP'] = 7;
    
        $suspeses1o2->data = $this->StatsService->getFPStats($params);
    
        $suspeses3o4 = new \stdClass;
        $suspeses3o4->label = '3 o 4 suspeses';
        $suspeses3o4->backgroundColor = "orange";
    
        $params['filter'] = '3o4-suspeses';
        $params['idFP'] = 7;
    
        $suspeses3o4->data = $this->StatsService->getFPStats($params);

        $suspeses5omes = new \stdClass;
        $suspeses5omes->label = '5 o més suspeses';
        $suspeses5omes->backgroundColor = "red";
    
        $params['filter'] = '5omes-suspeses';
        $params['idFP'] = 7;
    
        $suspeses5omes->data = $this->StatsService->getFPStats($params);

        $datasets = array($tot_aprobat, $suspeses1o2, $suspeses3o4, $suspeses5omes);

        return $this->view->render($response, 'curs2ndam.html', [
            'name' => $args['name'],
           'datasets' => json_encode($datasets)
        ]);
    })->setName('curs2ndam');







 

//Define named route
$app->get('/teachers', function ($request, $response, $args) {
    return $this->view->render($response, 'teachers.html', [
        'name' => $args['name']
    ]);
})->setName('teachers');

// Define named route
$app->get('/cursos', function ($request, $response, $args) {
    return $this->view->render($response, 'cursos.html', [
        'name' => $args['name']
    ]);
})->setName('cursos');

// Define named route
$app->get('/user_profile', function ($request, $response, $args) {
    return $this->view->render($response, 'user_profile.html', [
        'name' => $args['name']
    ]);
})->setName('user_profile');

// Define named route
$app->get('/home_page', function ($request, $response, $args) {
    return $this->view->render($response, 'home_page.html', [
        'name' => $args['name']
    ]);
})->setName('home_page');

// Define named route
$app->get('/signup', function ($request, $response, $args) {
    return $this->view->render($response, 'signup.html', [
        'name' => $args['name']
    ]);
})->setName('signup');


// Define named route
$app->get('/login-failed', function ($request, $response, $args) {
    return $this->view->render($response, 'login-failed.html', [
        'name' => $args['name']
    ]);
})->setName('login-failed');

// Define named route
$app->get('/login', function ($request, $response, $args) {
    return $this->view->render($response, 'login.html', [
        'name' => $args['name']
    ]);
})->setName('login');


// Define named route
$app->get('/hello/{name}', function ($request, $response, $args) {
    return $this->view->render($response, 'profile.html', [
        'name' => $args['name']
    ]);
})->setName('profile');


// Define named route
$app->get('/home', function ($request, $response, $args) {
    return $this->view->render($response, 'index.html', [
        'name' => $args['name']
    ]);
})->setName('home');

// Define named route
$app->get('/cover', function ($request, $response, $args) {
    return $this->view->render($response, 'cover.html', [
        'name' => $args['name']
    ]);
})->setName('cover');

// Define named route
$app->get('/jumbotron', function ($request, $response, $args) {
    return $this->view->render($response, 'jumbotron.html', [
        'name' => $args['name']
    ]);
})->setName('jumbotron');

// Render from string
$app->get('/hi/{name}', function ($request, $response, $args) {
    $str = $this->view->fetchFromString('<p>Hi, my name is {{ name }}.</p>', [
        'name' => $args['name']
    ]);
    $response->getBody()->write($str);
    return $response;
});

$app->get('/examples', function ($request, $response, $args) {

    $sql = "SELECT * FROM example";
    $condition = "1";

    try {
        //$db = MyPDO::getConnection();
        $stmt = $this->db->prepare($sql);
       // $stmt->bindParam("condition", $condition);
        $stmt->execute();
        $examples = $stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        $response->getBody()->write(json_encode( $examples ));
    } catch(PDOException $e) {
        $error = array("error"=> array("text"=>$e->getMessage()));
        $response->getBody()->write(json_encode( $error ));
    }

});

$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});




