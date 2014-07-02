<!DOCTYPE html>

<html>
	<head>	
		<title>List of Students not voted</title>

		<link media="all" type="text/css" rel="stylesheet" href="http://dev.votingsystem.local/assets/css/vendor/bootstrap/bootstrap.min.css">
	</head>
	<body style="margin: 100px;">
		<div id="print_content">
			<center style="font-size: 30px;">List of Students Not Voted</center>

			<?php $cnt = 0; ?>
			<ul style="list-style-type: none;">
				@foreach($students as $student)
					<?php $cnt++; ?>

					<li style="font-size: 19px;">{{ $cnt . '.' . ' ' . ucwords($student->fname) . ' ' . ucwords($student->mname) . ' ' . ucwords($student->lname) }}</li>

				@endforeach
			</ul>

		</div>
		<button type="button" class="btn btn-default" onclick="Clickheretoprint()" style="float: right;">Print</button>
	</body>

	<script language="javascript">
		function Clickheretoprint()
		{ 
		  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
		      disp_setting+="scrollbars=yes,width=400, height=400, left=100, top=25"; 
		  var content_vlue = document.getElementById("print_content").innerHTML; 
		  
		  var docprint=window.open("","",disp_setting); 
		   docprint.document.open(); 
		   docprint.document.write('</head><body onLoad="self.print()" style="margin-top:10px; margin-right:20px; margin-left:10px; width: 100%; font-size:12px; font-family:arial;">');          
		   docprint.document.write(content_vlue);          
		   docprint.document.write('</body></html>'); 
		   docprint.document.close(); 
		   docprint.focus(); 
		}
	</script>
</html>