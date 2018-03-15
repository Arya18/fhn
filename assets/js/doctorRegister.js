window.onload =function(){
$.ajax({
    'url':'../data/doctorFormData.json',
    'dataType': 'json',
    'complete': function (data, status) {
      // console.log(data.responseText);
      var formData = $.parseJSON(data.responseText);
      console.log(formData);
      // $("#selectRole").hide(1000);
      // if(userType = "doctor"){
        // $("#doctorContainer").show(1000);
        var doctorContainer = $("#doctor-register-form");
        doctorContainer.append('<div class="row"> <div class="col-lg-12"> <div class="text-center"> Are you not a Doctor? <a href="registration.php" tabindex="5" class="patient-register-link">Click here</a> </div> </div> </div>');
        $.each(formData, function(){
          // patientContainer.append('<div class="form-group">')
          // $('<label />', {'for': 'formData'+this.type, text: this.fieldName }).appendTo(patientContainer);
                $('<input />', { type: this.type, placeholder: this.placeholder, class:'form-control', name: this.fieldName  }).appendTo(doctorContainer);
                doctorContainer.append("<br/>"); 
              });
              doctorContainer.append('<div class="text-center"><a href="index.php"><button type="submit" class="btn btn-primary">Submit</button></div>');
              doctorContainer.append('<div class="row"> <div class="col-lg-12"> <div class="text-center"> <a href="" tabindex="5" class="forgot-password">Forgot Password?</a> </div> </div> </div>');
      // }
    }
  });
}