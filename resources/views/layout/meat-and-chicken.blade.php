<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <link media="all" type="text/css" rel="stylesheet" href="/includes/css/bootstrap-datepicker3.min.css">
    <meta charset="UTF-8">
    <title>Мясо и курица</title>
    <link rel="stylesheet" type="text/css" href="/includes/css/main.css">
</head>
<body>
<div class="container">
    <div class="category-head">
        <a href="/customer/categories.html"><h3 class="bread-crumbs-link">Категории</h3></a>
        <div class="bread-crumbs-circle"></div>
        <h3 class="bread-crumbs-on-page">Мясо и курица</h3>
    </div>
    <div class="category-all">
        <div class="category-item">
            <div class="category-item__img">
                <img src="/images/meatorchicken/beef.jpg" width="190"> <!-- Все изображения будут одного размера, здесь в примере 170x170 -->
                <div class="category-item__name"> Говядина </div>
                <div class="category-item__price-measure">
                    <span>800 ₽ / кг.</span>
                    <div class="order-table__cell">
                        <div class="b-number">
                            <div class="order-number">
                                <div class="order-number__field">
                                    <input type="number" max="99" min="0" value="0" class="order-number-inp" data-product-id="1">
                                </div>
                                <div class="order-number__spin minus order-spin-minus"></div>
                                <div class="order-number__spin plus order-spin-plus"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="add-to-cart-button">
                    <p>Добавить в корзину</p>
                </div>
            </div>
        </div>
        <div class="category-item">
            <div class="category-item__img">
                <img src="/images/meatorchicken/pork.jpg" width="190">
                <div class="category-item__name"> Свинина </div>
                <div class="category-item__price-measure">
                    <span>650 ₽ / кг.</span>
                    <div class="order-table__cell">
                        <div class="b-number">
                            <div class="order-number">
                                <div class="order-number__field">
                                    <input type="number" max="99" min="0" value="0" class="order-number-inp" data-product-id="2">
                                </div>
                                <div class="order-number__spin minus order-spin-minus"></div>
                                <div class="order-number__spin plus order-spin-plus"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="add-to-cart-button">
                    <p>Добавить в корзину</p>
                </div>
            </div>
        </div>
        <div class="category-item">
            <div class="category-item__img">
                <img src="/images/meatorchicken/veal.jpg" width="190">
                <div class="category-item__name"> Телятина </div>
                <div class="category-item__price-measure">
                    <span>545 ₽ / шт.</span>
                    <div class="order-table__cell">
                        <div class="b-number">
                            <div class="order-number">
                                <div class="order-number__field">
                                    <input type="number" max="99" min="0" value="0" class="order-number-inp" data-product-id="3">
                                </div>
                                <div class="order-number__spin minus"></div>
                                <div class="order-number__spin plus"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="add-to-cart-button">
                    <p>Добавить в корзину</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script src="/includes/js/libs/bootstrap-datepicker.min.js"></script>
<script src="/includes/js/libs/jquery.maskedinput.min.js"></script>
<script src="/includes/js/libs/bootstrap-datepicker.ru.min.js"></script>
<script src="/includes/js/classes.js"></script>
<script src="/includes/js/main.js"></script>
<script src="/includes/js/function.js"></script>
</html>