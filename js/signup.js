$(document).ready(function() {
    $('#patientb').change(function() {
      if(this.checked) {
        $('#dept').prop('disabled', true);
        $('#designation').prop('disabled' , true );
      } else {
      }
    });

    $('#doctor').change(function() {
        if(this.checked) {
          $('#dept').prop('disabled', false);
          $('#designation').prop('disabled' , false );
        } else {
        }
      });
  });
  