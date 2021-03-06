<?php session_start(); 

    $u = $_SESSION["user"];
    $i = $_SESSION["img"];
    $p = file("Users/$u/profile.txt");
    $b = $p[1];

?>

<!DOCTYPE html>
<html>

<head>
    <title>
        Reset password | Pizza Journal</title>
    <?php require_once "head.php" ?>
    <style>
        #useEditR #editBoxReset #keyInvalid {
            display: <?php echo($_SESSION["keyInvalid"]); ?>;
        }
        
        #useEditR #editBoxReset #pwNoMatch {
            display: <?php echo($_SESSION["pwNoMatch"]); ?>;
        }
        
         #useEditR #editBoxReset #noProfile {
            display: <?php echo($_SESSION["noProfile"]); ?>;
        }

    </style>
</head>

<body>
    <?php require_once "nav.php"; ?>
    <?php require_once "pmodal.php"; ?>
    <!--    Begin page content-->

    <div class="container">
        <div class="row">
            <div id="useEditR" class="col-lg-10 col-lg-push-1">
                <h1>Reset password</h1>
                <div id="editBoxReset" class="form-group">
                    <div id="keyInvalid">
                    You do not have a valid password reset key. Request one by visiting the 'Edit profile' tab. 
                    </div>
                    <div id="pwNoMatch">
                    Your passwords do not match.
                    </div>
                    <div id="noProfile">
                    Your user profile was not found.
                    </div>
                    <form method="post" enctype="multipart/form-data" action="pwchange.php">
                        <label>
                        Email address:
                        </label>
                        <input type="text" name="em">
                        <label>
                        New password:
                        </label>
                        <input type="password" name="pw">
                        <label>
                        Confirm password:
                        </label>
                        <input type="password" name="confirmpw">
                        <input type="hidden" name="q" value="<?php
if (isset($_GET["q"])) {

    echo $_GET["q"];

}

echo '" /><br><input class="btn btn-default" type="submit" name="ResetPasswordForm" value="Reset Password" /></form></div></div></div></div>'; ?>


    <?php require_once "footer.php"; ?>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="inputAni.js"></script>
    <script src="navAni.js"></script>
    <script src="mailerAni.js"></script>
    <script src="modalAni.js"></script>
    <script src="imageChange.js"></script>
</body>

</html>
