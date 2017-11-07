//CSRF PROTECTION FOR AJAX REQUEST 
$(document).ready(function() {
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
});
//************ OPEN LOGIN, SIGNUP MODAL
// Get the modal
// var login_modal = document.getElementById('login_modal');
// var signup_modal = document.getElementById('signup_modal');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
	if (event.target == login_modal || event.target == signup_modal) {
		// login_modal.style.display = "none";
		// signup_modal.style.display = "none";
		$("#login_modal").css("display", "none");
		$("#signup_modal").css("display", "none");
	}
	
}
//When the user clicks signup link, hide the login modal and show the signup modal
$(document).ready(function() {
	$("#signup_form").on('click', function(event) {
		// login_modal.style.display = "none";
		$("#login_modal").css("display", "none");
	});
});
// *********** CLOSE ALERT *************
$(document).ready(function() {
	$(".closebtn").on("click", function() {
		$(this).parent().css("display", "none");
		setTimeout(function() {
			$(this).parent().css("display", "none");
		}, 600);
	});
});
//********** HANDLE LOGIN, SIGN UP FORM USING AJAX, JQUERY
//*********** CHECK USERNAME & PASS *************
$(document).ready(function() {
	 //Validate username
    var usr_field = $("#signup_container").find("#username");
    usr_field.focus(function(event) {
        $("#msg_check_usr").css("display", "block");
    });
    usr_field.blur(function(event) {
        $("#msg_check_usr").css("display", "none");
    });
    //when user starts to type something inside the username field
    usr_field.keyup(function(event) {
        var usr = usr_field.val();
        if(usr.length >=6 ) {
            $("#user").removeClass("invalid");
            $("#user").addClass("valid");
        } else {
            $("#user").removeClass("valid");
            $("#user").addClass("invalid");
        }
    });
    //Validate password
    var psw_field = $("#signup_container").find("#password");
    psw_field.focus(function(event) {
        $("#msg_check_pass").css("display", "block");
    });
    psw_field.blur(function(event) {
        $("#msg_check_pass").css("display", "none");
    });
    //when user starts to type something inside the username field
    psw_field.keyup(function() {
        var psw = psw_field.val();
        //Validate lowercase letters
        var lowerCaseLetters = /[a-z]/g;
        if (psw.match(lowerCaseLetters)) {
            $("#letter").removeClass("invalid");
            $("#letter").addClass("valid");
        } else {
            $("#letter").removeClass("valid");
            $("#letter").addClass("invalid");
        }
        //Validate capital letters
        // var upperCaseLetters = /[A-Z]/g;
        // if (psw.match(upperCaseLetters)) {
        //  $("#capital").removeClass("invalid");
        //  $("#capital").addClass("valid");
        // } else {
        //  $("#capital").removeClass("valid");
        //  $("#capital").addClass("invalid");
        // }
        //Validate numbers
        var numbers = /[0-9]/g;
        if (psw.match(numbers)) {
            $("#number").removeClass("invalid");
            $("#number").addClass("valid");
        } else {
            $("#number").removeClass("valid");
            $("#number").addClass("invalid");
        }
        //Validate length password field
        if (psw.length >= 8) {
            $("#length").removeClass("invalid");
            $("#length").addClass("valid");
        } else {
            $("#length").removeClass("valid");
            $("#length").addClass("invalid");
        }

        var email = $("#signup_container").find("#email").val();

    });
	$("#signup_btn").on('click', function(event) {
		event.preventDefault();
		// var username = $("#signup_container").find("#username").val();
		// var password = $("#signup_container").find("#password").val();
		// var email = $("#signup_container").find("#email").val();
		var dataForm = $("#signup_frm").serialize();
		$.ajax({
			url: 'register',
			type: 'POST',
			datType: 'JSON',
			//send data
			// data: {'username': username, 'password': password, 'email': email},
			data: dataForm,
			success: function(data) {
				// console.log(data);
				if(data.error == false){
                	// alert(data.success);
                	window.location.href = "{!! url('forum') !!}";
                }else{
                	printErrorMsg(data.error);
                }
            }
        });
	});
	function printErrorMsg (msg) {
		$(".print_error_msg").find("ul").html(''); //This line prevents showing error again when submitting form errors
		$(".print_error_msg").css('display','block');
		$.each( msg, function( key, value ) {
			$(".print_error_msg").find("ul").append('<li>'+value+'</li>');
		});
	}
});
$(document).ready(function() {
	$("#login_btn").on('click', function(event) {
		event.preventDefault();
		// var dataForm = $("#login_frm").serialize();
		var email = $("#login_container").find("#email").val();
		var password = $("#login_container").find("#password").val();
		$.ajax({
			url: 'login',
			type: 'POST',
			datType: 'JSON',
			data: {'email': email, 'password': password},
			success: function(data) {
				if(data.error == false){
                	window.location.href = "{!! url('forum') !!}";
                }else{
                	printErrorMsgLogin(data.error);
                }
            }
        });
	});
	function printErrorMsgLogin (msg) {
		$(".print_error_msg_login").find("ul").html(''); //This line prevents showing error again when submitting form errors
		$(".print_error_msg_login").css('display','block');
		$.each( msg, function( key, value ) {
			$(".print_error_msg_login").find("ul").append('<li>'+value+'</li>');
		});
	}
});
//*********** CLOSE ALERT AUTOMATICALLY AFTER A FEW SECONDS
$(document).ready(function() {
	$(".alert").delay(4000).slideUp();
});

