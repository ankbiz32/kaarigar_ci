<script>
var base_url=`<?=base_url()?>`;
var vno='';

$('#regSubmit').click(function(){
    $('#reg_form .error-block').remove();
    var form=$('#reg_form');
    if(form.valid()){
        var formData = new FormData(document.getElementById("reg_form"));
        $.ajax({
            url: base_url+'UserLogin/regStart',
            data: formData,
            processData: false,
            contentType: false,
            dataType: 'json',
            type: 'POST',
            beforeSend: function(){
                $('#regSubmit').html('Processing <i class="fa fa-spin fa-spinner"></i>');
            },
            success: function(data){
                $('#regSubmit').hide().html('Next').fadeIn(500);
                if(data){
                    $('.form-block').hide().html(`
                        <div class="form-group">
                            <label>We have sent you a 4-digit otp. Please verify your phone no. *</label>
                            <input type="number" class="form-control digits required" id="otp" name="otp" placeholder="Enter OTP here" required>
                        </div>
                        <button type="button" id="otpSubmit" class="btn btn-default">Verify</button>
                    `).fadeIn(500);
                    vno=data.vno;
                    console.log(vno);
                }
                else{
                    $(`
                    <p class="text--danger error-block mt--1 bg--color-lightgray text-center">* Invalid data. Please fill correct information.</p>
                    `).hide().insertAfter('#regSubmit').fadeIn(500);
                }
            },
            error:function(){
                $('#regSubmit').hide().html('Register').fadeIn(500);
                $(`
                <p class="text--danger error-block mt--1 bg--color-lightgray text-center">* Server error</p>
                `).insertAfter('#regSubmit');
            }
        });
    }
});


$(".register").on("click", "#otpSubmit", function(){
    $('#reg_form .error-block').remove();
    if($('#reg_form').valid()){
        if($('#otp').val()==vno){
            $(`<label class="success d-block mb--1">Correct OTP. Phone no. verified.</label>`).insertBefore( "#otpSubmit" );
            $(`<button type="button" id="next" class="btn btn-default">Next</button>`).insertBefore( "#otpSubmit" );
            $('#otp').attr('disabled','true');
            $(this).remove();
        }
        else{
            
            $(`<label class="error d-block mb--1">Wrong OTP. Please try again.</label>`).insertBefore( "#otpSubmit" );
        }
    }
});

$(".register").on("click", "#next", function(){
    $('.form-block').hide().html(`
        <div class="form-group">
            <label>Password *</label>
            <input type="password" class="form-control password required" minlength="6" id="pwd" name="pwd" required>
        </div>
        <div class="form-group">
            <label>Re-type password *</label>
            <input type="password" class="form-control password required" data-rule-equalto="#pwd" data-msg-equalto="Both passwords must be same" id="cpwd" name="cpwd" required>
        </div>
        <button type="button" id="finalSubmit" class="btn btn-default">Finish</button>
    `).fadeIn(500);
});

$(".register").on("click", "#finalSubmit", function(){
    if($('#reg_form').valid()){
        alert('submitted');
    }
});


$('#phone').keyup(function(){
    if($.trim(this.value).length == 10){
        $.ajax({ 
            type        : 'POST',
            data        : {mobile_no : $("#phone").val()},
            url         : "Login/regPhoneCheck",
            success: function(data) {
                if (data){
                    $("#checkPh").text('Phone no. already registered');
                    $(".actions ul li a[href='#next']").fadeOut();
                }
                else{
                    $("#checkPh").text('');
                    $(".actions ul li a[href='#next']").fadeIn();
                }
            },
            error:function(data) {
                alert('error');
            }
        });
    }
    else{
        $("#checkPh").text('');
    }
});


</script>