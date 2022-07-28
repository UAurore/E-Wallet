<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Sign Up</title>
    </head>
    <body>
        <fieldset style="width:50%;" class="container">
        <table border="1" Bgcolor="blue" width="70%" align="center"><tr><td><h1 align="Center"><u>SIGN UP FORM</u></h1></td></tr></table><br><br>
        <form method="POST" action="signupaction.php">
        NAMES: <input type="text" name="Firstname" placeholder="Your name"><br><br>
        PHONE: <input type="tel" name="num" placeholder="Your Phone Number"><br><br>
        BIRTH DATE: <input type="date"  name="date" placeholder="Your Birthday date"><br><br>
        GENDER: <input type="radio" name="Gender"> Male<input type="radio" name="Gender"> Female<br><br>
        EMAIL: <input type="email" name="Email" placeholder="Enter your Email"><br><br>
        PASSWORD: <input type="password" minlength="8" name="password" placeholder="Your password"><br><br>
                    <tr>
                        <td><button type="submit" Value="SAVE" name="submit">SAVE</button></td>
                        <td><button type="reset" Value="RESET">RESET</button></td>
                    </tr>
            </table>
            </fieldset></form>
    </body>
</html>