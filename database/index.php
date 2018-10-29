<!-- <?php 
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$parsedurl = parse_url($actual_link);

if(isset($_GET['firstName'])) {
	echo $_GET['firstName'];
}
 ?> -->
<?php 

	echo print_r($_FILES);
	
   echo $destination_path = getcwd().DIRECTORY_SEPARATOR;
 
   $result = 0;

 
   echo $target_path = $destination_path . basename( $_FILES['myfile']['name']);
 
   if(@move_uploaded_file($_FILES['myfile']['tmp_name'], $target_path)) {
      $result = 1;
   }
 
   sleep(1);


 ?>
 
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<p id="f1_upload_process">Loading...<br/><img src="loader.gif" /></p>
<p id="result"></p>
<form action="upload.php" method="post" enctype="multipart/form-data" target="upload_target" onsubmit="startUpload();" >
    File: <input name="myfile" type="file" />
          <input type="submit" name="submitBtn" value="Upload" />
</form>
 
<iframe id="upload_target" name="upload_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>                 
</body>
</html>


<script>
function startUpload(){
    document.getElementById('f1_upload_process').style.visibility = 'visible';
    return true;
}

function stopUpload(success){
      var result = '';
      if (success == 1){
         document.getElementById('result').innerHTML =
           '<span class="msg">The file was uploaded successfully!<\/span><br/><br/>';
      }
      else {
         document.getElementById('result').innerHTML = 
           '<span class="emsg">There was an error during file upload!<\/span><br/><br/>';
      }
      document.getElementById('f1_upload_process').style.visibility = 'hidden';
      return true;   
}

// var ajaxObject;

// if(window.XMLHttpRequest)
// {
//   // code for IE7+, Firefox, Chrome, Opera, Safari
//   ajaxObject = new XMLHttpRequest();
// }

// else 
// { // code for IE6, IE5
//   ajaxObject = new activeXObject("MICROSOFT.XMLHTTP");
// }

// function send_data(value)
// {
// ajaxObject.open("GET","osb.php",true);
// ajaxObject.send();
// }
</script>

<script language="javascript" type="text/javascript">
   window.top.window.stopUpload(<?php echo $result; ?>);
</script>   


