$(document).ready(function(){
	$("#messageForm").on('submit', function(){
		var url = $("#messageForm").attr("action");

		$.post(url, {
			message: $("#message").val(),
			receiver: $("#receiver").val(),
			other: "attributes"
		}, function(data){
			if(data.responseCode==200){
				$("#message").val('');
				$("#chatMessage").prepend("<li class='message_text me animated fadeInDown' ><span>"+data.receiver[0].firstName+"</span><p>"+data.message+"</p></li>");
			} else if(data.responseCode==400){
				console.log("JA NEE HE!");
			} else {
				console.log("An unexpected error occured.");
				console.log(data);
			}
		});
		return false;
	});
});