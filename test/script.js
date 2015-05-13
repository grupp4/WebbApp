$(document).ready(function () {
	var stream = false;
    var pil = true;
	$(".pil").click(function(e)
					{
						if(pil === false)
						{
							console.log("pil");
							pil = true;
							$(".pil").html("Deaktivera piltangenterna");
							return;
						}
						if(pil === true)
						{
							pil = false;
							$(".pil").html("Aktivera piltangenterna");
							return;
						}
					});

	$("#cont").keydown(function(e) {
		if(e.keyCode == 37 && pil === true) { // left
			console.log("LEFT");
			window.location.replace("left.php");
		}
		if(e.keyCode == 39 && pil === true) { // right
			console.log("RIGHT");
			window.location.replace("right.php");
		}

		if(e.keyCode == 38 && pil === true) { // top
			console.log("TOP");
			window.location.replace("forward.php");
		}

		if(e.keyCode == 40 && pil === true) { // down
			console.log("DOWN");
		 	window.location.replace("down.php");
		}
	});
	
	$(".click").click(function (e)
					  {
						  console.log("Click");
						  if(stream === false)
						  {
							  $("#player").css("display", "block");
							  $("#player").css("width", "500");
							  $("#player").css("height", "500");
							  stream = true;
							  $(".click").html("HIDE STREAM");
							  return;
						  }
						  if(stream === true)
						  {
							  $("#player").css("display", "none");
							  stream = false;
							  $(".click").html("SHOW STREAM");
							  return;
						  }
					  });


	$(".post").click(function submitMe() {
		jQuery(function($) {    
			$.ajax( {           
				url : "forward.php?action=getsession",
				type : "POST",
				success : function(data) {
					console.log("works!"); //or use data string to show something else
                }
            });
        });
    });

});

