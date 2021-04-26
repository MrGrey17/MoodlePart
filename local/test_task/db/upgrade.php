<?php

// Upgrade steps (such as database scheme changes and other things that must happen when the plugin is being upgraded) are defined here.
// The in-built XMLDB editor can be used to generate the code to change the database scheme.

defined('MOODLE_INTERNAL') || die();

function xmldb_local_test_task_upgrade($oldversion){
    // Upgrade code goes here.
    global $CFG, $DB;
    return true;
}