<?php session_start(); ?>
<?php require 'menu.php'; ?>
<?php
$name=$address=$login=$password='';
if (isset($_SESSION['customer'])) {
	$name=$_SESSION['customer']['name'];
	$address=$_SESSION['customer']['address'];
	$login=$_SESSION['customer']['login'];
	$password=$_SESSION['customer']['password'];
}
?>
<form action="customer-output.php" method="post">
  <table>
    <tr>
      <td>お名前</td>
      <td>
        <input type="text" name="name" value="<?=$name?>">
      </td>
    </tr>
    <tr>
      <td>ご住所</td>
      <td>
        <input type="text" name="address" value="<?=$address?>">
      </td>
    </tr>
    <tr>
      <td>ログイン名</td>
      <td>
        <input type="text" name="login" value="<?=$login?>">
				<span id="ajax_result"></span>
      </td>
    </tr>
    <tr>
      <td>パスワード</td>
      <td>
        <input type="password" name="password" value="<?=$password?>">
      </td>
    </tr>
  </table>
  <input type="submit" value="確定">
</form>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
$('[name="login"]').on("change", function() {
  var login = $('[name="login"]').val();

  $.ajax({
      type: 'POST',
      url: './customer-ajax.php',
      data: {
        login:login
      },
      dataType: 'html',
    })
    .done(function(data, status, jqXHR) {
			console.log(data);
			if(data == 1){
				var message = "<em>このアカウントは使用できません</em>";
				$("#ajax_result").html(message);
				$("#ajax_result em").css('color','red');
				
				setTimeout(function(){  //3秒後に消す
					$("#ajax_result").html('');
					$('[name="login"]').val('');
				},3000);
			}
    })
    .fail(function(jqXHR, status, error) {
      $("#ajax_result").html("エラーです");
    })
    .always(function(jqXHR, status) {
      // console.log(status);
    });
});
</script>