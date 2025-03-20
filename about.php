<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=	, initial-scale=1.0">
	<title>吳昕恩簡介</title>
	<style type="text/css">

* { font-family:"標楷體"; margin-left:auto; margin-right:auto;}

h1 {color:blue; font-size:45px;}

h2 {color:#33ff33; font-size:40px;}

</style>
<script>

function change1() {
document.getElementById("pic").src = "mountain.jpg";
document.getElementById("h1T").innerText = "資管導論";
document.getElementById("h2text").innerText = "靜宜資管";
}
function change2() {
document.getElementById("pic").src = "cliff.jpg";
document.getElementById("h1T").innerText = "";
document.getElementById("h2text").innerText = "Xin-En Wu";
}
</script>
</head>

<body>
<?php echo date("Y-m-d") ?>
    <table width="70%">
    	<tr>
        <td>
	<img src="cliff.jpg"width="110%"id="pic"
onmouseover="change1()" onmouseout="change2()"></img>
	</td>

	<td>
	<h1>吳昕恩</h1>
	<h2 id="h2text">Xin-En Wu</h2>
	</td>
	</tr>
	</table>

	<table width="70%" border="1">
		<tr>
			<td>
 	pu university網頁：<a href="https://www.pu.edu.tw/"target="_blank">https://www.pu.edu.tw</a><br>
    Tel: <a href="04-26328001#18110">04-26328001#18110</a><br>
    E-Mail:<a href="s1120329@o365st.pu.edu.tw">s1120329@o365st.pu.edu.tw</a><br>
    </td>

    <td>
    大象席地而坐電影配樂<br>
	<audio controls>
	<source src="elephant.mp3" type="audio/mP3">
	</audio><br>
	</td>
	<td>

	不要去臺灣<br>
	<iframe src="https://www.youtube.com/embed/pW88QFpHXa8" allowfullscreen></iframe>
	</td>
	</tr>

	<tr>
		<td>
			<iframe width="350" height="430" allow="microphone;" src="https://console.dialogflow.com/api-client/demo/embedded/614ae936-6aa9-4bbd-ad77-2dc5a345e08b"></iframe>
		</td>
	</tr>
</body>
</html>
