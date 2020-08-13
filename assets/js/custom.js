(function(window, undefined) {
    'use strict';
   
      $("#bookdt").on("click", ".bookingDetails", function(){
          var id=$(this).data('id');
        //   alert('clicked: '+id);
          $('#bookings').modal('show');
          $.ajax({
              url: 'Admin/bookingDetails',
              type:'post',
              data: {id: id},
              beforeSend : function(){
                  $('#bookings .modal-body').html(`<i class="fa fa-spinner fa-spin"></i>&nbsp; Loading...`);
              },
              success: function(data){
                  console.log(data);
                //   $('#bookings .modal-body').html(response.text);
              },
              error: function(xhr, status, error) {
                var err = JSON.parse(xhr.responseText);
                alert(err.Message);
              }
          });
    });
  
  })(window);