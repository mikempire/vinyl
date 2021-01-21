<?php

return array(
    'thisMonths'=>'thisMonths/index',
    'journal'=>'journal/index',
    'shop'=>'shop/index',
    'enter'=>'enter/index',

    'product/([0-9]+)' =>'product/view/$1', //actionView in ProductController
    'article/([0-9]+)' =>'article/view/$1',

    'register'=> 'register/index',
    'cabinet/exit'=> 'cabinet/exit',
    'cabinet/edit'=> 'cabinet/edit',//actionEdit in CabinetController
    'cabinet'=> 'cabinet/index',

    'cart/addAjax/([0-9]+)'=>'cart/addAjax/$1', //actionAddAjax in CartController
    'cart/delete/([0-9]+)'=>'cart/delete/$1', //actionDelete in CartController

    'cart/checkout'=> 'cart/checkout',
    'cart'=> 'cart/index',
    'blog'=>'blog/index',//actionIndex in CartController
    '' => 'site/index', //actionIndex in SiteController ДОЛЖЕН БЫТЬ В САМОМ НИЗУ

);

