function proceed_btn() {
    let payslip = document.getElementById("payslip").files[0];
    let promissory = document.getElementById("promissory").files[0];
    let first = document.getElementById("first").files[0];
    let second = document.getElementById("second").files[0];
    let name = document.getElementById("name").value;
    let bday = document.getElementById("bday").value;
    let age = document.getElementById("age").value;
    let sex = document.getElementById("sex").value;
    let spouse = document.getElementById("spouse").value;
    let dependents = document.getElementById("dependents").value;
    let studying = document.getElementById("studying").value;
    let home = document.getElementById("home").value;
    let tel_no = document.getElementById("tel_no").value;
    let house_type = document.getElementById("house_type").value;
    let tin = document.getElementById("tin").value;
    let business_address = document.getElementById("business_address").value;
    let bus_telno = document.getElementById("bus_telno").value;
    let employer = document.getElementById("employer").value;
    let position = document.getElementById("position").value;
    let nature_business = document.getElementById("nature_business").value;
    let length_service = document.getElementById("length_service").value;
    let spouse_employment = document.getElementById("spouse_employment").value;
    let spouse_position = document.getElementById("spouse_position").value;
    let spouse_address = document.getElementById("spouse_address").value;
    let spouse_telno = document.getElementById("spouse_telno").value;
    let food = document.getElementById("food").value;
    let water = document.getElementById("water").value;
    let education = document.getElementById("education").value;
    let others = document.getElementById("others").value;
    let savings_account = document.getElementById("savings_account").value;
    let checking_account = document.getElementById("checking_account").value;
    let loan_amount = document.getElementById("loan_amount").value;
    let loan_term = document.getElementById("loan_term").value;
    let collateral_offered = document.getElementById("collateral_offered").value;
    countSource = document.getElementById('countSource').value;
    countCredit = document.getElementById('countCredit').value;
    countPersonal = document.getElementById('countPersonal').value;
    countOwned = document.getElementById('countOwned').value;
    if(countSource==''){
      	ctr =  1;
    } else{
      	ctr =  countSource;
    }
    if(countCredit==''){
      	ctr1 =  1;
    } else{
      	ctr1 =  countCredit;
    }
    if(countPersonal==''){
      	ctr2 =  1;
    } else{
      	ctr2 =  countPersonal;
    }
    if(countOwned==''){
      	ctr3 =  1;
    } else{
      	ctr3 =  countOwned;
    }
    let formData = new FormData();
    formData.append("payslip", payslip);
    formData.append("promissory", promissory);
    formData.append("first", first);
    formData.append("second", second);
    formData.append("name", name);
    formData.append("bday", bday);
    formData.append("age", age);
    formData.append("sex", sex);
    formData.append("spouse", spouse);
    formData.append("dependents", dependents);
    formData.append("studying", studying);
    formData.append("home", home);
    formData.append("tel_no", tel_no);
    formData.append("house_type", house_type);
    formData.append("tin", tin);
    formData.append("business_address", business_address);
    formData.append("bus_telno", bus_telno);
    formData.append("employer", employer);
    formData.append("position", position);
    formData.append("nature_business", nature_business);
    formData.append("length_service", length_service);
    formData.append("spouse_employment", spouse_employment);
    formData.append("spouse_position", spouse_position);
    formData.append("spouse_address", spouse_address);
    formData.append("spouse_telno", spouse_telno);
    formData.append("food", food);
    formData.append("water", water);
    formData.append("education", education);
    formData.append("others", others);
    formData.append("savings_account", savings_account);
    formData.append("checking_account", checking_account);
    formData.append("loan_amount", loan_amount);
    formData.append("loan_term", loan_term);
    formData.append("collateral_offered", collateral_offered);
    formData.append('countSource', countSource);
    formData.append('countCredit', countCredit);
    formData.append('countPersonal', countPersonal);
    formData.append('countOwned', countOwned);
    if(ctr==1){
		nature_source = document.getElementById('nature_source1').value;
		source_amount = document.getElementById('source_amount1').value;
		formData.append('nature_source1', nature_source);
		formData.append('source_amount1', source_amount);
    } else if(ctr>=2){
		for (x = 1; x <= ctr; x++){
			nature_source = document.getElementById('nature_source' + x).value;
			source_amount = document.getElementById('source_amount'+x).value;
			formData.append('nature_source'+x, nature_source);
			formData.append('source_amount'+x, source_amount);
        }
  	}
  	if(ctr1==1){
		creditor = document.getElementById('creditor1').value;
		creditor_address = document.getElementById('creditor_address1').value;
		original_amount = document.getElementById('original_amount1').value;
		loan_balance = document.getElementById('loan_balance1').value;
		collateral = document.getElementById('collateral1').value;
		formData.append('creditor1', creditor);
		formData.append('creditor_address1', creditor_address);
		formData.append('original_amount1', original_amount);
		formData.append('loan_balance1', loan_balance);
		formData.append('collateral1', collateral);
  	} else if(ctr1>=2){
		for(y=1;y<=ctr1;y++){
			creditor = document.getElementById('creditor'+y).value;
			creditor_address = document.getElementById('creditor_address'+y).value;
			original_amount = document.getElementById('original_amount'+y).value;
			loan_balance = document.getElementById('loan_balance'+y).value;
			collateral = document.getElementById('collateral'+y).value;
			formData.append('creditor'+y, creditor);
			formData.append('creditor_address'+y, creditor_address);
			formData.append('original_amount'+y, original_amount);
			formData.append('loan_balance'+y, loan_balance);
			formData.append('collateral'+y, collateral);
		}
	}
	if(ctr2==1){
		personal_name = document.getElementById('personal_name1').value;
		personal_address = document.getElementById('personal_address1').value;
		personal_employment = document.getElementById('personal_employment1').value;
		personal_relation = document.getElementById('personal_relation1').value;
		formData.append('personal_name1', personal_name);
		formData.append('personal_address1', personal_address);
		formData.append('personal_employment1', personal_employment);
		formData.append('personal_relation1', personal_relation);
  	} else if(ctr2>=2){
		for(z=1;z<=ctr2;z++){
			personal_name = document.getElementById('personal_name'+z).value;
			personal_address = document.getElementById('personal_address'+z).value;
			personal_employment = document.getElementById('personal_employment'+z).value;
			personal_relation = document.getElementById('personal_relation'+z).value;
			formData.append('personal_name'+z, personal_name);
			formData.append('personal_address'+z, personal_address);
			formData.append('personal_employment'+z, personal_employment);
			formData.append('personal_relation'+z, personal_relation);
		}
	}
	if(ctr3==1){
		kind = document.getElementById('kind1').value;
		location_name = document.getElementById('location1').value;
		value = document.getElementById('value1').value;
		encumbrance = document.getElementById('encumbrance1').value;
		formData.append('kind1', kind);
		formData.append('location1', location_name);
		formData.append('value1', value);
		formData.append('encumbrance1', encumbrance);
  	} else if(ctr3>=2){
		for(a=1;a<=ctr3;a++){
			kind = document.getElementById('kind'+a).value;
			location_name = document.getElementById('location'+a).value;
			value = document.getElementById('value'+a).value;
			encumbrance = document.getElementById('encumbrance'+a).value;
			formData.append('kind'+a, kind);
			formData.append('location'+a, location_name);
			formData.append('value'+a, value);
			formData.append('encumbrance'+a, encumbrance);
		}
  	}
	var loc= document.getElementById("baseurl").value;
	var redirect = loc+"main/insert_application";
	var conf = confirm('Are you sure you want to proceed?');
	//if(conf){
		$.ajax({
			type: "POST",
			url: redirect,
			data: formData,
			processData: false,
			contentType: false,
			success: function (output) {
				var success=document.getElementById("success");
				success.style.display = "block";
				document.getElementById("success_msg").innerHTML='Your application has been submitted';
				window.location.reload();
			}
		});
	//}  
}

