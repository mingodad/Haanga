<?php
/* Load filter truncatewords definition */
require_once('/home/crodas/projects/playground/haanga/lib/Haanga/Extension/Filter/Truncatewords.php');
$HAANGA_VERSION  = '1.1.1';
/* Generated from /home/crodas/projects/playground/haanga/tests/assert_templates/truncatewords.tpl */
function haanga_33ff616729fa5b4a494db28dee3c3f04cecdd01d($vars, $return=FALSE, $blocks=array())
{
    global $test_global;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo htmlentities(ucwords(strtolower(Haanga_Extension_Filter_Truncatewords::main($short_text, 2)))).'
'.htmlentities(ucwords(strtolower(Haanga_Extension_Filter_Truncatewords::main($text, 2)))).'
';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}