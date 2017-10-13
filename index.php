<?php
/**
 * Created by PhpStorm.
 * User: tmotuzis
 * Date: 17.10.13
 * Time: 11.35
 */

use Media\Internet\Site;
use Media\Printings\Books\Book;

header('Content-Type: text/plain');

require_once __DIR__ . '/vendor/autoload.php';

$book = new Book("PHP basics");

$book->call(" | __call");
Book::staticCall(" | __staticCall");



$site = new Site;

$site->firstSite = "www.google.com";
echo $site->firstSite . PHP_EOL . PHP_EOL;

if(isset($site->firstSite)) print "YES" . PHP_EOL;
unset($site->firstSite);
if(!isset($site->firstSite)) print "NO" . PHP_EOL . PHP_EOL;



