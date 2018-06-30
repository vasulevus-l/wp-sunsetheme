<?php
    function sunsetheme_add_admin_menu(){   /*створюємо функцію для адмін-меню,*/
        add_menu_page(                      /*цей хук має декілька параметрів:*/
            "Sunset options",                   /*Тайтл в системі для цього меню*/
            "Sunset",                           /*Видима назва цього меню*/
            "manage_options",                   /*Права доступу користувача*/
            "sunset-theme-admin-menu",          /*slug*/
            "sunsetheme_create_page",           /*функція, котра використовується add_menu_page*/
            "dashicons-sos",                    /*іконка для меню*/
            110                                 /*Число, що контролює положенння адмін-меню всередині*/
            );
        add_submenu_page(                   /*хук по виведенню субменю*/
            'sunset_suboptions',                /*тайтл в системі для цього підменю*/
            'Sunsetheme Theme Options',         /*Назва цієї сторінки*/
            'General',                          /*Назва цього підменю*/
            'manage_options',                   /*Права доступу користувача*/
            'sunsetheme_general_theme',         /*slug*/
            'sunsetheme_create_page'            /*опціональна функція*/
            );
        add_submenu_page(                   /*хук по виведенню субменю*/
            'sunset_suboptions',                /*тайтл в системі для цього підменю*/
            'Sunsetheme CSS Options',           /*Назва цієї сторінки*/
            'Custom CSS',                       /*Назва цього підменю*/
            'manage_options',                   /*Права доступу користувача*/
            'sunsetheme_custom_css',            /*slug*/
            'sunsetheme_setting_page'           /*опціональна функція*/
            );
        }

    function sunsetheme_create_page(){
        require_once(                                                               /*Підключаємо файл лише один раз, у випадку, якщо його вже підключали - він не підключається*/
            get_template_directory() . '/inc/templates/sunsetheme-admin.php');      /*Підключаємо теку із шаблонами*/
    } 
    
    add_action(                         /*Хук "додаємо дію", котрій потребує а)дію, яку ми робимо, б) функцію, з якою ми будемо робити цю дію*/
            "admin_menu",                   /*Вбудована функція по підключенню адмін меню*/
            "sunsetheme_add_admin_menu"     /*підключаємо нашу створену функцію*/
    );

?>