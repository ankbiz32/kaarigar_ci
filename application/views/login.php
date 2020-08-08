

        <section class="login">
            <div class="container">
                <form method="POST" action="" class="login-form">
                    <h3 class="text-center">Login </h3>
                    <hr>
                    <div class="form-group">
                        <label for="mob"> Mobile no.</label>
                        <input type="text" class="form-control digits" maxlength="10" minlength="10" value="9879879877" id="mob" name="mob" placeholder="Registered 10 digit mobile no." required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password</label>
                        <input type="password" class="form-control required" id="pwd" name="pwd" value="00000000" placeholder="Your password" required>
                    </div>
                    <div class="form-group mb--3">
                        <a href="<?=base_url('forgot-password')?>" class="text--primary">Forgot password?</a>
                    </div>
                    <!-- <a href="profile.html" class="btn btn-default">Login</a> -->
                    <button type="submit" class="btn btn-default">Login</button>
                    <hr>
                    <p class="h6 text-center">New to kaarigaronline.com? <a href="<?=base_url('register')?>" class="text--primary">Register now</a></p>
                </form>
            </div>
        </section>

 