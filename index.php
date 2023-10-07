<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>

<h1 align="center">Register Page</h1>

<body bgcolor="#FFBF00">
    <form action="connect.php" method="post">
        <div align="center">
            <label for="student">Find your name:</label>
            <input
                type="text" list="studentlist"
                name="student" id="student"
                pattern="Rosales|Sadicon|Oted|Salido|Rayco" required>
            <datalist id="studentlist">
                <option value="Rosales"></option>
                <option value="Sadicon"></option>
                <option value="Oted"></option>
                <option value="Salido"></option>
                <option value="Rayco"></option>
            </datalist><br><br>

            <input type="submit" name="submit" id="submit">
        </div>
    </form>
    
</body>
</html>