var ii = 1;
$("body").on("click", ".addSource", function () {
	ii++;
	var count= document.getElementsByClassName("append");
	document.getElementById("countSource").value = count.length + 1;
	var $append = $(this).parents('.append');
	var next = $append.clone().find("input").val("").end();
	next.attr('id', 'append' + ii);
	$append.find('.nature').attr('id','nature_source'+ii);
	$append.find('.amount').attr('id','source_amount'+ii);
	// nature.attr('id', 'nature_source' + ii);
	// var nature = document.getElementById("nature_source1");
	// var amount = document.getElementById("source_amount1");
	// nature.id='nature_source'+ii;
	// amount.id='source_amount'+ii;
	var RmBtn = $('.remSource', next).length > 0;
	if (!RmBtn) {
		var rm = "<button type='button' class='btn btn-sm btn-danger remSource'>x</button>"
		$('.addmoreappend', next).append(rm);
	}
	$append.after(next); 
});

$("body").on("click", ".remSource", function() {
	var count= document.getElementsByClassName("append");
	document.getElementById("countSource").value = count.length - 1;
	var less = count.length - 1;
	$('.append').find('.nature').attr('id','nature_source'+less);
	$('.append').find('.amount').attr('id','source_amount'+less);
	$(this).parents('.append').remove();
});

