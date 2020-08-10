

        <section class="login">
            <div class="container">
                <form method="POST" action="<?=base_url('UserLogin/authenticate')?>" class="login-form">
                    <h3 class="text-center">Login </h3>
                    <hr>
                    <div class="form-group">
                        <label for="mob"> Mobile no.</label>
                        <input type="text" class="form-control digits" maxlength="10" minlength="10" id="mob" name="mobile_no" placeholder="Registered 10 digit mobile no." required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password</label>
                        <input type="password" class="form-control required" id="pwd" name="pwd" placeholder="Your password" required>
                    </div>
                    <div class="form-group mb--3">
                        <a href="<?=base_url('forgot-password')?>" class="text--primary">Forgot password?</a>
                    </div>
                    <button type="submit" class="btn btn-default">Login</button>
                    <?php if($this->session->flashdata('error')){?>
                    <label class="error d-block"><?=$this->session->flashdata('error')?></label>
                    <?php }?>
                    <hr>
                    <p class="h6 text-center">New to kaarigaronline.com? <a href="<?=base_url('register')?>" class="text--primary">Register now</a></p>
                </form>
            </div>
        </section>

 