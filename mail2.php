<html lang="ja"><head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="format-detection" content="telephone=no">
<title>確認画面</title>
<style type="text/css">
/* 自由に編集下さい */
#formWrap {
	width:700px;
	margin:0 auto;
	color:#555;
	line-height:120%;
	font-size:90%;
}
table.formTable{
	width:100%;
	margin:0 auto;
	border-collapse:collapse;
}
table.formTable td,table.formTable th{
	border:1px solid #ccc;
	padding:10px;
}
table.formTable th{
	width:30%;
	font-weight:normal;
	background:#efefef;
	text-align:left;
}
p.error_messe{
	margin:5px 0;
	color:red;
}
/*　簡易版レスポンシブ用CSS（必要最低限のみとしています。ブレークポイントも含め自由に設定下さい）　*/
@media screen and (max-width:572px) {
#formWrap {
	width:95%;
	margin:0 auto;
}
table.formTable th, table.formTable td {
	width:auto;
	display:block;
}
table.formTable th {
	margin-top:5px;
	border-bottom:0;
}
form input[type="submit"], form input[type="reset"], form input[type="button"] {
	display:block;
	width:100%;
	height:40px;
}
}
</style>
</head>
<body>

<!-- ▲ Headerやその他コンテンツなど　※自由に編集可 ▲-->

<!-- ▼************ 送信内容表示部　※編集は自己責任で ************ ▼-->
<div id="formWrap">
<h3>確認画面</h3>
<p align="center">以下の内容で間違いがなければ、「送信する」ボタンを押してください。</p>
<form action="/2319WH0016/test/mail.php" method="POST">
<table class="formTable">
<tbody><tr><th>担当者名</th><td><input type="hidden" name="担当者名" value=""></td></tr>
<tr><th>電話番号</th><td><input type="hidden" name="電話番号" value=""></td></tr>
<tr><th>Email</th><td><input type="hidden" name="Email" value=""></td></tr>
<tr><th>その他</th><td><input type="hidden" name="その他" value=""></td></tr>
<input type="hidden" name="mailform_token" value="e114c1823e6b2746af16a68a0807faf7a35d7628"></tbody></table>
<p align="center"><input type="hidden" name="mail_set" value="confirm_submit">
<input type="hidden" name="httpReferer" value="http://web.nagoya-design.com/2319WH0016/test/contact.html">
<input type="submit" value="　送信する　">
<input type="button" value="前画面に戻る" onclick="history.back()"></p>
</form>
</div><!-- /formWrap -->
<!-- ▲ *********** 送信内容確認部　※編集は自己責任で ************ ▲-->

<!-- ▼ Footerその他コンテンツなど　※編集可 ▼-->


</body></html>