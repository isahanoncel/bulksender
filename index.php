<!DOCTYPE html>
<html lang="en">
<!--
@2019 For Github İsahan ÖNCEL
-->
<head>
	<title>Send Mail</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

	<div class="bg-container-contact100" style="background-image: url(images/bg-01.jpg);">
		<div class="contact100-header flex-sb-m">


			<div>

			</div>
		</div>
	</div>

	<div class="container-contact100">
		<div class="wrap-contact100">


			<div class="contact100-form-title" style="background-image: url(images/bg-02.jpg);">
				<span>Send Mail</span>
			</div>
<script type="text/javascript">

function senddata(){
	var subject = $("#subject").val();
	var message = $("#message").val();
	var altbody = $("#altbody").val();
	$.ajax({
		type:"post",
		url:"sendmail.php",
		data:{"message":message,"altbody":altbody,"subject":subject},
		cache:false,
		success:function(ans){
			$("#success").fadeIn("slow");
			$("#success").html(ans);
		},
		error:function(ans){
			$("#error").fadeIn("slow");
			$("#error").html(ans);
		}
	});
	 return false;
}

</script>
			<div class="contact100-form validate-form" id="mailform">
				<div id="error" style="width:100%;">

				</div>
				<div id="success" style="width:100%;">

				</div>

				<div class="wrap-input100 validate-input">
					<input required autocomplete="off" required id="subject" class="input100" type="text" placeholder="Subject">
					<span class="focus-input100"></span>
					<label class="label-input100" for="name">
						<span class="lnr lnr-bubble m-b-2"></span>
					</label>
				</div>
				<div class="wrap-input100 validate-input">
					<textarea required autocomplete="off" required id="message" class="input100" placeholder="Body"></textarea>
					<span class="focus-input100"></span>
					<label class="label-input100 rs1" for="message">
						<span class="lnr lnr-bubble"></span>
					</label>
				</div>

				<div class="wrap-input100 validate-input">
					<input required autocomplete="off" required id="altbody" class="input100" type="text"  placeholder="Alt Body">
					<span class="focus-input100"></span>
					<label class="label-input100" for="phone">
						<span class="lnr lnr-bubble m-b-2"></span>
					</label>
				</div>

				<div class="container-contact100-form-btn">
					<button type="submit" onclick="senddata()"  id="btnSendMail" class="contact100-form-btn">
						Send Mail
					</button>

				</div>
			</div>
		</div>
	</div>



<!--===============================================================================================-->
	<script src="js/jquery.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<!--===============================================================================================-->
<script type="text/javascript">
$( document ).ready(function() {
		$("#success").hide();
			$("#error").hide();
});
</script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
</body>
<!--
@2019 For Github İsahan ÖNCEL
-->
</html>
