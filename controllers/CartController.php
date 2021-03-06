<?php

 class CartController
{
    public function actionAddAjax($id)
    {
        echo Cart::addProduct($id);
        return true;
    }

    public static function actionIndex()
    {
        $productsInCart = false;

        // Получаем данные из корзины
        $productsInCart = Cart::getProducts();

        if ($productsInCart) {
            // получаем полную информацию о товрарах из списка
            $productsIds = array_keys($productsInCart);

            $products = Product::getProductsByIds($productsIds);

            // получаем общую стоиомость товаров
            $totalPrice = Cart::getTotalPrice($products);
        }

        require_once (ROOT.'/views/cart/index.php');
        return true;
    }

    public function actionDelete($id)
    {
        Cart::deleteProduct($id);

        header("Location: /cart");
    }

     public function actionCheckout()
     {
         // Получием данные из корзины
         $productsInCart = Cart::getProducts();

         // Если товаров нет, отправляем пользователи искать товары на главную
         if ($productsInCart == false) {
             header("Location: /");
         }

         // Находим общую стоимость
         $productsIds = array_keys($productsInCart);
         $products = Product::getProductsByIds($productsIds);
         $totalPrice = Cart::getTotalPrice($products);

         // Количество товаров
         $totalQuantity = Cart::countItem();

         // Поля для формы
         $userName = false;
         $userPhone = false;
         $userComment = false;

         // Статус успешного оформления заказа
         $result = false;

         // Проверяем является ли пользователь гостем
         if (!User::isGuest()) {
             // Если пользователь не гость
             // Получаем информацию о пользователе из БД
             $userId = User::checkLogged();
             $user = User::getUserById($userId);
             $userName = $user['name'];
         } else {
             // Если гость, поля формы останутся пустыми
             $userId = 0;
         }

         // Обработка формы
         if (isset($_POST['submit'])) {
             // Если форма отправлена
             // Получаем данные из формы
             $userName = $_POST['userName'];
             $userPhone = $_POST['userPhone'];
             $userComment = $_POST['userComment'];

             // Флаг ошибок
             $errors = false;

             // Валидация полей
             if (!User::checkName($userName)) {
                 $errors[] = 'Неправильное имя';
             }
             if (!User::checkPhone($userPhone)) {
                 $errors[] = 'Неправильный телефон';
             }


             if ($errors == false) {
                 // Если ошибок нет
                 // Сохраняем заказ в базе данных
                 $result = Order::save($userName, $userPhone, $userComment, $userId, $productsInCart); //булеан

                 if ($result) {
                     // Если заказ успешно сохранен
                     // Оповещаем администратора о новом заказе по почте
                     $adminEmail = 'php.start@mail.ru';
                     $message = '<a href="http://digital-mafia.net/admin/orders">Список заказов</a>';
                     $subject = 'Новый заказ!';
                     mail($adminEmail, $subject, $message);

                     // Очищаем корзину
                     Cart::clear();
                 }
             }
         }

         // Подключаем вид
         require_once(ROOT . '/views/cart/checkout.php');
         return true;
     }
}