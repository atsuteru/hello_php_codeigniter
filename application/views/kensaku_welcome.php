<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ご意見検索</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>css/theme_basic.css">
</head>
<body>
	<div id="container">
		<h1>検索</h1>
		<div id="body">
			<p>ご意見コードを入力してください。</p>
			<?=form_open('kensaku/sel')?>
                        <input name="code" type="text" style="width:100px"><br/>
				<?=form_fieldset()?>
					<?=form_submit('sendButton','送信','id="sendButton"')?>
				<?=form_fieldset_close()?>
			<?=form_close()?>
		</div>
		<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
	</div>
</body>
</html>