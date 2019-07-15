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
                    Коризина 
                </a>
            </li>
        </ul>
    </div>
</div>

<section class="trash">
    <div class="container">    
        <div class="trash__top">
            <p class="trash__product">
                Продукты
            </p>

            <div class="trash__right">
                <p class="trash__money">
                    Цена
                </p>
                <p class="trash__quantity">
                    Количество
                </p>
                <p class="trash__total">
                    Стоимость
                </p>

            </div>
        </div> <!--./trash__top-->


        <div class="trash__list">
            <div class="trash__item">
                <div class="trash__img">
                    <img src="build/images/Urbantribe.jpg" alt="#">
                </div>

                <div class="trash__descr">

                        <p class="trash__title">
                            Urban Tribe 04.1 Helix
                        </p>
                        <p class="trash__text">
                            Моделирующий гель для естественных кудрей
                        </p>
                </div>

                <p class="trash__price">
                    39 BYN
                </p>

                <div class="trash__control">
                    <button class="next"><</button>
                    <input type="text">
                    <button class="prev">></button>
                </div>

                <p class="trash__price">39 BYN</p>

                <button class="close">закрыть</button>

                



            </div>
        </div>
    </div> <!--./container -->
</section>



<?php require_once 'footer.php' ?>