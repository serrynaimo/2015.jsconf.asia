console.log('Back to the brackets, baby!');

$("#subscribeForm").ajaxForm({
	url: "http://2012.jsconf.asia/addsubscriber.php",
	dataType: "html",
	beforeSubmit: function() {
		$("#subscribeForm").removeClass("failure success").addClass("load");
		$("#subscribeForm .msg").removeClass("play");
	},
	success: function(r) {
		if(r.substr(0,6) != "Thanks") {
			$("#subscribeForm").removeClass("load").addClass("failure");
			$("#subscribeForm .msg span").text(r.substr(0,r.indexOf('<br/>')));
			$("#subscribeForm .msg").addClass("play");
			setTimeout(function() {
				$("#subscribeForm").removeClass("failure");
				$("#subscribeForm input[name='text']").focus();
			},5000);
		}
		else {
			$("#subscribeForm").removeClass("load").addClass("success");
			setTimeout(function() {
				$("#subscribeForm input").val("");
				$("#subscribeForm").removeClass("success active");
				$("#subscribeForm .msg").removeClass("play");
			},3000);
			setTimeout(function() {
				window.location = "http://twitter.com/jsconfasia";
			},1000);
		}
	},
	error: function(r, s) {
		$("#subscribeForm").removeClass("load").addClass("failure");
		$("#subscribeForm .msg span").text("Something went wrong...");
		setTimeout(function() {
			$("#subscribeForm").removeClass("failure");
		},4000);
	}
});

$("#subscribeForm .msg").click(function() {
	$("#subscribeForm").removeClass("failure success");
	$("#subscribeForm input[name='email']").focus();
});

var change = function(e, elem) {
	if(e.which || $(elem).val() !== "") {
    	$("#subscribeForm input[name='email']").attr("placeholder","E-Mail");
        $("#subscribeForm input[name='fname']").attr("placeholder","First name");
	}
	else {
    	$("#subscribeForm input[name='fname']").attr("placeholder","Enter your first name and");
        $("#subscribeForm input[name='email']").attr("placeholder","e-mail address for updates");
	}
};

$("#subscribeForm input").focus(function(e) {
	$("#subscribeForm").addClass("selected");
	change(e, this);
}).blur(function(e) {
	$("#subscribeForm").removeClass("selected");
	change(e, this);
}).keydown(change);

$("#subscribeForm").hover(function() {
	$("#subscribeForm").addClass("hovered");
}, function() {
	$("#subscribeForm").removeClass("hovered");
});

$(document).ready(function() {
	setTimeout(function() {
		$("#subscribeForm input[type='text']").select();
	}, 6000);
});
