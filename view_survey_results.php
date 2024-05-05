<?php
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

// Total number of surveys
$sql_total_surveys = "SELECT COUNT(*) AS total_surveys FROM completed";
$result_total_surveys = mysqli_query($conn, $sql_total_surveys);
$row_total_surveys = mysqli_fetch_assoc($result_total_surveys);
$total_surveys = $row_total_surveys['total_surveys'];

// Average age
$sql_avg_age = "SELECT AVG(YEAR(CURDATE()) - YEAR(date_of_birth)) AS avg_age FROM completed";
$result_avg_age = mysqli_query($conn, $sql_avg_age);
$row_avg_age = mysqli_fetch_assoc($result_avg_age);
$avg_age = round($row_avg_age['avg_age'], 1);

// Oldest person who participated
$sql_oldest = "SELECT MAX(YEAR(CURDATE()) - YEAR(date_of_birth)) AS oldest FROM completed";
$result_oldest = mysqli_query($conn, $sql_oldest);
$row_oldest = mysqli_fetch_assoc($result_oldest);
$oldest = $row_oldest['oldest'];

// Youngest person who participated
$sql_youngest = "SELECT MIN(YEAR(CURDATE()) - YEAR(date_of_birth)) AS youngest FROM completed";
$result_youngest = mysqli_query($conn, $sql_youngest);
$row_youngest = mysqli_fetch_assoc($result_youngest);
$youngest = $row_youngest['youngest'];

// Percentage of people who like Pizza
$sql_pizza = "SELECT COUNT(*) AS count_pizza FROM completed WHERE favorite_food LIKE '%Pizza%'";
$result_pizza = mysqli_query($conn, $sql_pizza);
$row_pizza = mysqli_fetch_assoc($result_pizza);
$count_pizza = $row_pizza['count_pizza'];
$percentage_pizza = round(($count_pizza / $total_surveys) * 100, 1);

// Percentage of people who like Pasta
$sql_pasta = "SELECT COUNT(*) AS count_pasta FROM completed WHERE favorite_food LIKE '%Pasta%'";
$result_pasta = mysqli_query($conn, $sql_pasta);
$row_pasta = mysqli_fetch_assoc($result_pasta);
$count_pasta = $row_pasta['count_pasta'];
$percentage_pasta = round(($count_pasta / $total_surveys) * 100, 1);

// Percentage of people who like Pap and wors
$sql_pap_wors = "SELECT COUNT(*) AS count_pap_wors FROM completed WHERE favorite_food LIKE '%Pap and Wors%'";
$result_pap_wors = mysqli_query($conn, $sql_pap_wors);
$row_pap_wors = mysqli_fetch_assoc($result_pap_wors);
$count_pap_wors = $row_pap_wors['count_pap_wors'];
$percentage_pap_wors = round(($count_pap_wors / $total_surveys) * 100, 1);

// Average rating for movies
$sql_avg_movies = "SELECT AVG(movies) AS avg_movies FROM completed";
$result_avg_movies = mysqli_query($conn, $sql_avg_movies);
$row_avg_movies = mysqli_fetch_assoc($result_avg_movies);
$avg_movies = round($row_avg_movies['avg_movies'], 1);

// Average rating for radio
$sql_avg_radio = "SELECT AVG(radio) AS avg_radio FROM completed";
$result_avg_radio = mysqli_query($conn, $sql_avg_radio);
$row_avg_radio = mysqli_fetch_assoc($result_avg_radio);
$avg_radio = round($row_avg_radio['avg_radio'], 1);

// Average rating for eat_out
$sql_avg_eat_out = "SELECT AVG(eat_out) AS avg_eat_out FROM completed";
$result_avg_eat_out = mysqli_query($conn, $sql_avg_eat_out);
$row_avg_eat_out = mysqli_fetch_assoc($result_avg_eat_out);
$avg_eat_out = round($row_avg_eat_out['avg_eat_out'], 1);

// Average rating for watch_TV
$sql_avg_watch_TV = "SELECT AVG(watch_TV) AS avg_watch_TV FROM completed";
$result_avg_watch_TV = mysqli_query($conn, $sql_avg_watch_TV);
$row_avg_watch_TV = mysqli_fetch_assoc($result_avg_watch_TV);
$avg_watch_TV = round($row_avg_watch_TV['avg_watch_TV'], 1);

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Survey_Results</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="cssFooter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="newcss.css">
    <style>
        h1 {
            text-align: center;
        }

        /* Add margin to create space between paragraphs */
        p {
            margin-bottom: 10px;
        }

        table {
            width: 60%;
            border-collapse: collapse;
            border: none; /* Remove all borders from tables */
            align: center;
        }

        td,
        th {
            padding: 5px; /* optional: add padding for better readability */
            text-align: left;
            border: none; /* Remove all borders from table cells */
        }

        
        .center {
            margin-left: auto;
            margin-right: auto;
}


    </style>
</head>

<body>

    <ul>
        <li><b><a class="active" href=""> _Surveys</a></b></li>
        <li style="float:right"><a href="view_survey_results.php" style="color: rgb(0, 153, 255)";>VIEW SURVEY RESULTS</a></li>
        <li style="float:right"><a href="form.html">FILL OUT SURVEY</a></li>
    </ul>

    <h1>Survey Results</h1>

    <table class="center">
        <tr>
            <td>Total number of surveys: </td>
            <td><?php echo $total_surveys; ?> </td>
        </tr>

        <tr>
            <td>Average age: </td>
            <td><?php echo $avg_age; ?> </td>
        </tr>

        <tr>
            <td>Oldest person who participated: </td>
            <td><?php echo $oldest; ?> </td>
        </tr>

        <tr>
            <td>Youngest person who participated: </td>
            <td><?php echo $youngest; ?> </td>
        </tr>
    </table>
    <br></br>
    <table class="center">
        <tr>
            <td>Percentage of people who like Pizza: </td>
            <td><?php echo $percentage_pizza; ?>%</td>
        </tr>

        <tr>
            <td>Percentage of people who like Pasta:</td>
            <td><?php echo $percentage_pasta; ?>%</td>
        </tr>

        <tr>
            <td>Percentage of people who like Pap and wors:</td>
            <td><?php echo $percentage_pap_wors; ?>%</td>
        </tr>
    </table>
    <br></br>

    <table class="center">
        <tr>
            <td>People who like to watch movies: </td>
            <td><?php echo $avg_movies; ?> </td>
        </tr>

        <tr>
            <td>People who like to watch radio: </td>
            <td><?php echo $avg_radio; ?></td>
        </tr>

        <tr>
            <td>People who like to watch eat_out: </td>
            <td><?php echo $avg_eat_out; ?> </td>
        </tr>

        <tr>
            <td>People who like to watch watch_TV: </td>
            <td><?php echo $avg_watch_TV; ?></td>
        </tr>
    </table>

</body>

</html>
