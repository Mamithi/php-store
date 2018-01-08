<?php
/**
 * Created by PhpStorm.
 * User: TosPAY
 * Date: 1/8/2018
 * Time: 5:04 PM
 */

require 'Datafile.php';

echo '<h2>Calling destructors</h2>';

echo '<h3>Before object is created</h3>';

$df = new Datafile('index.html');

$df = NULL;

echo '<h3>Last statement in script</h3>';