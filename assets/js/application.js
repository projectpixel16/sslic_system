function proceed_btn() {
    let payslip = document.getElementById("payslip").files[0];
    let promissory = document.getElementById("promissory").files[0];
    let first = document.getElementById("first").files[0];
    let second = document.getElementById("second").files[0];
    let name = document.getElementById("name").value;
    let bday = document.getElementById("bday").value;
    let formData = new FormData();
    formData.append("payslip", payslip);
    formData.append("promissory", promissory);
    formData.append("first", first);
    formData.append("second", second);
    formData.append("name", name);
    formData.append("bday", bday);
    var loc= document.getElementById("baseurl").value;
    var redirect = loc+"main/insert_application";
    var conf = confirm('Are you sure you want to proceed?');
    if(conf){
        $.ajax({
            type: "POST",
            url: redirect,
            data: formData,
            processData: false,
            contentType: false,
            success: function(output){
                alert(output)
                // var success=document.getElementById("success");
                // success.style.display = "block";
                // document.getElementById("success_msg").innerHTML='Your application has been submitted';
            }
        });
    }  
}

var ii = 1;
$("body").on("click", ".addSource", function() {
  ii++;
  var $append = $(this).parents('.append');
  var next = $append.clone().find("input").val("").end();
  next.attr('id', 'append' + ii);
  var RmBtn = $('.remSource', next).length > 0;
  if (!RmBtn) {
      var rm = "<button type='button' class='btn btn-sm btn-danger remSource'>x</button>"
      $('.addmoreappend', next).append(rm);
  }
  $append.after(next); 

});

$("body").on("click", ".remSource", function() {
  $(this).parents('.append').remove();
});

var cc = 1;
$("body").on("click", ".addCredit", function() {
  cc++;
  var $credit = $(this).parents('.credit');
  var next = $credit.clone().find("input").val("").end();
  next.attr('id', 'credit' + cc);
  var RmBtn = $('.remCredit', next).length > 0;
  if (!RmBtn) {
      var rm = "<button type='button' class='btn btn-sm btn-danger remCredit'>x</button>"
      $('.addmorecredit', next).append(rm);
  }
  $credit.after(next); 

});

$("body").on("click", ".remCredit", function() {
  $(this).parents('.credit').remove();
});

var pp = 1;
$("body").on("click", ".addPersonal", function() {
  pp++;
  var $personal = $(this).parents('.personal');
  var next = $personal.clone().find("input").val("").end();
  next.attr('id', 'personal' + pp);
  var RmBtn = $('.remPersonal', next).length > 0;
  if (!RmBtn) {
      var rm = "<button type='button' class='btn btn-sm btn-danger remPersonal'>x</button>"
      $('.addmorepersonal', next).append(rm);
  }
  $personal.after(next); 

});

$("body").on("click", ".remPersonal", function() {
  $(this).parents('.personal').remove();
});

var oo = 1;
$("body").on("click", ".addOwned", function() {
  oo++;
  var $owned = $(this).parents('.owned');
  var next = $owned.clone().find("input").val("").end();
  next.attr('id', 'owned' + oo);
  var RmBtn = $('.remOwned', next).length > 0;
  if (!RmBtn) {
      var rm = "<button type='button' class='btn btn-sm btn-danger remOwned'>x</button>"
      $('.addmoreowned', next).append(rm);
  }
  $owned.after(next); 

});

$("body").on("click", ".remOwned", function() {
  $(this).parents('.owned').remove();
});