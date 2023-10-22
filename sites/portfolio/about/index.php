<!DOCTYPE html>
<html lang="rus">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Обо мне</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:regular,500,600,700,800,900&display=swap" rel="stylesheet" />
</head>

<body class="body">

	<div class="body__wrap">
		
		<header>
			<h1 class="h1">Обо мне</h1>
			<div class="father">
				<div class="side1 bok"></div>
				<div class="side2 bok"></div>
				<div class="side3 bok"></div>
				<div class="side4 bok"></div>
				<div class="down"></div>
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
			<p>Меня зовут Лой Александр Михайлович! Люблю заниматься версткой, вебом, сайтами. Сюда же входит и программирование js, php и прочее.</p>
			<br>
			<a href="#" class="profile__photo__link"><img src="img/11123.jpg" alt="" class="profile__photo"></a>
			<p>
				Имею высшее образование в строительстве. Вообще, нравится работать с пространственными элементами, будь то графика, перспектива, чертежи. Отсюда и желание работать в вебе с векторной графикой, 3д и прочими вещами.
				К этому занятию пришел, пройдя долгий путь в любительской разработке, создавая проекты и сайты на народ.ру, юкоз и блогспот. Будучи мастером и инженером-конструктором, параллельно с основной работой, занимался созданием корпоративных сайтов, их обновлением и продвижением.	
			</p>
			<br>
			<p>Люблю заниматься рутинной и интересной работой, ставить цели и выполнять их в срок.</p>
			<br>

			<div class="technolog">
			<p><strong>Технологии</strong></p>
			<br>
			<ol class="technolog__list">
			<li>HTML, CSS, Javascript (ES6, ES7).</li>
			<li>Работаю с Wordpress, UCOZ, блогспот.</li>
			<li>Имею опыт создания сайтов на cPanel.</li>
			<li>Адаптивные сайты по шаблонам PSD, Figma.</li>
			<li>БЭМ.</li>
			<li>Люблю работать с графикой, картинками в SVG, знаю основы дизайна и разработки сайтов.</li>
			<li>Работаю с Github, с событиями js, конструктором. Немного в React js и PHP.</li>
			<li>Работаю в препроцессорах SASS/SCSS.</li>
			<li>Знаю и люблю CSS. Работаю с анимацией, трансформацией и прочими вещами. Знаю как ранжируются элементы на странице, могу уменьшить скорость загрузки сайта.</li>
			<li>Работаю с контекстом наложения, могу сделать 3д элементы на чистом CSS.</li>
			<li>Дополнительно изучил CAD-системы, такие как KOMPAS, Autocad, Inventor, которые помогут в создании SVG-изображений.</li>
			</ol>
			</div>

			<br>
			<p>Люблю работать с переменными, параметризацией. Умею создавать качественные резиновые сайты для различных устройств.</p>
			<br>
			<p>
				Вдобавок ко всему вышеописанному имею многолетний опыт в SEO-продвижении проектов, который поможет раскрутить ресурс в интернете с минимальным или нулевым бюджетом. Благодарю за внимание.
			</p>
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