<?php require_once 'header.php' ?>
<?php require_once 'nav.php' ?>

<div class="container">
    <div class="breadcrumbs">
        <ul class="breadcrumbs__list">
            <li class="breadcrumbs__item">
                <a href="" class="breadcrumbs__item-link">
                    Главная
                </a>
            </li>

            <li class="breadcrumbs__item">
                <a href="" class="breadcrumbs__item-link">
                    Контакты
                </a>
            </li>
        </ul>
    </div>
</div> <!--./container-->

<section class="contact">
    <div class="container">
        <h2 class="contact__title">
            Свяжитесь с нами, и мы с радостью поможем вам
        </h2>

        <div class="contact__content">
            <div class="contact__form">
                <form action="#" class="form">
                    <div class="label label__name">
                        <input class="input" type="text" placeholder="Имя">
                    </div>

                    <div class="label label__phone">
                        <input class="input" type="text" placeholder="Номер телефона">
                    </div>

                    <div class="label label__massege">
                        <input class="input" type="text" placeholder="Сообщение">
                    </div>

                    <button class="btn" type="submit">Отправить сообщение</button>
                </form>
            </div> <!--./contact__form-->

            <div class="feedback">
                <ul class="contacts">
                    <li class="contacts__item">
                        <a class="phone" href="#">(375)298-88-67-67</a>
                    </li>
                    <li class="contacts__item">
                        <a class="mail" href="#">example@mail.ru</a>
                    </li>
                    <li class="contacts__item">
                        <a class="instagram" href="#">@vetervvolosah</a>
                    </li>
                </ul>
            </div> 

        </div> <!--./contact__content-->

    </div> <!--./container-->


</section>






<?php require_once 'footer.php' ?>