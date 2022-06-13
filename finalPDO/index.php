<?php

// Turn on error reporting
ini_set("display_errors", 1);
error_reporting(E_ALL);



//Require the autoload file
require_once('vendor/autoload.php');
/*require_once('model/data-layer.php');
require_once('model/validation.php');*/

//Start session()
session_start();


//Create an instance of the Base class
$f3 = Base::instance();

//Create an instance of the controller class, this has global scope but php it doesnt know
$con = new Controller($f3);
$datalayer = new DataLayer();


//Create an instance of the Base class
$f3->route('GET /', function () { // you can keep it like this
    //echo '<h1>Hello, world! </h1>';

    $GLOBALS['con']->home();
}
);


//Create a home route 2
$f3->route('GET /home2', function () {

    $GLOBALS['con']->home2();
}
);

////Create a home route 2
//$f3->route('GET /student', function () {
//
//    $view = new Template();
//    echo $view->render('student.php');
//}
//);

$f3->route('GET|POST /student', function () use ($f3) {
    $GLOBALS['con']->student($f3);
});






// Create a route for personal profile
$f3->route('GET|POST /personal', function () use ($f3) {
   $GLOBALS['con']->personal($f3);
}
);

// Create a route for personal profile
$f3->route('GET|POST /profile', function () use ($f3) {
$GLOBALS['con']->profile($f3);
});

// Create a route for interests profile
$f3->route('GET|POST /interests', function () use ($f3) {


$GLOBALS['con']->interests($f3);

});

// Create a route for profile summary

// Create a route for profile summary
$f3->route('GET|POST /summary', function () use ($f3) {

    $GLOBALS['con']->summary($f3);


});

// Create a route for writing to database
$f3->route('GET|POST /sql', function () use ($f3) {

    $GLOBALS['con']->sql($f3);


});

// Create a route for displaying the database
$f3->route('GET|POST /sql2', function () use ($f3) {

    $GLOBALS['con']->sql2($f3);


});


//Define an admin route
$f3->route('GET /admin', function() {

    $GLOBALS['con']->admin();
});

$f3->route('GET|POST /quarantinetest', function () use ($f3) {

    $GLOBALS['con']->quarantineTest($f3);



});

//$f3->route('GET|POST /student', function () use ($f3) {
//
//    $GLOBALS['con']->student($f3);
//
//
//
//});

$f3->route('GET|POST /insert', function () use ($f3) {

    $GLOBALS['con']->insert($f3);



});


//Run fat free
$f3->run();