<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="keywords" content="вирява эрзя мордва масторава стихи переводы поэмы " />
    <meta name="description" content="описание сайта" />
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="img/icon.ico" rel="shortcut icon" type="image/x-icon" />
    <title>РАВ</title>
</head>
<body>
    <div id="frame">
        <div class="mainborder" id="leftborder"></div>
        <div class="mainborder" id="rightborder"></div>
    </div>
    <header>
        <a id="logo" href="index.php" title="перейти на главную станицу">
            <span>РАВ</span>
        </a>
        <div class="options padding_block" id="user">
            <a class="transformscale" id="adddocument">
                <span>Создать</span>
                <img class="navicon" src="img/adddocument.svg" alt="Создать">
            </a>
        </div>
        <div class="options padding_block" id="main">
            <a class="transformscale" id="search">
                <span>Поиск</span>
                <img class="navicon" src="img/iconsearch.svg" alt="Поиск"> 
            <a class="transformscale" id="enterinprofile">
                <span>Вход</span>
                <img class="navicon" src="img/iconenterprofile.svg" alt="Вход в личный кабинет">
            </a>
        </div>
    </header>
    <nav>
        <ul>
            <li id="menustart"><a class="menu headline_a">Эпос Масторава</a></li>
            <li><a class="menu headline_a">Корнеслов</a></li>
            <li><a class="menu headline_a">История</a></li>
            <li><a class="menu headline_a">Археология</a></li>
            <li><a class="menu headline_a">Этнография Традиции Обряды</a></li>
            <li><a class="menu headline_a">Нацинальные костюмы</a></li>
            <li><a class="menu headline_a">Прикладное искусство</a></li>
            <li><a class="menu headline_a">Изобразительное искусство</a></li>
            <li><a class="menu headline_a">Литература</a></li>
            <li id="menuend"><a class="menu headline_a">Конкурсы</a></li> 
        </ul>
        <input type="image" id="showmenu" src="img/tongue.svg" alt="Меню">
    </nav>
    <main class="grid_row_gap">
        <section class="mainblock6 grid_row_gap">
            <h2 class="headline_section">Вход в личный кабинет</h2>
            <div class="block border padding_block7_5 enterprofile">
                <div>
                    <p class="margin025 text_description">Войти через:</p>
                    <a class="margin025"><img class="social_network" alt="Google" src="img/social/Google.png"></a>
                    <a class="margin025"><img class="social_network" alt="В Контакте" src="img/social/VK.png"></a>
                    <a class="margin025"><img class="social_network" alt="Facebook" src="img/social/Facebook.png"></a>
                <p class="margin025 text_description">или:</p>
                <div class="enterprofileinput">
                    <form  class="margin025 grid_gap05">
                    <div>
                        <label class="text_description_bold" for="login ">Логин</label>
                        <input id="login" type="text">
                    </div>
                    <div>
                        <label class="text_description_bold" for="password">Пароль</label>
                        <input id="password" type="password">
                    </div>
                    <input class="button text_description_bold" type="submit" value="Вход">
                    </form>
                </div>
            </div>
        </section>
        <section class="mainblock6 grid_row_gap">
            <h2 class="headline_section">Зарегистрироватся</h2>
            <form class="block border padding_block registrationprofile grid_gap05">
                <img class="imguser" src="users\img\avatars\defaultuser.jpg">
                <div class="grid_gap05 text_description_bold">
                    <h3 class="grid_gap05 text_description_bold">Информация о пользователе</h3>
                    <label class="text_description_bold_red" for="reglogin">Логин</label>
                    <input it="reglogin" type="text">
                    <label class="text_description_bold_red" for="regname">Имя</label>
                    <input if="regname" type="text">
                    <label class="text_description_bold_red" for="regsurname">Фамилия</label>
                    <input id="regsurname" type="text">
                    <label for="regpatronymic">Отчество</label>
                    <input id="regpatronymic" type="text">
                    <label for="regcity">Город</label>
                    <input id="regcity" type="text">
                    <label class="text_description_bold_red" for="regemail">Email</label>
                    <input id="regemail" type="text">
                    </br>
                    </br>
                    </br>
                </div>
                <input class="button text_description_bold" id="regavatar" type="button" value="Изменить аватар">
                <input class="button text_description_bold" type="submit" value="Зарегистрироватся">

            </form>
        </section>
       
    </main>
    <footer>
        <a>Написать нам!</a>
    </footer>
</body>
</html>
