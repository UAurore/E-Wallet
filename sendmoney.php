<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Send Money</title>
</head>
<body>
    <fieldset style="width:50%;" class="container">
    <form action="sendmoneyaction.php" method="post">
        Name: <input type="text" name="name" id=""><br><br>
        Money: <input type="number" name="money" id="" placeholder="Amount want to send"><br><br>
        Mobile Money: <select name="mobilemoney" width=60>
            <option>-Select the mobile money-</option>
            <option>MTN Mobile Money</option>
            <option>Airtel Mobile Money</option>
        </select><br><br>
        Phone: <input type="number" name="mobile" placeholder="Enter phone number"><br><br>
        <button type="submit" name="submit">Send Money</button>
    </form>
    </fieldset>
</body>
</html>