<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Form</title>
    <style>
        /* Your existing CSS styles */
    </style>
</head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<body>

    <h2>Student Information Form</h2>

    <form action="submit_form.php" method="POST">

    <div>
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" required>
    </div>

    <div>
        <label for="middlename">Middle Name:</label>
        <input type="text" id="middlename" name="middlename">
    </div>

    <div>
        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" required>
    </div>
 
    <div>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>
    </div>

    <div>
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>
    </div>

    <div>
        <label for="course">Course & Section:</label>
        <input type="text" id="course_section" name="course_section" required>
    </div>

      

        <input type="submit" value="Submit">
    </form>

</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
