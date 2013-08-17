<?php
/**
 *   Simple example rendering a user list
 *   ------------------------------------
 *   
 *   @credit - adapt from ptemplates sample
 */
 
$time = microtime(TRUE);
$mem = memory_get_usage();

require "../lib/Haanga.php";

$my_haanga = new Haanga();

//Haanga::registerAutoload();
//Haanga::setCacheDir('tmp/');
//Haanga::setTEmplateDir('inheritance/');
$my_haanga->configure(array('cache_dir' => 'tmp/', 'template_dir' => 'inheritance/'));

$time_start = microtime(true);

$my_haanga->Load('page.html', array(
    'title' => microtime(TRUE),
    'users' => array(
        array(
            'username' =>           'peter',
            'tasks' => array('school', 'writing'),
            'user_id' =>            1,
        ),
        array(
            'username' =>           'anton',
            'tasks' => array('go shopping'),
            'user_id' =>            2,
        ),
        array(
            'username' =>           'john doe',
            'tasks' => array('write report', 'call tony', 'meeting with arron'),
            'user_id' =>            3
        ),
        array(
            'username' =>           'foobar',
            'tasks' => array(),
            'user_id' =>            4
        )
    )
));

print_r(array('memory' => (memory_get_usage() - $mem) / (1024 * 1024), 'seconds' => microtime(TRUE) - $time));
