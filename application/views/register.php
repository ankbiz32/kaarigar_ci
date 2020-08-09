
        <section class="register">
            <div class="container">
                <form id="reg_form" class="reg-form" onSubmit="return false">
                    <h3 class="text-center">Register now </h3>
                    <hr>
                    <div class="form-block">
                        <div class="form-group">
                            <label for="mob">Name *</label>
                            <input type="text" class="form-control required" id="name" name="name" placeholder="Your full name" required>
                        </div>
                        <div class="form-group">
                            <label for="mob"> Phone *</label>
                            <input type="text" class="form-control digits required" maxlength="10" minlength="10" id="mobile_no" name="mobile_no" placeholder="10 digit mobile no." required>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Pin code *</label>
                            <input type="text" class="form-control digits required" maxlength="6" minlength="6" id="pin_code" name="pin_code" placeholder="Pin code of your address" required>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Address *</label>
                            <textarea name="address"  class="form-control required" rows="3" style="resize: none;" placeholder="Your full address"></textarea>
                        </div>
                        <button type="button" id="regSubmit" class="btn btn-default">Register</button>
                    </div>
                    <!-- <label for="" class="success">Correct !</label> -->
                    <hr>
                    <p class="h6 text-center">Already registered? <a href="<?=base_url('login')?>" class="text--primary">Login</a></p>
                </form>
            </div>
        </section>