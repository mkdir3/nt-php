<?php
require_once("includes/config.php");
require_once("includes/classes/FormSanitizer.php");
require_once("includes/classes/Constants.php");
require_once("includes/classes/Account.php");

$account = new Account($con);

if (isset($_POST["submitButton"])) {
    $username = FormSanitizer::sanitizeFormUsername($_POST["username"]);
    $password = FormSanitizer::sanitizeFormPassword($_POST["password"]);

    $success = $account->login($username, $password);


    if ($success) {
        // Store session
        $_SESSION["userLoggedIn"] = $username;
        // If registering is ok, redirect
        header("location: index.php");
    }
}

// Remembering the last value emmitted
function getInputValue($name)
{
    if(isset($_POST[$name])) {
        echo $_POST[$name];
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Netflix</title>
    <link rel="stylesheet" href="assets/style/style.css">
</head>

<body>
    <div class="signInContainer">
        <div class="column">

            <div class="header">
                <img src="assets/images/netflix-logo.png" title="Logo" alt="Site logo">
                <h3>Sign in</h3>
                <span>to continue to Netflix</span>
            </div>

            <form action="" method="POST">

                <input type="text" name="username" placeholder="Username" value="<?php getInputValue("username") ?>" required>
                <input type="password" name="password" placeholder="Password" required>
                <?php
                echo $account->getError(Constants::$loginFailed);
                ?>
                <input type="submit" name="submitButton" value="Submit">

            </form>

            <a href="register.php" class="signInMessage">Need an account? Sign up here!</a>

        </div>
    </div>
</body>

</html>