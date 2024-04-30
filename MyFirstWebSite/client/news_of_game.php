<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новости про Игры</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrapper__menu">
        <a href="../home.php">Главная страница</a>
        <a href="news_of_game.php">Новости из мира игр</a>
        <a href="news_of_world.php">Новости из всего мира</a>
        <a href="../server/Sing_in/Sing__in.php">Вход</a>
        <a href="../server/Sing_up/Sing__up.php">Регистрация</a>
    </div><br>
    <nav class="wrapper__senter">
        <h2 class="center">Новости про Игры</h2>
        <section class="section">
            <h3 class="section__title">B cyberpunk2077 исправили все баги</h3>
            <img src="logo/cyberpunk2077.jpeg" alt="" class="section__img">
            <p class="section__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, id? Distinctio
                nihil dicta quia voluptatum omnis officiis porro natus voluptate quae nesciunt? Repellendus
                distinctio voluptates quasi unde sint quas molestiae doloremque ut recusandae praesentium, quod
                excepturi sequi facilis officiis ea, accusantium veniam, non vero. Quaerat ex consequuntur
                inventore, debitis corrupti tenetur ducimus molestias libero cupiditate placeat sapiente
                perferendis. Modi repellendus voluptatibus placeat vero a eius dignissimos hic quod sint, illum
                delectus autem quis perferendis quaerat ipsa assumenda eaque sunt voluptatum. Autem voluptatem
                reiciendis quae odio, distinctio quibusdam neque consectetur porro, expedita, praesentium facilis
                consequatur temporibus eos tempora doloribus hic placeat! <br><br>
                <strong><a href="#open" class="block" onclick="show('block', 'Fpp-window')">читать далее</a></strong>
            </p>
        </section>

        <section class="section">
            <h3 class="section__title">В знаменитой ГТА 5 появились новые фишки</h3>
            <img src="logo/gta5.png" alt="" class="section__img">
            <p class="section__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, id? Distinctio
                nihil dicta quia voluptatum omnis officiis porro natus voluptate quae nesciunt? Repellendus
                distinctio voluptates quasi unde sint quas molestiae doloremque ut recusandae praesentium, quod
                excepturi sequi facilis officiis ea, accusantium veniam, non vero. Quaerat ex consequuntur
                inventore, debitis corrupti tenetur ducimus molestias libero cupiditate placeat sapiente
                perferendis. Modi repellendus voluptatibus placeat vero a eius dignissimos hic quod sint, illum
                delectus autem quis perferendis quaerat ipsa assumenda eaque sunt voluptatum. Autem voluptatem
                reiciendis quae odio, distinctio quibusdam neque consectetur porro, expedita, praesentium facilis
                consequatur temporibus eos tempora doloribus hic placeat! <br><br>
                <strong><a href="#open" class="block" onclick="show('block', 'Fpp-window')">читать далее</a></strong>
            </p>
        </section>

        <section class="section">
            <h3 class="section__title">Майнкрафт заявляет что будет самое маштабное обновление за всю историю игры</h3>
            <img src="logo/minecraft.jpg" alt="" class="section__img">
            <p class="section__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, id? Distinctio
                nihil dicta quia voluptatum omnis officiis porro natus voluptate quae nesciunt? Repellendus
                distinctio voluptates quasi unde sint quas molestiae doloremque ut recusandae praesentium, quod
                excepturi sequi facilis officiis ea, accusantium veniam, non vero. Quaerat ex consequuntur
                inventore, debitis corrupti tenetur ducimus molestias libero cupiditate placeat sapiente
                perferendis. Modi repellendus voluptatibus placeat vero a eius dignissimos hic quod sint, illum
                delectus autem quis perferendis quaerat ipsa assumenda eaque sunt voluptatum. Autem voluptatem
                reiciendis quae odio, distinctio quibusdam neque consectetur porro, expedita, praesentium facilis
                consequatur temporibus eos tempora doloribus hic placeat! <br><br>
                <strong><a href="#open" class="block" onclick="show('block', 'Fpp-window')">читать далее</a></strong>
            </p>
        </section>
    </nav>


    <div onclick="show('none')" id="Fpp-background">
        <div id="Fpp-window" class="Fpp-window">
            <div class="popup__list" id="popuplist">
                <div class="popup__body">
                    <div class="popup__content">
                        <a href="#" onclick="show('none', 'Fpp-window')" class="popup__close">X</a>
                        <div class="popup__title">Внимание!</div>
                        <div class="popup__text">Просьба войти на сайт под своим именем или зарегестрироваться</div><br>
                        <strong><a href="http://mywebsite/server/Sing_in/Sing__in.php" class="center popup">Вход/Регистрация</a></strong>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="script_for_popup.js"></script>
</body>

</html>