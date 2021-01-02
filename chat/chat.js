
		var comet = new AjaxPush('listener.php', 'sender.php');
		var n = new Function("return (Math.random()*190).toFixed(0)");

		// create anonymous users
		var c = "rgb(" + n() + ", " + n() + "," + n() + ")";
		var template = "<strong style='color: " + c + "'>" + 'user_' + n() + "</strong>: ";

		// listener
		comet.connect(function(data) { $("#history").append(data.message) + "<br>"; });

		// sender
		var send = function() {
			comet.doRequest({ message: template + $("#message").val() + "<br>" }, function(){
				$("#message").val('').focus();
			})
		}
function openForm() {
   document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
	