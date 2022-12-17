$(function() {

	var formElements = function(){
		// Bootstrap datepicker
		var feDatepicker = function(){
			//daysOfWeekDisabled: "0",
			if($(".datepicker").length > 0){
				$(".datepicker").datepicker({
					format: 'dd-mm-yyyy',
					todayBtn: "linked",
					daysOfWeekHighlighted: "0",
					autoclose: true,
					todayHighlight: true,
					weekStart: 1
				});
			}			
		}// END Bootstrap datepicker
		
		//Bootstrap timepicker
		var feTimepicker = function(){
			// Default timepicker
			if($(".timepicker").length > 0)
				$('.timepicker').timepicker();
			
			// 24 hours mode timepicker
			if($(".timepicker24").length > 0)
				$(".timepicker24").timepicker({minuteStep: 5,showSeconds: false,showMeridian: false});			
		}// END Bootstrap timepicker
		
		//Daterangepicker 
		var feDaterangepicker = function(){
			if($(".daterange").length > 0)
			   $(".daterange").daterangepicker({format: 'YYYY-MM-DD',startDate: '2013-01-01',endDate: '2013-12-31'});
		}
		// END Daterangepicker
		
		//Bootstrap select
		var feSelect = function(){
			if($(".select").length > 0){
				$(".select").selectpicker();
				
				$(".select").on("change", function(){
					if($(this).val() == "" || null === $(this).val()){
						if(!$(this).attr("multiple"))
							$(this).val("").find("option").removeAttr("selected").prop("selected",false);
					}else{
						$(this).find("option[value="+$(this).val()+"]").attr("selected",true);
					}
				});
			}
		}//END Bootstrap select		
		
		//Validation Engine
		var feValidation = function(){
			if($("form[id^='validate']").length > 0){
				
				// Validation prefix for custom form elements
				var prefix = "valPref_";
				
				//Add prefix to Bootstrap select plugin
				$("form[id^='validate'] .select").each(function(){
				   $(this).next("div.bootstrap-select").attr("id", prefix + $(this).attr("id")).removeClass("validate[required]");
				});
				
				// Validation Engine init
				$("form[id^='validate']").validationEngine('attach', {promptPosition : "bottomLeft", scroll: false,
																		onValidationComplete: function(form, status){
																			form.validationEngine("updatePromptsPosition");
																		},
																		prettySelect : true,
																		usePrefix: prefix 
																	 });              
			}
		}//END Validation Engine
		
		//Masked Inputs
		var feMasked = function(){
			if($("input[class^='mask_']").length > 0){
				$("input.mask_tin").mask('99-9999999');
				$("input.mask_ssn").mask('999-99-9999');
				$("input.mask_date").mask('9999-99-99');
				$("input.mask_product").mask('a*-999-a999');
				$("input.mask_phone").mask('99 (999) 999-99-99');
				$("input.mask_phone_ext").mask('99 (999) 999-9999? x99999');
				$("input.mask_credit").mask('9999-9999-9999-9999');
				$("input.mask_percent").mask('99%');
			}
		}//END Masked Inputs
		
		//Bootstrap tooltip
		var feTooltips = function(){
			$("body").tooltip({selector:'[data-toggle="tooltip"]',container:"body"});
		}//END Bootstrap tooltip
		
		//iCheckbox and iRadion - custom elements
		var feiCheckbox = function(){
			if($(".icheckbox").length > 0){
				 $(".icheckbox").iCheck({checkboxClass: 'icheckbox_minimal-blue'});
			}
			if($(".iradio").length > 0){
				 $(".iradio").iCheck({radioClass: 'iradio_minimal-blue'});
			}
			$("input[type='checkbox'], input[type='radio']").on('ifChanged', function (e) {
				 $(this).trigger("onclick", e);
			});
		}
		// END iCheckbox
		
		return {// Init all form element features
		init: function(){
					//feDatepicker();
					//feTimepicker();
					//feSelect();
					//feValidation();
					//feMasked();
					//feTooltips();
					feiCheckbox();
					//feDaterangepicker();
				}
		}
	}();
	
	formElements.init();

	// New selector case insensivity        
	 $.expr[':'].containsi = function(a, i, m) {
		 return jQuery(a).text().toUpperCase().indexOf(m[3].toUpperCase()) >= 0;
	 };              
});

Object.size = function(obj) {
	var size = 0, key;
	for (key in obj) {
		if (obj.hasOwnProperty(key)) size++;
	}
	return size;
};