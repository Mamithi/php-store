<?php
/**
 * Created by PhpStorm.
 * User: TosPAY
 * Date: 1/8/2018
 * Time: 4:58 PM
 */

class Datafile
{
    public $filename;

    public function __construct($filename)
    {
        echo '<h4>Inside Datafile constructor</h4>';

        $this->filename = $filename;
    }

    public function __destruct()
    {
        echo '<h4>Inside Datafile destructor</h4>';
    }

}