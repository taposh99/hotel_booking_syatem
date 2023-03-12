function selectPermission(param){ 
    $('input[id='+param+']').prop('checked', $('.'+param+'').prop('checked'));
}
$(document).ready(function () {
    $("#selectAll").click(function(){
    var clicks = $(this).data('clicks');
    $("input[type=checkbox]").prop('checked', $(this).prop('checked'));
    if (clicks) {
        $('#replace').html('Select All');
    } else {
        $('#replace').html('Reset All');
    }
        $(this).data("clicks", !clicks);
    });
});
$(document).ready(function () {
  const forms = document.querySelectorAll('.needs-validation');
  Array.prototype.slice.call(forms).forEach((form) => {
    form.addEventListener('submit', (event) => {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  });
});
$("body").on("click",".show_confirm",function(event){
  var form =  $(this).closest("form");
  event.preventDefault();
  swal({
      title: `Do you want to delete it?`,
      text: "If you delete this, it will be gone forever.",
      icon: "warning",
      buttons: true,
      dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      form.submit();
    }
  });
});
$('body').on('click', '.ajax-modal-btn', function(e) {
  e.preventDefault();
  var url = $(this).data('link');
  $.get(url, function(data) {
    $('.edit-modal').html(data)
    $('#myDynamicEditModal').modal('show');
  })
});

document.addEventListener("DOMContentLoaded", function() {
  var el = document.getElementById('button-image');
  if(el){
    el.addEventListener('click', (event) => {
        event.preventDefault();
        window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
    });
  }
});

function fmSetLink($url) {
  document.getElementById('image_label').value = $url;
}