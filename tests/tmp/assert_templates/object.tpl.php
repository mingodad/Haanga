<?php
$HAANGA_VERSION  = '1.1.1';
/* Generated from /home/crodas/projects/playground/haanga/tests/assert_templates/object.tpl */
function haanga_c1df77e2249dc4876d6380db8edd1ed30a7f89cd($vars, $return=FALSE, $blocks=array())
{
    global $test_global;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo htmlentities($obj->name).'
'.htmlentities($obj->obj['name']).'
'.htmlentities($arr['obj']->name).'
'.htmlentities($arr['obj']->obj['name']).'
';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}