/*** Document Ready Functions ***/
jQuery(document).ready(function(){

	"use strict";
	
 var allservice = $('.cause-tabber li');
	$('.cause-tabber li').click(function() {
		$(allservice).removeClass("active");
	});
	
	

 
 /*** MESSAGE BOX TOGGLE FUNCTION ***/
$(".message-box-title").click(function(){
	$(".message-box-title").toggleClass("opened");
	$(".message-box-title > i").toggleClass("icon-angle-down");
	$(".message-form").slideToggle();
});	
	


$('.full-section').parent().parent().parent().addClass('expand');

$(".product a").click(function(){
	$(this).parent().parent().slideUp();
});	



// Responsive Header //
$(".menu-btn").on("click", function () {
    $(".responsive-menu").addClass("slidein");
    return false;
});
$(".close-btn").on("click", function () {
    $(".responsive-menu").removeClass("slidein");
    return false;
});
$(".responsive-menu li.has-dropdown > a").on("click", function () {
    $(this).parent().siblings().children("ul").slideUp();
    $(this).parent().siblings().removeClass("active");
    $(this).parent().children("ul").slideToggle();
    $(this).parent().toggleClass("active");
    //return false;
});

// Scroll Bar //
$('.responsive-menu, .scroll-sec').perfectScrollbar();

// Responsive info Toggle //
$(".responsive-topbar-info > ul > li:first-child").addClass("active");
$(".responsive-topbar-info > ul > li").on("click", function() {
    $(this).parent().find("li").removeClass("active");
    $(this).addClass("active");
});
	

/*** ACCORDIONS ***/
$('.accordion_content').not('.open').hide();

$('.accordion_toggle a').click(function(e){
	if($(this).parent().hasClass('current')) {
		$(this).parent()
			.removeClass('current')
			.next('.accordion_content').slideUp();
	} else {
		$(document).find('.current')
			.removeClass('current')
			.next('.accordion_content').slideUp();
		$(this).parent()
			.addClass('current')
			.next('.accordion_content').slideDown();
	}
	e.preventDefault();
});




/*** ACCORDIONS ***/
$('.accordion_content').not('.open').hide();

$('.accordion_toggle input').click(function(e){
	if($(this).parent().hasClass('current')) {
		$(this).parent()
			.removeClass('current')
			.next('.accordion_content').slideUp();
	} else {
		$(document).find('.current')
			.removeClass('current')
			.next('.accordion_content').slideUp();
		$(this).parent()
			.addClass('current')
			.next('.accordion_content').slideDown();
	}
	e.preventDefault();
});



$(".donate-drop-btn").click( function(){
	$(".donate-drop-down").slideToggle();
	$(this).toggleClass('down');
});		


var amount = $('.amount-btns > a');
$(".amount-btns > a").click( function(){
	amount.removeClass("selected");
	$(this).addClass("selected");
});		



/*** STICKY MENU ***/
var nav = $('.sticky');
$(window).scroll(function () {
	if ($(this).scrollTop() > 50) {
			nav.addClass("stick");
	}
	else {
			nav.removeClass("stick");
	}
});



/*** TOGGLE HEADER ***/
$(".show-header").click(function(){
	$(".toggle-header").slideToggle();
	$(".top-bar-toggle").slideToggle();
	$(this).toggleClass("move-down");
});	


/*** CHECKOUT PAGE FORM TOGGLE ICON ***/
$(".form-toggle.accordion_toggle a").click(function(){
	$(this).toggleClass("pointed");
});	
$("body").append("<div class='loading'></div>");

});		

jQuery(window).load(function(){
		"use strict";
	$(".loading").fadeOut();
});
//*my comment session
//add event construct for modern browsers or IE
//which fires the callback with a pre-converted target reference
function addEvent(node, type, callback) {
	if (node.addEventListener) {
	  node.addEventListener(
		type,
		function(e) {
		  callback(e, e.target);
		},
		false
	  );
	} else if (node.attachEvent) {
	  node.attachEvent("on" + type, function(e) {
		callback(e, e.srcElement);
	  });
	}
  }
  
  //identify whether a field should be validated
  //ie. true if the field is neither readonly nor disabled,
  //and has either "pattern", "required" or "aria-invalid"
  function shouldBeValidated(field) {
	return (
	  !(field.getAttribute("readonly") || field.readonly) &&
	  !(field.getAttribute("disabled") || field.disabled) &&
	  (field.getAttribute("pattern") || field.getAttribute("required"))
	);
  }
  
  //field testing and validation function
  function instantValidation(field) {
	//if the field should be validated
	if (shouldBeValidated(field)) {
	  //the field is invalid if:
	  //it's required but the value is empty
	  //it has a pattern but the (non-empty) value doesn't pass
	  var invalid =
		(field.getAttribute("required") && !field.value) ||
		(field.getAttribute("pattern") &&
		  field.value &&
		  !new RegExp(field.getAttribute("pattern")).test(field.value));
  
	  //add or remove the attribute is indicated by
	  //the invalid flag and the current attribute state
	  if (!invalid && field.getAttribute("aria-invalid")) {
		field.removeAttribute("aria-invalid");
	  } else if (invalid && !field.getAttribute("aria-invalid")) {
		field.setAttribute("aria-invalid", "true");
	  }
	}
  }
  //now bind a delegated change event
  //== THIS FAILS IN INTERNET EXPLORER <= 8 ==//
  //addEvent(document, 'change', function(e, target)
  //{
  //  instantValidation(target);
  //});
  
  //now bind a change event to each applicable for field
  var fields = [
	document.getElementsByTagName("input"),
	document.getElementsByTagName("textarea")
  ];
  for (var a = fields.length, i = 0; i < a; i++) {
	for (var b = fields[i].length, j = 0; j < b; j++) {
	  addEvent(fields[i][j], "change", function(e, target) {
		instantValidation(target);
	  });
	}
  }//ends here
