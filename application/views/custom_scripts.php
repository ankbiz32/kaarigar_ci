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
            cache: false,
            dataType: 'json',
            type: 'POST',
            beforeSend: function(){
                $('#regSubmit').html('Processing <i class="fa fa-spin fa-circle-o-notch"></i>');
            },
            success: function(data){
                $('#regSubmit').hide().html('Next').fadeIn(500);
                if(data){
                    $('.form-block').hide().html(`
                        <div class="form-group mb--0">
                            <h5 class="h5 mb--1">Verify phone no. :</h5>
                            <label>OTP sent to `+data.mobile_no+`</label>
                            <input type="text" class="form-control digits required mt--2" id="otp" name="otp" placeholder="Enter OTP here" required>
                        </div>
                        <div class="mb--2"><a id="resendOTP" class="ml--auto">Resend OTP</a></div>
                        <button type="button" id="otpSubmit" class="btn btn-default">Verify</button>
                        <div class="mt--2">Wrong phone no.? <a href="`+base_url+`register" class="text--primary">Start again</a></div>
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


$(".register").on("click", "#resendOTP", function(){
    $('#reg_form .error-block').remove();
    $.ajax({
        url: base_url+'UserLogin/resend_otp',
        processData: false,
        contentType: false,
        cache: false,
        dataType: 'json',
        type: 'POST',
        beforeSend: function(){
            $('#resendOTP').html('<i class="fa fa-spin fa-circle-o-notch"></i>');
        },
        success: function(data){
            $('#resendOTP').html('Resend OTP');
            Swal.fire('OTP sent','','success');
        },
        error:function(){
            $('#resendOTP').html('Resend OTP');
            Swal.fire('Server error','','warning');
        }
    });
});

$(".register").on("click", "#otpSubmit", function(){
    $('#reg_form .error-block').remove();
    if($('#reg_form').valid()){
        if($('#otp').val()==vno){
            $(`<label class="success d-block mb--1">Correct OTP. Phone no. verified.</label>`).insertBefore( "#otpSubmit" );
            $(`<button type="button" id="next" class="btn btn-default">Next</button>`).insertBefore( "#otpSubmit" );
            $('#otp').attr('disabled','true');
            $('#resendOTP').remove();
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
            <label for="pwd">Create your password *</label>
            <input type="password" class="form-control password required" minlength="6" id="pwd" name="pwd" required>
        </div>
        <div class="form-group">
            <label for="cpwd">Re-type password *</label>
            <input type="password" class="form-control password required" data-rule-equalto="#pwd" data-msg-equalto="Both passwords must be same" id="cpwd" name="cpwd" required>
        </div>
        <button type="button" id="finalSubmit" class="btn btn-default">Finish</button>
    `).fadeIn(500);
});


$(".register").on("click", "#finalSubmit", function(){
    $('#reg_form .error-block').remove();
    if($('#reg_form').valid()){
        var formData = new FormData(document.getElementById("reg_form"));
        $.ajax({
            url: base_url+'UserLogin/regFinish',
            data: formData,
            processData: false,
            contentType: false,
            cache: false,
            dataType: 'json',
            type: 'POST',
            beforeSend: function(){
                $('#finalSubmit').html('Processing&nbsp; <i class="fa fa-spin fa-circle-o-notch"></i>');
            },
            success: function(data){
                $('#finalSubmit').hide().html('Registered').fadeIn(500);
                if(data){
                    if(!data.error){
                        $('#reg_form h3').html(`<i class="fa fa-check-circle text--success"></i>&nbsp; Congratulations!`);
                        $('.form-block').hide().html(`
                            <div class="text-center">
                                <h5 class="mb--2">You are now registered with Kaarigar online.</h5>
                                <h6>Please login to continue.</h6>
                                <a href="`+base_url+`login<?=isset($_GET['return_url'])?'?return_url='.$_GET['return_url']:''?>" class="btn btn-primary">Login now</a>
                            </div>
                        `).fadeIn(500);
                    }
                    else{
                    $(`
                    <p class="text--danger error-block mt--1 bg--color-lightgray text-center">* critical error.</p>
                    `).hide().insertAfter('#finalSubmit').fadeIn(500);
                    }
                }
                else{
                    $(`
                    <p class="text--danger error-block mt--1 bg--color-lightgray text-center">* Invalid data. Please fill correct information.</p>
                    `).hide().insertAfter('#finalSubmit').fadeIn(500);
                }
            },
            error:function(){
                $('#finalSubmit').hide().html('Finish').fadeIn(500);
                $(`
                <p class="text--danger error-block mt--1 bg--color-lightgray text-center">* Server error</p>
                `).insertAfter('#finalSubmit');
            }
        });
    }
});


$('#mobile_no').keyup(function(){
    if($.trim(this.value).length == 10){
        $('.phn_msg').remove();
        $.ajax({ 
            type        : 'POST',
            cache: false,
            data        : {mobile_no : $("#mobile_no").val()},
            url         : base_url+"UserLogin/regPhoneCheck",
            success: function(data) {
                if (data){
                    $("#regSubmit").hide();
                    $(`<label class="error phn_msg">Phone no. already registered</label>`).insertAfter( "#mobile_no" );
                }
                else{
                    $("#regSubmit").show();
                }
            },
            error:function(data) {
                alert('error');
            }
        });
    }
    else{
        $("#regSubmit").show();
    }
});


$("#bookdt").on("click", ".details", function(){
        var id=$(this).data('id');
        $('#booking-modal').modal('show');
        $.ajax({
            url: base_url+'Home/bookDetails',
            type:'post',
            data: {id: id},
            cache:false,
            dataType:'json',
            beforeSend : function(){
                $('#booking-modal .modal-body').html(`<i class="fa fa-spinner fa-spin"></i>&nbsp; Loading...`);
            },
            success: function(data){
                $('#booking-modal .modal-body').html(data);
            },
            error: function() {
            Swal.fire(' ','server error','warning');
            }
        });
    });

</script>