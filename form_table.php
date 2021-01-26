<html>

<head>
    <title>FORM TABLE</title>
</head>

<body>
    <form method="POST" action="form_table.php">
        Name <input type="text" name="name" required><br>
        Email <input type="email" name="email" required><br>
        Contact<input type="number" name="contact" required><br>
        City <input type="text" name="city" required><br>
        Course
        <select name="course" required>
            <option>B.Tech</option>
            <option>BIo-Tech</option>
            <option>B.Sc</option>
        </select> <br>
        Interest:
        <input type="checkbox" name="interest[1]" value="Reading">
        Gaming<input type="checkbox" name="interest[2]" value="Gaming">
        Swimming<input type="checkbox" name="interest[3]" value="Swimming">
        Cooking<input type="checkbox" name="interest[4]" value="Cooking">
        Coding<input type="checkbox" name="interest[5]" value="Coding"> <br>
        <input type="submit" name="submit" value="SUBMIT">
    </form>
 <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $city = $_POST['city'];
        $course = $_POST['course'];
        $interest = $_POST['interest']; 
        if (empty($interest) || sizeof($interest) < 3 || sizeof($interest) > 5) {
            echo "Select at least 3 interests and maximum 5 interests";
        } else {
            echo "<table>";
            echo "<tr>";
            echo "<th colspan='6'>OUTPUT</th>";
            echo "</tr>";

            echo "<tr>";
            echo "<th>Name</th>";
            echo "<th>Email</th>";
            echo "<th>Contact</th>";
            echo "<th>City</th>";
            echo "<th>Course</th>";
            echo "<th>Interest</th>";
            echo "</tr>";

            echo "<tr>";
            echo "<th>$name</th>";
            echo "<th>$email</th>";
            echo "<th>$contact</th>";
            echo "<th>$city</th>";
            echo "<th>$course</th>";
            echo "<th>";
            echo "<ul>";
            foreach ($interest as $int) {
                echo "<li>$int</li>";
            }
            echo "</ul";
            echo "</th>";
            echo "</tr>";
            
            echo "</table>";
            
        }
    }
?>
</body>
</html>
