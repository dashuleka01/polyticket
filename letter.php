<?php
$to      = 'myfriend@mail.ru';
$subject = 'Ваш билет';
$message = '<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<style type="text/css">
		html, body{
	margin:0;
	padding:0;
	font-family: arial;
}

.left{
	float: left;
	width: 40%;
	height: 850px;
	margin: 10px;
	margin-left:20px;
	padding-right: 30px;
	border-right:dashed #ccc 2px;
	margin-right: 30px;
	margin-bottom:30px;
}

.right{
	margin: 10px;
}

.adress{
	float: left;
}

.event{
	color: rgb(49, 151, 116);
}

li{
	list-style: none;
	border-left: 10px;
	list-style-position: outside;
	font-size: 12pt;
}

p{
	font-size: 12pt;
}

img{
	margin-top: 20%;
}

h3{
	padding-bottom: 1px;
	margin-bottom: 1px;
	padding-top: 20px;
}

.pp{
	margin-top:1px;
	margin-bottom: 5px;
}

hr{
	margin-left:0px;
	margin-top: 50px;
	background-color: blue;
	height: 8px;
	border: none;
	margin-bottom: 60px;
}

.blank{
	margin-top: 30px;
	border-style: dotted;
	border-color: blue;
	border-width: 7px;
	padding-bottom: 5px;
	padding-top: 5px;
	padding-left: 50px;
	padding-right: 50px;
	margin-left: 45%;
	margin-right: 25%;
}

.leftdiv{
	width: 30%;
	float: left;
	text-align: right;
	color: gray;
	font-size: 10pt;
}

.rightdiv{
	margin-left : 35%;
	margin-bottom: 5%;
}

.adress{
	margin-top: 2px;
	font-size:10pt;
}

.metro{
	font-size: 9pt;
}

.centerp{
	margin-bottom: 10px;
	font-size: 8pt;
}

.divage{
	border-style: solid;
	border-width: 3px;
	border-radius: 500px;
	padding: 10px;
	width: 30px;
	height: 30px;
	float: left;
	margin-top: 150px;
}

.page{
	font-size: 16pt;
	font-weight: 600;
	margin: 0px;
}

.divimg{
	float: right;
	margin-right: 30%;
}

.divbottom{
	margin-top: 50px;
	height: 200px;
}

	</style>
	</head>
	<body>
	<div>
		<div class = "left">
			<div>
				<div id="output">
					<h1>*Название Мероприятия*<h1>
					<hr noshade>
				</div>	
				<div>
					 <p><div class="leftdiv">Место: </div>
					 <div class="rightdiv">*НазваниеКлуб*<br>
					 <font class="adress">*Адрес*</font><br>
					 <font class="metro">*БлижСтМетро*</font></div></p>
					 
				</div>
				<div>
					<p><div class="leftdiv">Дата и Время: </div>
					 <div class="rightdiv">*ДД.ММ.ГГГГ ЧЧ:ММ*</div></p>
				</div>
				<div>
					<p><div class="leftdiv">Стоимость: </div>
					 <div class="rightdiv">х руб</div></p>
				</div>
				<div>
					<p><div class="leftdiv">Категория: </div>
					 <div class="rightdiv">"Стандарт/VIP/Anything"</div></p>
				</div>
				<div class="rightdiv">
					<p class="centerp">Электронный билет</p>
					<p class="centerp">Номер: <br>Дата покупки: <br>Выпущен на polytickets.ru</p>
				</div>
				<div class="divbottom">
					<div class="divage"><p class="page">18+</p></div>
					<div class="divimg"><img src="qr.png" width = 180 height= 180></div>
				</div>
			
			</div>		
		</div>
		<div class = "right">
			<h2>Информация</h2>
			<p>Данный документ является билетом и предоставляет право на посещение
мероприятия. Билет действителен на одно лицо независимо от возраста,
если обратное не указано в названии или описании категории билета, и его
необходимо предъявить на входе. Копировать и перепродавать билет
запрещено. Сохраняйте в целостности все штрихкоды на билете. Не
выкладывайте фото билета в социальные сети и не публикуйте в интернете!
Злоумышленники могут скопировать билет и попасть на мероприятие вместо
вас. Организатор не несет ответственности за поддельные билеты и билеты,
приобретенные в неустановленных местах. Использование билета
подразумевает согласие с установленными правилами организатора. В
случае утери билета вы можете снова скачать его из письма полученного
после покупки или запросить у службы поддержки.</p>
			<p>Участники мероприятия обязаны:
			<ul>
				<li>- соблюдать правила поведения в общественных местах;</li>
				<li>- занимать места согласно купленному билету;</li>
				<li>- сохранять билет до конца мероприятия и предъявлять по требованию
администрации и сотрудников службы охраны.</li></p>
			</ul>
			<p>Участникам запрещается:
			<ul>
				<li>– проходить на мероприятие с огнестрельным, газовым или холодным
оружием, пиротехникой всех видов, легковоспламеняющимися жидкостями,
крупногабаритными предметами;</li>
				<li>– производить видеосъемку на протяжении всего мероприятия.</li></p>
			<p>Участник, нарушающий вышеуказанные положения, обязан покинуть место
проведения, при этом компенсация стоимости билета не производится.</p>
			<h3>Поддержка покупателей</h3>
			<p class = "pp">support@polytickets.ru</p>
			<p class="blank">Предъявите данный бланк на входе</p>
			<h3>Организатор</h3>
			<p class = "pp">*ФИО_ОРГАНИЗАТОРА*</p>
			<p class = "pp">*почта орга для связи</p>
		</div>
	</div>
	</body>
</html>';

mail($to, $subject, $message);
?>
