<?php
require 'vendor/autoload.php';

//Routing




$page = 'home';

if(isset($_GET['p'])){
    $page = $_GET['p'];
}


//Récupère les data
function data(){
    $pdo = new PDO('mysql:dbname=haribo;host=localhost', 'root', '');

    $data = $pdo->query('SELECT * FROM bonbon');
    $r = $data->fetch(PDO::FETCH_ASSOC);
    var_dump($r);
    return $r;
}

//Rendu du template
$loader = new Twig_Loader_Filesystem(__DIR__ . '/template');
$twig = new Twig_Environment($loader, [
    'cache' => false, //__DIR__ . '/tmp'
    'debug' => true,
]);
$twig->addExtension(new Twig_Extension_Debug());


switch ($page){
    case 'contact':
        echo $twig -> render('contact.twig');
        break;
    case 'home':
        echo $twig -> render('home.twig', ['data' => data()]);
        break;
    default:
        header('HTTP/1.0 404 Not Found');
        echo $twig -> render('404.twig');
        break;
}

