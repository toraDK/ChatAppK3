<?php 
     include_once "config.php";
     session_start();

    // Validate and sanitize input
$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$new_password = $_POST['password'];
$current_password = $_POST['current_password'];

// Get the user's ID from the session
$user_id = $_SESSION['unique_id'];

// Retrieve the current password from the database
$sql_select = "SELECT password FROM users WHERE unique_id = $user_id";
$result = mysqli_query($conn, $sql_select);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $stored_password = $row['password'];

    // Verify the current password
    if (!$current_password === $stored_password) {
        // If the current password is correct, update the profile
        $password_hash = md5($new_password); // Hash the new password
        $sql_update = "UPDATE users SET fname = '$firstName', lname = '$lastName', password = '$password_hash' WHERE unique_id = $user_id";

        if (mysqli_query($conn, $sql_update)) {
            echo "Profile updated successfully!";
        } else {
            echo "Error updating profile: " . mysqli_error($conn);
        }
    } else {
      header("location: ../users.php"); 
        echo "Current password is incorrect. Profile not updated.";
    }
} else {
    echo "Error retrieving current password: " . mysqli_error($conn);
}

?>