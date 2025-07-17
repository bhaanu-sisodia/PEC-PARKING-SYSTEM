<?php
include 'db.php';

function get_bmi_category($bmi) {
    if ($bmi < 18.5) return "Underweight";
    elseif ($bmi < 24.9) return "Normal weight";
    elseif ($bmi < 29.9) return "Overweight";
    else return "Obesity";
}

// Get data from POST (single entry)
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$height = $_POST['height'];
$weight = $_POST['weight'];

$bmi = $weight / pow($height / 100, 2);
$category = get_bmi_category($bmi);

// Insert into DB
$stmt = $con->prepare("INSERT INTO users (name, age, gender, height_cm, weight_kg, bmi, bmi_category) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sisddds", $name, $age, $gender, $height, $weight, $bmi, $category);
$stmt->execute();

header("Location: dashboard.php");
exit;
?>
