<html>
<head>
</head>
<body>
	<div style="text-align:center;margin-top:200px">
		Password Reset Code &nbsp;&nbsp;<input type="text" id="pwdCode" ><br><br>
		Enter New Password  &nbsp;&nbsp;<input type="password" id="newPwd" ><br><br>
		<button onclick="restPwdSave()">Done</button>
	</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type='text/javascript' src='js/disable_page.js'></script>
<script>
function restPwdSave(){
var link =$('#pwdCode').val();
var pwd =$('#newPwd').val();
$.ajax({
    type: "post",
    url: "url/resetting_pwd",
    data: {
        "link":link,"pwd":pwd
       },
    cache: false,
    success: function(data){
    alert('pwd resetted sucessfully');
    },
    error: function(data) {
    }
  });
}
</script>
</html>