<!DOCTYPE html>
<html>

    <head>

        <title>Main page</title>
        <meta charset="UTF-8"/>

        <style>

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            .container {
                display: grid;
                grid-template-columns: 1fr 1fr 1fr;
                grid-template-rows: 64px 9fr;
            }

            .sub_container {
                display: grid;
                grid-template-columns: 1fr 1fr 1fr;
                grid-column-start: 1;
                grid-column-end: 4;
                grid-row-start: 2;
                grid-row-end: 3;
                grid-gap: 16px;
            }

            .header {
                background-color: black;
                grid-column-start: 1;
                grid-column-end: 4;
                grid-row-start: 1;
                grid-row-end: 2;
            }

            .all_products {
                font-size: 32px;
                color: white;
                grid-column-start: 1;
                grid-column-end: 2;
                grid-row-start: 1;
                grid-row-end: 2;
                display: flex;
                justify-content: center;
            }

            .categories {
                font-size: 32px;
                color: white;
                grid-column-start: 2;
                grid-column-end: 3;
                grid-row-start: 1;
                grid-row-end: 2;
                display: flex;
                justify-content: center;
            }

            .basket {
                font-size: 32px;
                color: white;
                grid-column-start: 3;
                grid-column-end: 4;
                grid-row-start: 1;
                grid-row-end: 2;
                display: flex;
                justify-content: center;
            }

        </style>

    </head>

    <body>

        <div class="container">

            <div class="header"></div>

            <a class="all_products" href="http://192.168.1.148/">
                Все товары
            </a>

            <a class="categories" href="http://192.168.1.148/">
                Категории
            </a>

            <a class="basket" href="http://192.168.1.148/">
                Корзина
            </a>

            <div class="sub_container">

                <?php
                    $json = file_get_contents("http://192.168.1.148/api/product");
                    $products = json_decode($json, true);

                    foreach ($products as $product) {
                        echo "<div>";

                        echo "<p>" . "Товар: " . $product["name"] . "</p>";
                        echo "<p>" . "Информация: ". $product["info"] . "</p>";

                        if ($product["count"] == null) {
                            echo "<p>" . "Под заказ." . "</p>";
                        }
                        else {
                            echo "<p>" . "Остаток: " . $product["count"] . "</p>";
                        }
                        
                        echo "</div>";
                    }
                ?>

            </div>

        </div>

    </body>

</html>
