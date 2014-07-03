<!DOCTYPE html>

<html>
	<head>	
		<title>List of Students not voted</title>

		<link media="all" type="text/css" rel="stylesheet" href="http://dev.votingsystem.local/assets/css/vendor/bootstrap/bootstrap.min.css">
	</head>
	<body style="margin: 100px;">
		<div id="print_content">
			<center style="font-size: 30px;">Result</center>

			<h3>President</h3>
			<div style="text-indent: 110px;">
				@foreach($president as $p)
					<span style="font-size: 20px;">{{ $p->candidate_name }}</span>
				@endforeach
			</div>
			<h3>Vice President</h3>
			<div style="text-indent: 110px;">
				@foreach($v_president as $vp)
					<span style="font-size: 20px;">{{ $vp->candidate_name }}</span>
				@endforeach
			</div>
			<h3>Senator</h3>
			<div style="text-indent: 110px;">
				@foreach($senator as $sen)
					<span style="font-size: 20px;">{{ $sen->candidate_name }}</span>
				@endforeach
			</div>
			<h3>BSIT - Governor</h3>
			<div style="text-indent: 110px;">
				@foreach($bsit_gov as $b)
					<span style="font-size: 20px;">{{ $b->candidate_name }}</span>
				@endforeach
			</div>
			<h3>ASCT - Governor</h3>
			<div style="text-indent: 110px;">
				@foreach($asct_gov as $a)
					<span style="font-size: 20px;">{{ $a->candidate_name }}</span>
				@endforeach
			</div>
			<h3>BSHRM - Governor</h3>
			<div style="text-indent: 110px;">
				@foreach($hrm_gov as $hrm)
					<span style="font-size: 20px;">{{ $hrm->candidate_name }}</span>
				@endforeach
			</div>
			<h3>HRS - Governor</h3>
			<div style="text-indent: 110px;">
				@foreach($hrs_gov as $hrs)
					<span style="font-size: 20px;">{{ $hrs->candidate_name }}</span>
				@endforeach
			</div>

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