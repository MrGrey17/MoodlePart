<?php

// External functions and web services provided by your plugin are described here.

defined('MOODLE_INTERNAL') || die();

// We defined the web service functions to install.
// $functions = array(
//     'moodle_local_plugin_service_function_name_1' => array(
//             'classname'   => 'moodle_local_plugin_external',
//             'methodname'  => 'service_function_name_1',
//             'classpath'   => 'local/moodle_local_plugin/externallib.php',
//             'description' => 'Description about the function',
//             'type'        => 'read', // Type of operations (read, write).
//     ),
//     'moodle_local_plugin_service_function_name_2' => array(
//             'classname'   => 'moodle_local_plugin_external',
//             'methodname'  => 'service_function_name_2',
//             'classpath'   => 'local/moodle_local_plugin/externallib.php',
//             'description' => 'Description about the function',
//             'type'        => 'read', // Type of operations (read, write).
//     ),
// );

// We define the services to install as pre-build services. A pre-build service is not editable by administrator.
$services = array(
         'Users and Courses' => array(
                 'functions' => array ('core_enrol_get_enrolled_users', 'gradereport_user_get_grades_table', 'tool_dataprivacy_get_users'),
                 'restrictedusers' => 0,
                 'enabled'=>1,
         )
 );