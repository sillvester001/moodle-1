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


// Create connection
 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "moodle";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

 if (isset($_POST['firstname'])){
    $fname = $_POST["firstname"];
 }
 if (isset($_POST['lastname'])){
    $lname = $_POST["lastname"];
 }
 if (isset($_POST['email'])){
    $email = $_POST["email"];
 }
 if (isset($_POST['firstname'])){
    $phone = $_POST["phone"];
 }
 if (isset($_POST['firstname'])){
    $job = $_POST["jobtitle"];
 }
 if (isset($_POST['firstname'])){
    $pass = $_POST["password"];
 }

 global $fname, $lname, $email, $phone, $pass, $job;
 
 $sql = "INSERT INTO mdl_local_login_form_users (Id, firstname, lastname, email, phone, job, password) VALUES ('0', '$fname', '$lname', '$email', '$phone', '$job', '$pass')";

 echo $OUTPUT->header();

 echo $OUTPUT->render_from_template('local_login_form/welcome', []);

 echo $OUTPUT->footer();


