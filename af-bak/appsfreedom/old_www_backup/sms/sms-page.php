<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<script src="jquery-1.5.2.min.js" type="text/javascript"></script>
<title>*Standard messaging rates apply</title>
</head>

<body>
<div style="position:relative;top:0px;margin-bottom:0px; width:100%;">

<p>Enter your mobile phone number to download our demo app for iOS and Android devices*</p>

	<input type="text" id="txtName" style="position:absolute;top:93px;left:20px;width:175px;font-size:12px;text-align:center;" class="removeLater"  />

	<input type="text" id="txtPhoneNumber" style="position:absolute;top:115px;left:20px;width:175px;font-size:12px;text-align:center;" class="removeLater" />

	
	<img src="bg-apps-freedom-sms-page.png" usemap="#mapSampleTour" border=0 width=215 height=203 />
	<MAP NAME="mapSampleTour">
	<AREA HREF="#" ALT="" TITLE="" SHAPE=RECT COORDS="18,141,192,185" onclick="sendSampleTour();return false;">
	</MAP>
	<div style="font-size:6.5pt;margin:auto;">*Standard messaging rates apply</div>
	</div>
	<script src="jquery.watermarkinput.js" type="text/javascript"></script>
	<script src="jquery.maskedinput-1.2.2.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		var masked = false;
		
		
		
		$(function () {
		
			$('#txtName').Watermark("Please enter your name", '#777');
		
			$('#txtPhoneNumber').Watermark("Enter Your Phone#", '#777');
			$('#txtPhoneNumber').focus(function (e) {
				if (masked) return;
				$('#txtPhoneNumber').mask('(999) 999-9999');
				masked = true;
			});
 
		});
 
 
	
	
	
		function sendSampleTour() {
  var displayNbr = $('#txtPhoneNumber').val();
  var sName = $('#txtName').val();
  var nbr = displayNbr.replace(/\D/g, ''); // just get the digits.
  if (nbr.length != 10)
  {
   alert('Sorry, you must enter a 10 digit phone number.');
   return;
  }
  var i = new Image();
  i.src = 'http://demo.appsfreedom.net/salessms.php?v=1&sPhoneNumber=' + escape(nbr) + '&sName=' + sName;
  alert('A text message has been sent to ' + $('#txtPhoneNumber').val());
   $(".removeLater").val('');
   }
   
   
	</script>



</body>

</html>
