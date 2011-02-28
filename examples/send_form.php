<?php

require_once "../ajax.php";
$ajax = CJAX::getInstance();

$ajax->Exec("saveForm",$ajax->form("../ajax.php?controller=send_form&function=submit_form","form1"));

### below is an HTML form.  All you need is the id of the form, and all the code is needed is above. 
### look inside controllers/send_form.php for response code sample.


?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $ajax->init();?>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Send Form...</title>
	<link rel="stylesheet" type="text/css" href="resources/send_form/view.css" media="all">
	<script type="text/javascript" src="resources/send_form/view.js"></script>
</head>
<body id="main_body" >
	<img id="top" src="resources/send_form/top.png" alt="">
	<div id="form_container">
	
		<h1><a>Send form to server using ajax..</a></h1>

		<form id="form1" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h2>Submit Form</h2>
			<p>Send any form data through ajax...</p>
		</div>						
		<ul>
		<li id="li_2" >
			<label class="description" for="element_2">Name </label>
	
			<span>
				<input id="a[name]" name="a[name]" class="element text" maxlength="255" size="8" value=""/>
				<label>First</label>
			</span>
			<span>
				<input id="a[last_name]" name="a[last_name]" class="element text" maxlength="255" size="14" value=""/>
				<label>Last</label>
			</span> 
		</li>		<li id="li_4" >

		<label class="description" for="element_4">Drop Down </label>
		<div>
		<select class="element select medium" id="a[drop_down]" name="a[drop_down]"> 
			<option value="" selected="selected"></option>
			<option value="1" >First option</option>
			<option value="2" >Second option</option>
			<option value="3" >Third option</option>
		</select>

		</div> 
		</li>		<li id="li_1" >
		<label class="description" for="element_1">Country </label>
		<div>
			<input id="a[country]" name="a[country]" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3">State </label>

		<div>
			<input id="a[state]" name="a[state]" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>
			
		<li class="buttons">
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
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
