$("#contactForm").validator().on("submit", function (event) {
	if (event.isDefaultPrevented()) {
		// handle the invalid form...
		formError();
		submitMSG(false, "Apakah Anda telah mengisi formulir dengan benar?");
	} else {
		// everything looks good!
		event.preventDefault();
		$("#submit").removeClass("btn-common");
		$("#submit").html("Sedang mengirim...");
		$("#submit").prop('disabled', true);
		submitForm();
	}
});


function submitForm(){
	$.ajax({
		type: "POST",
		url: "form-process.php",
		data: $("#contactForm").serialize(),
		success : function(text){
			if (text == "success"){
				formSuccess();
			} else {
				formError();
				submitMSG(false,text);
			}
			$("#submit").addClass("btn-common");
			$("#submit").html("Kirim");
			$("#submit").prop('disabled', false);
		}
	});
}

function formSuccess(){
	$("#contactForm")[0].reset();
	$("input:radio[name=kategori]").iCheck('update');
	$("input:radio[name=divisi]").iCheck('update');
	grecaptcha.reset();
	submitMSG(true, "Masukan dari Anda telah terkirim! Terima kasih.");
}

function formError(){
	$("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		$(this).removeClass();
	});
}

function submitMSG(valid, msg){
	if(valid){
		var msgClasses = "h4 text-center tada animated text-success";
	} else {
		var msgClasses = "h4 text-center text-danger";
	}
	$("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}