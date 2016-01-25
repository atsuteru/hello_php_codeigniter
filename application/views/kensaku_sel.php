<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>検索の結果</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>css/theme_basic.css">
</head>
<body>
	<div id="container">
		<h1>検索の結果</h1>
		<div id="body">
			<p>ご意見の結果は次の通りです。</p>
	
			<code>
				コード: {code}<br/>
				e-mail: {email}<br/>
				ご意見: {goiken}<br/>
                        </code>
	
			<?=form_open('kensaku')?>
				<?=form_fieldset()?>
					<?=form_submit('backButton','戻る','id="backButton"')?>
				<?=form_fieldset_close()?>
			<?=form_close()?>
		</div>
		<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
	</div>
</body>
</html>