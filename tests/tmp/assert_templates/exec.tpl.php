<?php
/* Generated from /home/crodas/projects/playground/haanga/tests/assert_templates/exec.tpl */
function haanga_dd5c8878b71dd3298b301bb14c576dd0b842f320($vars, $return=FALSE, $blocks=array())
{
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo php_uname()."\n";
    if ($return == TRUE) {
        return ob_get_clean();
    }
}