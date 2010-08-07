<?php
/* Load filter dictsort definition */
require_once("/home/crodas/projects/playground/haanga/lib/Haanga/Extension/Filter/Dictsort.php");
/* Generated from /home/crodas/projects/playground/haanga/tests/assert_templates/regroup.tpl */
function haanga_121e38f1eedf7473cab375780aadd8478c8bede2($vars, $return=FALSE, $blocks=array())
{
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo "\n";
    /* Temporary sorting */
    $sorted_users  = Haanga_Extension_Filter_Dictsort::main($users, $regroup_by);
    $temp_group  = Array();
    foreach ($sorted_users as  $item) {
        $temp_group[$item["age"]][]  = $item;
    }
    /* Proper format */
    $sorted_users  = Array();
    foreach ($temp_group as  $group => $item) {
        $sorted_users[]  = Array("grouper" => $group, "list" => $item);
    }
    /* Sorting done */
    echo "\n";
    $t_users  = $users;
    $field  = Array();
    foreach ($t_users as  $key => $item) {
        $field[$key]  = $item[$regroup_by];
    }
    array_multisort($field, SORT_REGULAR, $t_users);
    echo "\n";
    /* Temporary sorting */
    $temp_group  = Array();
    foreach ($t_users as  $item) {
        $temp_group[$item["age"]][]  = $item;
    }
    /* Proper format */
    $sorted_users1  = Array();
    foreach ($temp_group as  $group => $item) {
        $sorted_users1[]  = Array("grouper" => $group, "list" => $item);
    }
    /* Sorting done */
    echo "\n\n";
    if ($sorted_users != $sorted_users1) {
        echo "\n    Error\n";
    }
    echo "\n\n";
    $forcounter1_1  = 1;
    foreach ($sorted_users as  $user) {
        echo "\n    ".htmlentities($user["grouper"])."\n    ";
        $forcounter1_2  = 1;
        $psize_2  = count($user["list"]);
        $islast_2  = $forcounter1_2 == $psize_2;
        $isfirst_2  = TRUE;
        $revcount_2  = $psize_2;
        $revcount0_2  = $psize_2 - 1;
        foreach ($user["list"] as  $u) {
            echo "\n        ".$forcounter1_2."-".$revcount_2."-".$revcount0_2." (".$forcounter1_1."). ".htmlentities(ucfirst($u["name"]))." (";
            if (empty($isfirst_2) === FALSE) {
                echo "first";
            } else {
                if (empty($islast_2) === FALSE) {
                    echo "last";
                }
            }
            echo ")\n    ";
            $forcounter1_2  = $forcounter1_2 + 1;
            $islast_2  = $forcounter1_2 == $psize_2;
            $isfirst_2  = FALSE;
            $revcount_2  = $revcount_2 - 1;
            $revcount0_2  = $revcount0_2 - 1;
        }
        echo "\n";
        $forcounter1_1  = $forcounter1_1 + 1;
    }
    echo "\n";
    if ($return == TRUE) {
        return ob_get_clean();
    }
}