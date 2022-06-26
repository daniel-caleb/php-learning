
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms-PHP</title>
</head>
<body>

<h2 style="font-size: 25px; text-align: center;font-family: 'HP Simplified Jpan'">Forms</h2>
<form action="storage.php" method="post" style="text-align: center;align-content: center">
    <label for="name">Name</label>
    <input type="text" id="name" name="name">
    <br><br>
    <label for="email">Email</label>
    <input type="email" id="email" name="email">
    <br><br>
    <label for="course">Course</label>
    <input type="text" id="course" name="course">
    <br><br>
    <label for="gender">Gender</label>
    <input type="radio" id="gender" name="gender" value="Male">Male
    <input type="radio" id="gender" name="gender" value="Female">Female
    <input type="radio" id="gender" name="gender" value="Others">Others
    <br><br>
    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
</form>

</body>
</html>
