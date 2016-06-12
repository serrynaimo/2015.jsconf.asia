
$("#subscribeForm").ajaxForm({
	url: "https://2012.jsconf.asia/addsubscriber.php",
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
				window.location = "https://twitter.com/jsconfasia";
			},10);
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

var change = function(e) {
    var a = $("#subscribeForm input[name='fname']");
    var b = $("#subscribeForm input[name='email']");

	if(e.which || a.val() !== "" || b.val() !== "") {
    	b.attr("placeholder","E-Mail");
        a.attr("placeholder","First name");
	}
	else {
    	a.attr("placeholder","Enter your first name and");
        b.attr("placeholder","email address for updates");
	}
};

$("#subscribeForm input").focus(function(e) {
	$("#subscribeForm").addClass("selected");
	change(e);
}).blur(function(e) {
	$("#subscribeForm").removeClass("selected");
	change(e);
}).keydown(change);

$("#subscribeForm").hover(function() {
	$("#subscribeForm").addClass("hovered");
}, function() {
	$("#subscribeForm").removeClass("hovered");
});

var slide = 1;
function next() {
	if($(".slide"+slide).length) {
		$(".slide"+(slide-1)).removeClass('visible');
		$(".slide"+slide).addClass('visible');
	}
	if(slide === 1) {
		$(".skip").hide();
		$(".slide:not(.slide1)").removeClass('visible');

		setTimeout(function() {
			$(".links").css("opacity", "1");
		}, 4000);
		setTimeout(function() {
	 	  $("body").addClass("topbar");
   		}, 7500);
   		setTimeout(function() {
	 	  $("body").addClass("bodyvisible");
   		}, 8000);
	}
	slide++;
}

$(document).ready(function() {
    $(".slide0").addClass('visible');
    setTimeout(function() {
	   $(".slide0 .title").animate({"opacity": "0"}, 1000)
    }, 2000);
	setInterval(next, 3900);
});

$("#subscribeForm input[type='email']").on("focus", function() {
    if($("#subscribeForm input[type='text']").val() === '' && $("#subscribeForm input[type='email']").val() === '') {
        setTimeout(function() {
            $("#subscribeForm input[type='text']").select();
        },1);
    }
});

function skip(e) {
	slide = 1;
	next();
	return false;
}

$('#intro').click(function(e) {
	$("body").addClass("topbar");
	setTimeout(function() {
	  $("body").addClass("bodyvisible");
	}, 500);
});

$('.speaker').click(function(e) {
   $(e.currentTarget).toggleClass('open');
});
