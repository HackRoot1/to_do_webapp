<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <div>
            <input type="text" name="fname">
        </div>
        <div>
            <form action="" method="post">
                <div>
                    <input type="text" name="lname">
                </div>
                <div>
                    <input type="submit" value="Submit2" name="inner_form_submit">
                </div>
            </form>
        </div>
        <div>
            <input type="submit" value="Submit1" name="main-form-submit">
        </div>
    </form>
</body>
</html>

<?php
if (isset($_POST['main-form-submit'])) {
    $fname = $_POST['fname'];
    echo "First Name: " . $fname;
}

if (isset($_POST['inner_form_submit'])) {
    $lname = $_POST['lname'];
    echo "Last Name: " . $lname;
}
?>
