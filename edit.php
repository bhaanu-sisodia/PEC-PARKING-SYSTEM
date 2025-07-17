<?php
include 'db.php';
$id = $_GET['id'];
$data = $con->query("SELECT * FROM users WHERE id = $id")->fetch_assoc();
include 'header.php'; // Assumes this contains <!DOCTYPE html>, <head>, <body>, and header
?>

<main >
    <h2 style="text-align:center; font-weight: bold; color: #333;">Edit Person Details</h2>

    <form action="update.php" method="post" style="
        max-width: 700px;
        margin: 30px auto;
        background: #f9f9f9;
        padding: 25px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    ">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">

        <div style="display: flex; flex-wrap: wrap; gap: 20px;">

            <div style="flex: 1 1 45%;">
                <label for="name" style="font-weight: bold;">Name</label>
                <input name="name" id="name" value="<?= htmlspecialchars($data['name']) ?>" required
                       style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
            </div>

            <div style="flex: 1 1 45%;">
                <label for="age" style="font-weight: bold;">Age</label>
                <input name="age" id="age" type="number" value="<?= $data['age'] ?>" required
                       style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
            </div>

            <div style="flex: 1 1 45%;">
                <label for="gender" style="font-weight: bold;">Gender</label>
                <select name="gender" id="gender" required
                        style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
                    <option value="Male" <?= $data['gender'] == 'Male' ? 'selected' : '' ?>>Male</option>
                    <option value="Female" <?= $data['gender'] == 'Female' ? 'selected' : '' ?>>Female</option>
                </select>
            </div>

            <div style="flex: 1 1 45%;">
                <label for="height" style="font-weight: bold;">Height (cm)</label>
                <input name="height" id="height" type="number" step="0.1" value="<?= $data['height_cm'] ?>" required
                       style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
            </div>

            <div style="flex: 1 1 45%;">
                <label for="weight" style="font-weight: bold;">Weight (kg)</label>
                <input name="weight" id="weight" type="number" step="0.1" value="<?= $data['weight_kg'] ?>" required
                       style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
            </div>
        </div>

        <div style="text-align: center; margin-top: 30px;">
            <button type="submit" style="
                padding: 10px 25px;
                background-color: #007BFF;
                color: white;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-weight: bold;
                font-size: 1em;
            ">
                Update
            </button>
        </div>
    </form>
</main>

<?php include 'footer.php'; ?>
