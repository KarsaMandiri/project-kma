// Select Customer
$(document).ready(function(){
  // $('#select-cs').DataTable();
  
  $(document).on('click', '#data-cs', function (e) {
    document.getElementById("pelanggan").value = $(this).attr('pelanggan');
    document.getElementById("alamat").value = $(this).attr('alamat');
    $('#modal-select-cs').modal('hide');
  }); 
});