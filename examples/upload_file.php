<?php

require_once "../ajax.php";
$ajax = CJAX::getInstance();

//uncomment this to see the behind the scenes action.
//$ajax->debug = true;  //shows frame
$ajax->Exec("saveForm",$ajax->form("../ajax.php?controller=upload_file&function=send_file","form1"));


?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $ajax->init();?>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Send Form...</title>
	<!-- These files below are only for presentation, not with the example itself. -->
	<link rel="stylesheet" type="text/css" href="resources/send_form/view.css" media="all">
	<script type="text/javascript" src="resources/send_form/view.js"></script>
</head>
<body id="main_body" >
	<img id="top" src="resources/send_form/top.png" alt="">
	<div id="form_container">
	
		<h1><a>Upload file using Ajax..</a></h1>

		<form id="form1" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h2>Send File</h2>
			<p>Upload file using ajax...</p>
		</div>						
		<ul>	
		<li id="li_3" >
		<label class="description" for="element_3">Select File </label>

		<div>
			<input id="my_file" name="my_file" class="element text medium" type="file" maxlength="255" value=""/> 
		</div> 
		</li>
			
		<li class="buttons">
				<input id="saveForm" class="button_text" type="submit"  value="Submit" />
		</li>
			</ul>
		</form>	
		<div id="footer">
			Generated by <a href="http://www.phpform.org">pForm</a>
		</div>
	</div>
	<img id="bottom" src="resources/send_form/bottom.png" alt="">
	</body>
</html>
</body>
</html>
