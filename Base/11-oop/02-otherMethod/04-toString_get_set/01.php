<?php
/**
 * Created by PhpStorm.
 * User: Thanh Phan
 * Date: 2018-01-01
 * Time: 11:04 PM
 */

require_once  'Cat.class.php';
$cat = new Cat();
//echo $cat; Dùng toString
$cat->name = 'Nobita'; // dùng set
$cat->age = 1000;
echo $cat->age; // dùng get
//$cat->showInfo();

/*
 * __set() thiết lập các thuộc tính cho đối tượng dù nó chưa đc khai báo,
 *          hoặc gắn private vs protected
 *
 * __get() lấy giá trị các thuộc tính của đối tượng ...
 *   */