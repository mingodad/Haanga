<?php
$time = microtime(TRUE);
$mem = memory_get_usage();

require "../lib/Haanga.php";

$my_haanga = new Haanga();

$fnc = $my_haanga->compile(<<<EOT
    <h1>{{foobar}}{{    foobar  }}</h1>

    Este template será compilado a una función PHP ({{foo|default:foobar}})


EOT
);

$fnc(array("foobar" => 'hola', 'foo' => '.I.'), FALSE /* print it */);
$fnc(array("foobar" => 'chau'), FALSE /* print it */);

print_r(array('memory' => (memory_get_usage() - $mem) / (1024 * 1024), 'seconds' => microtime(TRUE) - $time));
