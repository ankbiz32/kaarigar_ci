(function(window, undefined) {
    'use strict';
   
      $("#bookdt").on("click", ".approve", function(){
          var id=$(this).data('id');
          var base_url=$(this).data('base_url');
        //   alert('clicked: '+id);
          $('#bookings').modal('show');
          $.ajax({
              url: base_url+'Admin/approveDetails',
              type:'post',
              data: {id: id},
              cache:false,
              dataType:'json',
              beforeSend : function(){
                  $('#bookings .modal-body').html(`<i class="fa fa-spinner fa-spin"></i>&nbsp; Loading...`);
              },
              success: function(data){
                  // console.log(data.res);
                  $('#bookings .modal-body').html(data);
              },
              error: function(xhr, status, error) {
                var err = JSON.parse(xhr.responseText);
                alert(err.Message);
              }
          });
      });
   
      $("#bookdt").on("click", ".reject", function(){
          var id=$(this).data('id');
          var base_url=$(this).data('base_url');
        //   alert('clicked: '+id);
          $('#bookings').modal('show');
          $.ajax({
              url: base_url+'Admin/rejectDetails',
              type:'post',
              data: {id: id},
              cache:false,
              dataType:'json',
              beforeSend : function(){
                  $('#bookings .modal-body').html(`<i class="fa fa-spinner fa-spin"></i>&nbsp; Loading...`);
              },
              success: function(data){
                  $('#bookings .modal-body').html(data);
              },
              error: function() {
                Swal.fire(' ','server error','warning');
              }
          });
      });

      $("#bookdt").on("click", ".details", function(){
          var id=$(this).data('id');
          var base_url=$(this).data('base_url');
        //   alert('clicked: '+id);
          $('#bookings').modal('show');
          $.ajax({
              url: base_url+'Admin/bookDetails',
              type:'post',
              data: {id: id},
              cache:false,
              dataType:'json',
              beforeSend : function(){
                  $('#bookings .modal-body').html(`<i class="fa fa-spinner fa-spin"></i>&nbsp; Loading...`);
              },
              success: function(data){
                  $('#bookings .modal-body').html(data);
              },
              error: function() {
                Swal.fire(' ','server error','warning');
              }
          });
      });
  
  })(window);