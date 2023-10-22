<!DOCTYPE html>
<html lang="rus">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Портфолио</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:regular,500,600,700,800,900&display=swap" rel="stylesheet" />
</head>

<body class="body">

	<div class="body__wrap">
		
		<header>
			<h1 class="h1">Контакты</h1>
			<div class="letter__father">
				<div class="letter side1"></div>
				<div class="letter side2"></div>
				<div class="letter side3"></div>
				<div class="letter side4"></div>
				<div class="letter side5"></div>
			</div>
			<nav class="nav__menu">
				<ul class="nav__list">
				<li class="nav__items"><a class="nav__link" href="\">Примеры работ</a></li>
					<li class="nav__items"><a class="nav__link" href="\contacts">Контакты</a></li>
					<li class="nav__items"><a class="nav__link" href="\about">Обо мне</a></li>
				</ul>
				<div class="header__burger">
					<span></span>
				</div>
			</nav>
		</header>

		<div class="main__list">
			
			<div class="technolog">
			<ol class="technolog__list">
			<li>Почта: <br><b class="technolog__list__mail"><a href="mailto:alex--father@mail.ru">alex--father@mail.ru</a></b></li>
			<li>Телефон: <br><b class="technolog__list__phone"><a href="tel:+375298768953">+375 (29) 876-89-53 (мтс)</a></b></li>
			<li>Социальные сети:<ul class="social__list">
				<li><a class="technolog__list__social" href="https://www.facebook.com/aleksandr.loi" target="_blank">Фейсбук</a></li>
				<li><a class="technolog__list__social" href="https://www.instagram.com/alex_loi121/" target="_blank">Инстаграм</a></li>
			</ul>
		</li>
			</ol>
			</div>

			<br>
		</div>
	</div>

<script>
	let burger = document.getElementsByClassName('header__burger')[0];
	let nav__list = document.getElementsByClassName('nav__list')[0];
	let body = document.getElementsByTagName('body')[0];

	burger.addEventListener('click', function(){
            burger.classList.toggle('active');
			nav__list.classList.toggle('active');
        })

	body.addEventListener('click', function(evt){
		if(evt.target != burger && burger.classList.contains('active')){
			burger.classList.remove('active');
			nav__list.classList.remove('active');
		};
        })


</script>

</body>

</html>