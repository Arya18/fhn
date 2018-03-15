// $( document ).ready(function() {
// 	$("#doctorContainer").hide();
// });
// $("#userType").change(function(){
// 	var userType = $(this).val();
// 	var dataUrl = '';
// 	if (userType == "doctor") {
// 		dataUrl = "../data/doctorFormData.json";
// 	}else{
// 		dataUrl = "../data/pateintFormData.json";
// 	}
// 	$.ajax({
// 		'url':dataUrl,
// 		'dataType': 'json',
// 		'complete': function (data, status) {
// 			// console.log(data.responseText);
// 			var formData = $.parseJSON(data.responseText);
// 			console.log(formData);
// 			$("#selectRole").hide(1000);
// 			// if(userType = "doctor"){
// 				$("#doctorContainer").show(1000);
// 				var doctorContainer = $("#doctorForm");
// 				doctorContainer.append('<h3 class="text-center">Registration Form</h3>');
// 				$.each(formData, function(){
// 					// doctorContainer.append('<div class="form-group">')
// 					$('<label />', {'for': 'formData'+this.type, text: this.fieldName }).appendTo(doctorContainer);
//             		$('<input />', { type: this.type, placeholder: this.placeholder, class:'form-control', name: this.fieldName  }).appendTo(doctorContainer);
//             		doctorContainer.append("<br/>"); 
//             	});
//             	doctorContainer.append('<div class="text-center"><a href="index.php"><button type="button" class="btn btn-default backButton">Back</button></a> <button type="submit" class="btn btn-primary">Submit</button></div>');
//             	doctorContainer.append('<br/><a href="signin.php"><div class="text-center support-text">Sign In</div></a>');
// 			// }
// 		}
// 	});
// });

// $(".backButton").on("click",function(){
// 	alert("sfa")
// 	$("#selectRole").show(1000);
// 	$("#doctorContainer").hide();
// });

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}

$(".logo").click(function(){
	window.location = "index.php";
});
