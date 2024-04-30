<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новости из мира</title>
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
        <h1 class="center">Новости из мира</h1>
        <section class="section">
            <h3 class="section__title">Бабушка у которой было 7 катов сканчалась</h3>
            <img src="logo/grandmather.jpg" alt="" class="section__img">
            <p class="section__text">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt, consequuntur. Atque et repellat
                corporis quidem. Vitae dicta pariatur maiores veniam sunt reprehenderit. Magnam architecto voluptas
                earum, consectetur accusantium neque! Vero.
                <br><br>
                <strong><a href="#open" class="block" onclick="show('block', 'Fpp-window')">читать
                        далее</a></strong>
            </p>
        </section>
        <section class="section">
            <h3 class="section__title">Блок нато передаст Украине новое вооружение</h3>
            <img src="logo/nato.jpg" alt="" class="section__img">
            <p class="section__text">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt, consequuntur. Atque et repellat
                corporis quidem. Vitae dicta pariatur maiores veniam sunt reprehenderit. Magnam architecto voluptas
                earum, consectetur accusantium neque! Vero.
                <br><br>
                <strong><a href="#open" class="block" onclick="show('block', 'Fpp-window')">читать
                        далее</a></strong>
            </p>
        </section>

        <section class="section">
            <h3 class="section__title">Затопление городов</h3>
            <img src="logo/potop.jpg" alt="" class="section__img">
            <p class="section__text">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt, consequuntur. Atque et repellat
                corporis quidem. Vitae dicta pariatur maiores veniam sunt reprehenderit. Magnam architecto voluptas
                earum, consectetur accusantium neque! Vero.
                <br><br>
                <strong><a href="#open" class="block" onclick="show('block', 'Fpp-window')">читать далее</a></strong>
            </p>
        </section>

        <section class="section">
            <h3 class="section__title">Октивный отдых очень важен</h3>
            <img src="logo/Природа.jpg" alt="" class="section__img">
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