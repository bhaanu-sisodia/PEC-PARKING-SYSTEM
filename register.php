<?php 
session_start();
include 'header.php'; 

$session_name = $_SESSION['name'] ?? '';
$session_id   = $_SESSION['user_id'] ?? '';

if ($session_name === '' || $session_id === '')
	{
    header("Location: index.php");
    exit;
}
?>


<h2 style="text-align: center; margin-top: 30px;">Register Person</h2>

<form action="insert.php" method="post" style="max-width: 700px; margin: 30px auto; background: #f9f9f9; padding: 25px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
    <div style="display: flex; flex-wrap: wrap; gap: 20px;">

        <div style="flex: 1 1 45%;">
            <label for="name" style="font-weight: bold;">Name</label>
            <input name="name" id="name" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div style="flex: 1 1 45%;">
            <label for="age" style="font-weight: bold;">Age</label>
            <input name="age" id="age" type="number" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div style="flex: 1 1 45%;">
            <label for="gender" style="font-weight: bold;">Gender</label>
            <select name="gender" id="gender" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>

        <div style="flex: 1 1 45%;">
            <label for="height" style="font-weight: bold;">Height (cm)</label>
            <input name="height" id="height" type="number" step="0.1" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div style="flex: 1 1 45%;">
            <label for="weight" style="font-weight: bold;">Weight (kg)</label>
            <input name="weight" id="weight" type="number" step="0.1" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>
    </div>

    <div style="text-align: center; margin-top: 30px;">
        <button type="submit" style="padding: 10px 20px; background-color: #007BFF; color: white; border: none; border-radius: 5px; cursor: pointer;">
            Register
        </button>
    </div>
</form>

<?php include 'footer.php'; ?>
