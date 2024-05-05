<?php
session_start(); // Start the session

// Database connection parameters
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "survey";

// Establish a database connection
$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

// Check if the database connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    // Retrieve form data
    $fullnames = $_POST['fullnames'];
    $email = $_POST['email'];
    $date_of_birth = $_POST['date_of_birth'];
    $contact_number = $_POST['contact_number'];

    // Check if "favorite_food" is set, if not, set it to an empty array
    $favorite_food = isset($_POST['favorite_food']) ? implode(", ", $_POST['favorite_food']) : '';

    // Validate if required fields are set and not empty
    if (empty($_POST['movies']) || empty($_POST['radio']) || empty($_POST['eat_out']) || empty($_POST['watch_TV'])) {
        $_SESSION['form_status'] = "error";
        $_SESSION['error_message'] = "Please rate all items.";
        // Redirect back to form.html with error status
        header("Location: form.html?error=true");
        exit;
    } else {
        // Retrieve ratings
        $movies = $_POST['movies'];
        $radio = $_POST['radio'];
        $eat_out = $_POST['eat_out'];
        $watch_TV = $_POST['watch_TV'];

        // Construct SQL query
        $sql_query = "INSERT INTO completed (fullnames, email, date_of_birth, contact_number, favorite_food, movies, radio, eat_out, watch_TV)
                      VALUES ('$fullnames', '$email', '$date_of_birth', '$contact_number', '$favorite_food', '$movies', '$radio', '$eat_out', '$watch_TV')";

        // Execute SQL query
        if (mysqli_query($conn, $sql_query)) {
            $_SESSION['form_status'] = "success";
            // Store success message in session
            $_SESSION['success_message'] = "Thank you for your time!";
            // Redirect back to form.html
            header("Location: form.html");
            exit;
        } else {
            $_SESSION['form_status'] = "error";
            $_SESSION['error_message'] = "Error: " . mysqli_error($conn);
            // Redirect back to form.html with error status
            header("Location: form.html?error=true");
            exit;
        }
    }
}

// Close the database connection
mysqli_close($conn);
?>
