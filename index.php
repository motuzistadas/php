<?php
/**
 * Created by PhpStorm.
 * User: tmotuzis
 * Date: 17.10.13
 * Time: 11.35
 */

use Media\Internet\Site;
use Media\Printings\Books\Book;
use Media\Printings\Newspapers\Newspaper;
use Media\Printings\Printing;

header('Content-Type: text/plain');

function hr($method){
    echo PHP_EOL . $method . PHP_EOL . "-------------------" . PHP_EOL;
}

require_once __DIR__ . '/vendor/autoload.php';


hr("__construct, __toString, __call, __staticCall, __set, __get");
$book = new Book("PHP basics");
echo "It's all about book " . $book . " | __toString" . PHP_EOL;

$book->call(" | __call");
Book::staticCall(" | __staticCall");

$site = new Site;
$site->firstSite = "www.google.com";
echo $site->firstSite . PHP_EOL;

hr("__isset, __unset");
if(isset($site->firstSite)) print "YES" . PHP_EOL;
unset($site->firstSite);
if(!isset($site->firstSite)) print "NO" . PHP_EOL;

hr("__sleep, __wakeup");
$paper = new Newspaper;
$paper->setTitle("Times");

$data = serialize($paper);
echo "__sleep" . PHP_EOL;
var_dump($data);
echo "__wakeup" . PHP_EOL;
var_dump(unserialize($data));

hr("__invoke");
// script tries to call an object as a function
$printing = new Printing;
$printing("Some printing");
if(is_callable($printing)) echo "Object is callable | __invoke" . PHP_EOL;

hr("__set_state");
// Printings exported by var_export()
$ab = new Printing;
$ab->country = 'Lithuania';
$ab->edition = 500;
eval('$b = ' . var_export($ab, true) . ';');
var_dump($b);

hr("__clone");
// Cloning an object
$contries = new Printing();
$contries->countries('Lithuania');
$contries->countries('Poland');
$countriesClone = clone $contries;
$contries->countries('Germany');

print_r($contries->getCountries());
print_r($countriesClone->getCountries());

hr("__debugInfo");
// get the debugInfo shown by var_dump
var_dump($book);

hr("__destruct");