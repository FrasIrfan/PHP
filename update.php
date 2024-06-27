<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$successMessage = "";
include("config.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE users SET name='$name', email='$email' WHERE ID='$id'";
    if ($conn->query($sql) === TRUE) {
        $successMessage = "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Form Example</title>
    <!-- Including bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- The container class is a Bootstrap utility that centers your content and applies fixed width at different breakpoints. The mt-5 class adds a top margin to the container, which spaces it down from the top of the viewport by a margin equivalent to 5 times the base spacing unit of Bootstrap (typically 16px, so 80px). -->
    <div class="container mt-5">
        <h2>Update User</h2>
        <!-- Display the success alert if there is a success message -->
        <?php if (!empty($successMessage)) : ?>
            <div class="alert alert-success" role="alert">
                <?php echo $successMessage; ?>
            </div>
        <?php endif;
        ?>
        <form method="post" action="update.php">
            <!-- mb-3 class adds a bottom margin to the element. This helps in spacing out form fields. -->
            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <input type="number" class="form-control" id="id" name="id" required>
            </div>
            <div class="mb-3">
                <!-- form-label styles the <label> element with default bootstrap label styles -->
                <label for="name" class="form-label">Name</label>
                <!-- form-control styles the <input> element with default bootstrap input styles (full width,padding,border and font adjustment)-->
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <!-- btn class styles the button applies base bootstrap button styles -->
            <!-- btn primary styles the button with the primary color of the theme. --> -->
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        </>

        <!-- Bootstrap JS and dependencies -->
        <!-- JavaScript dependencies (jQuery, Popper.js, and Bootstrap's JavaScript) are included to ensure proper functionality of interactive components. -->


        <!-- jQuery (a JavaScript library that simplifies HTML document traversing, event handling, animating, and Ajax interactions) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <!-- Popper.js (a positioning engine required for certain Bootstrap components) -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <!-- Bootstrap's JavaScript (provides interactive functionality for various Bootstrap components) -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>