<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start(); 
require_once 'settings.php';

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: apply.php");
    exit();
}

function sanitise($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

$errors = [];
$job_reference_number = sanitise($_POST["job-reference-number"]);
$first_name = sanitise($_POST["first-name"]);
$last_name = sanitise($_POST["last-name"]);
$street_address = sanitise($_POST["street-address"]);
$suburb_town = sanitise($_POST["suburb-or-town"]);
$state = sanitise($_POST["state"]);
$postcode = sanitise($_POST["postcode"]);
$email_address = sanitise($_POST["email-address"]);
$phone_number = sanitise($_POST["phone-number"]);

$skill1 = $skill2 = $skill3 = "";

if ($job_reference_number == "G01-123") {
    $skill1 = sanitise($_POST["g01-exp"]);
    $skill2 = sanitise($_POST["g01-languages"]);
    $skill3 = sanitise($_POST["g01-problem-solving"]);
} elseif ($job_reference_number == "G02-123") {
    $skill1 = sanitise($_POST["g02-exp"]);
    $skill2 = sanitise($_POST["g02-protocols"]);
    $skill3 = sanitise($_POST["g02-firewalls"]);
} elseif ($job_reference_number == "G03-123") {
    $skill1 = sanitise($_POST["g03-exp"]);
    $skill2 = sanitise($_POST["g03-tools"]);
    $skill3 = sanitise($_POST["g03-analytical"]);
} elseif ($job_reference_number == "G04-123") {
    $skill1 = sanitise($_POST["g04-exp"]);
    $skill2 = sanitise($_POST["g04-security"]);
    $skill3 = sanitise($_POST["g04-threats"]);
} else {
    // Optional: handle invalid job reference number
    $errors[] = "Invalid job reference number.";
}


$other_skills = sanitise($_POST['other-skills']);
$status = "New";

if(!preg_match("/^[a-zA-Z]{1,20}$/", $first_name)) $errors[] = "First name is invalid.";
if(!preg_match("/^[a-zA-Z]{1,20}$/", $last_name)) $errors[] = "Last name is invalid.";

function isValidPostcodeForState($postcode, $state) { // function to validate postcode (ChatGPT)
    $postcode = intval($postcode); // Ensure it's treated as an integer

    $ranges = [
        'ACT' => [[200, 299], [2600, 2618], [2900, 2920]],
        'NSW' => [[1000, 1999], [2000, 2599], [2619, 2899]],
        'VIC' => [[3000, 3999], [8000, 8999]],
        'QLD' => [[4000, 4999], [9000, 9999]],
        'SA'  => [[5000, 5799], [5800, 5999]],
        'WA'  => [[6000, 6797], [6800, 6999]],
        'TAS' => [[7000, 7799], [7800, 7999]],
        'NT'  => [[800, 899], [900, 999]],
    ];

    if (!isset($ranges[$state])) {
        return false; // Invalid state
    }

    foreach ($ranges[$state] as $range) {
        if ($postcode >= $range[0] && $postcode <= $range[1]) {
            return true;
        }
    }

    return false;
}

if (!isValidPostcodeForState($postcode, $state)) {
    $errors[] = "Postcode is not valid for state";
}

if (!filter_var($email_address, FILTER_VALIDATE_EMAIL)) $errors[] = "Invalid email format.";
if (!preg_match("/^[0-9 ]{8,12}$/", $phone_number)) $errors[] = "Invalid phone number.";

if (!empty($errors)) {
    print_r($errors);
    exit();
}

$conn = mysqli_connect($host, $user, $pwd, $sql_db);

if (!$conn) {
    echo "<p>Error connecting to database.</p>";
    exit();
}

$query = "INSERT INTO eoi (
    job_reference_number, first_name, last_name, street_address, suburb_town, `state`, postcode,
    email_address, phone_number, skill1, skill2, skill3, other_skills, `status`
) VALUES (
    '$job_reference_number', '$first_name', '$last_name', '$street_address', '$suburb_town', '$state', '$postcode',
    '$email_address', '$phone_number', '$skill1', '$skill2', '$skill3', '$other_skills', '$status'
)";

$result = mysqli_query($conn, $query);

if ($result) {
    $newEoiNumber = mysqli_insert_id($conn);
    $_SESSION['last_eoi_number'] = $newEoiNumber;
    header("Location: successful_application.php");
    exit();
}