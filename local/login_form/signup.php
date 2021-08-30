<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Change password form definition.
 *
 * @package    login_form
 * @subpackage auth
 * @copyright 
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// define variables and set to empty values

 require_once '../../config.php';
 
 global $USER, $DB, $CFG;

 $PAGE->set_url('/local/login_form/signup.php');
 $PAGE->set_context(context_system::instance());

 //database...
 

//database ends.

//require_login();

 $strpagesignup= get_string('signup', 'local_login_form');
 $strpageconfirmation= get_string('confirmation', 'local_login_form');

 $PAGE->set_title($strpagesignup);
 $PAGE->set_heading( $strpageconfirmation);


 echo $OUTPUT->header();
 echo "Names: ";
 echo $_POST["firstname"];
 echo $_POST["lastname"];
 echo "<br>EMAIL: ";
 echo $_POST["email"];
 echo "<br>PHONE: ";
 echo $_POST["phone"];
 echo "<br>JOB: ";
 echo $_POST["jobtitle"];
 echo "<br>PASSWORD: ";
 echo $_POST["password"];
 echo "<br>";
 echo $OUTPUT->render_from_template('local_login_form/button', []);

 
 echo $OUTPUT->footer();
 


