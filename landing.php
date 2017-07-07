<!DOCTYPE html>
<html>
    
    <?php require_once "head.php" ?>


<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-push-3" id="loginBox">
                <div id="loginHead">
                    <div id="logoBackerL">
                        <img class="text-center" alt="Pizza Journal" src="Assets/PJlogo1.png">
                    </div>
                    <h3>Keeping track of the only memories that matter</h3>
                </div>
                <div id="login">
                    <h1>Login</h1>
                    <div id="loginBiz">
                        <form id="logForm">
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" type="text" name="un" id="un" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="password" name="pw" id="pw" required>
                            </div>
                            <button type="submit" class="btn btn-default">Sign in</button>
                        </form>
                    </div>
                </div>
                <div id="register">
                    <h1>Register</h1>
                    <div id="regBiz">
                        <form id="regForm">
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="newem" id="newem" required>
                            </div>
                            <div class="form-group">
                                <label>Choose a username</label>
                                <input class="form-control" type="text" name="newun" id="newun" maxlength="17" required>
                            </div>
                            <div class="form-group">
                                <label>Choose a password</label>
                                <input class="form-control" type="password" name="newpw" id="newpw" required>
                            </div>
                            <div class="form-group">
                                <label>Tell us a little bit about yourself</label>
                                <textarea class="form-control" name="bio" id="bio" maxlength="500" required>This short bio will display on your profile page. 500 characters or less, please!</textarea>
                            </div>
                            <div class="form-group">
                                <label>Upload a photo</label>
                                <input class="form-control" type="file" name="upic" id="upic" accept="image/*" required>
                            </div>
                            <button type="submit" class="btn btn-default">Sign me up for Pizza Journal</button>
                        </form>

                    </div>
                </div>
                <div id="landingFoot">
                    <h4>Wait, what's this about?</h4>
                    <div id="footCopy">
                        Pizza Journal lets you keep track of the pizza you eat. You can upload photos of your pizza, describe what it tasted like, and share your pizza adventures with your friends. It's free, easy, and pretty cool.<br><br>Developed by Shane Danaher &copy;2017
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="inputAni.js"></script>
    <script src="navAni.js"></script>
    <script src="mailerAni.js"></script>
    <script src="pscoreAni.js"></script>
    <script src="modalAni.js"></script>
    <script src="loginAni.js"></script>
</body>

</html>