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



require_once '../../config.php';
 
 global $USER, $DB, $CFG;

 $PAGE->set_url('/local/login_form/account.php');
 $PAGE->set_context(context_system::instance());


 if (isset($_POST['firstname'])){
    $fname = $_POST["firstname"];
 }
 if (isset($_POST['lastname'])){
    $lname = $_POST["lastname"];
 }
 if (isset($_POST['email'])){
    $email = $_POST["email"];
 }
 if (isset($_POST['phone'])){
    $phone = $_POST["phone"];
 }
 if (isset($_POST['jobtitle'])){
    $job = $_POST["jobtitle"];
 }
 if (isset($_POST['password'])){
    $pass = $_POST["password"];
 }
 global $fname, $lname, $email, $phone, $job, $pass;
 $record = new stdClass;
 $record->firstname= $fname;
 $record->lastname= $lname;
 $record->email= $email;
 $record->phone= $phone;
 $record->jobtitle= $job;
 $record->password= $pass;


 
// $DB->insert_records($local_login_form_users, $fname, $lname, $email, $phone, $job, $pass);
// user is the table name. Also note the use of insert_record instead of insert_records
// Check the documentation for the difference between the two
// but essentially insert_records is inserting multiple items
$DB->insert_record('user', $record);

 echo $OUTPUT->header();

 echo $OUTPUT->render_from_template('local_login_form/welcome', []);
 
 echo $OUTPUT->footer();
 


