<?php include ROOT.'/views/layouts/header.php'?>
    <link rel="stylesheet" href="/template/css/cabinet.css">
    <section>
        <div class="intros">
            <div class="popup_wrapper" id="intro">
                <div class="popup2">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Корзина</h2>
                        <?php if ($productsInCart): ?>
                            <p>Вы выбрали товары</p>
                            <table class="table-bordered table-striped table">
                                <tr>
                                    <th>Название</th>
                                    <th>Стоимость, долл.</th>
                                    <th>Количество, шт</th>
                                    <th>Удалить</th>
                                </tr>
                                <?php foreach ($products as $product): ?>
                                    <tr>
                                        <td>
                                            <a href="/product/<?php echo $product['id']; ?>">
                                                <?php echo $product['author']; ?> - <?php echo $product['title']; ?>
                                            </a>
                                        </td>
                                        <td><?php echo $product['price']; ?></td>
                                        <td><?php echo $productsInCart[$product['id']]; ?></td>
                                        <td href="" class="">
                                            <a href="cart/delete/<?php echo $product['id']?>" class="" >
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                <tr>
                                    <td colspan="3">Общая стоимость</td>
                                    <td><?php echo $totalPrice; ?> долл.</td>
                                </tr>
                            </table>                                                <!-- закрытие тега  table   -->

                            <a href="/cart/checkout">Оформить заказ</a>
                        <?php else: ?>
                            <p>Корзина пуста</p>
                        <?php  endif;?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include ROOT.'/views/layouts/footer.php'?><?php