var cc = 1;
$("body").on("click", ".addCredit", function() {
  cc++;
  var count= document.getElementsByClassName("credit");
  document.getElementById("countCredit").value = count.length + 1;
  var $credit = $(this).parents('.credit');
  var next = $credit.clone().find("input").val("").end();
  next.attr('id', 'credit' + cc);
  $credit.find('.creditor').attr('id','creditor'+cc);
  $credit.find('.creditor_address').attr('id','creditor_address'+cc);
  $credit.find('.original_amount').attr('id','original_amount'+cc);
  $credit.find('.loan_balance').attr('id','loan_balance'+cc);
  $credit.find('.collateral').attr('id','collateral'+cc);
  var RmBtn = $('.remCredit', next).length > 0;
  if (!RmBtn) {
      var rm = "<button type='button' class='btn btn-sm btn-danger remCredit'>x</button>"
      $('.addmorecredit', next).append(rm);
  }
  $credit.after(next); 

});

$("body").on("click", ".remCredit", function() {
  	var count= document.getElementsByClassName("credit");
	document.getElementById("countCredit").value = count.length - 1;
	var less = count.length - 1;
	$('.credit').find('.creditor').attr('id','creditor'+less);
	$('.credit').find('.creditor_address').attr('id','creditor_address'+less);
	$('.credit').find('.original_amount').attr('id','original_amount'+less);
	$('.credit').find('.loan_balance').attr('id','loan_balance'+less);
	$('.credit').find('.collateral').attr('id','collateral'+less);
  	$(this).parents('.credit').remove();
});

var pp = 1;
$("body").on("click", ".addPersonal", function() {
  pp++;
  var count= document.getElementsByClassName("personal");
  document.getElementById("countPersonal").value = count.length + 1;
  var $personal = $(this).parents('.personal');
  var next = $personal.clone().find("input").val("").end();
  next.attr('id', 'personal' + pp);
  $personal.find('.personal_name').attr('id','personal_name'+pp);
  $personal.find('.personal_address').attr('id','personal_address'+pp);
  $personal.find('.personal_employment').attr('id','personal_employment'+pp);
  $personal.find('.personal_relation').attr('id','personal_relation'+pp);
  var RmBtn = $('.remPersonal', next).length > 0;
  if (!RmBtn) {
      var rm = "<button type='button' class='btn btn-sm btn-danger remPersonal'>x</button>"
      $('.addmorepersonal', next).append(rm);
  }
  $personal.after(next); 

});

$("body").on("click", ".remPersonal", function() {
	var count= document.getElementsByClassName("personal");
	document.getElementById("countPersonal").value = count.length - 1;
	var less = count.length - 1;
	$('.personal').find('.personal_name').attr('id','personal_name'+less);
	$('.personal').find('.personal_address').attr('id','personal_address'+less);
	$('.personal').find('.personal_employment').attr('id','personal_employment'+less);
	$('.personal').find('.personal_relation').attr('id','personal_relation'+less);
  	$(this).parents('.personal').remove();
});

var oo = 1;
$("body").on("click", ".addOwned", function() {
  oo++;
  var count= document.getElementsByClassName("owned");
  document.getElementById("countOwned").value = count.length + 1;
  var $owned = $(this).parents('.owned');
  var next = $owned.clone().find("input").val("").end();
  next.attr('id', 'owned' + oo);
  $owned.find('.kind').attr('id','kind'+oo);
  $owned.find('.location').attr('id','location'+oo);
  $owned.find('.value').attr('id','value'+oo);
  $owned.find('.encumbrance').attr('id','encumbrance'+oo);
  var RmBtn = $('.remOwned', next).length > 0;
  if (!RmBtn) {
      var rm = "<button type='button' class='btn btn-sm btn-danger remOwned'>x</button>"
      $('.addmoreowned', next).append(rm);
  }
  $owned.after(next); 

});

$("body").on("click", ".remOwned", function() {
	var count= document.getElementsByClassName("owned");
	document.getElementById("countOwned").value = count.length - 1;
	var less = count.length - 1;
	$('.owned').find('.kind').attr('id','kind'+less);
	$('.owned').find('.location').attr('id','location'+less);
	$('.owned').find('.value').attr('id','value'+less);
	$('.owned').find('.encumbrance').attr('id','encumbrance'+less);
	$(this).parents('.owned').remove();
});

function calculate_age() {
	var today = new Date();
	var bday= document.getElementById("bday").value;
	var birthDate = new Date(bday);
	var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }
	document.getElementById("age").value = age;
}