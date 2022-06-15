<?php
require_once 'db.php';
require_once 'util.php';

$db = new Database;
$util = new Util;

    //handle add new product ajax request
    if(isset($_POST['add_product_form_submit'])){
        $product_name = $util->testInput($_POST['product_name']);
        $product_price = $util->testInput($_POST['product_price']);
        $product_desc = $util->testInput($_POST['product_desc']);

        $product_image_name = $_FILES['product_image']['name'];
        $product_image_temp = $_FILES['product_image']['tmp_name'];

        $project_file_name = $_FILES['project_file']['name'];
        $project_file_temp = $_FILES['project_file']['tmp_name'];

        $product_image_ext = explode('.', $product_image_name);
        $product_image_ext = strtolower(end($product_image_ext));

        $project_file_ext = explode('.', $project_file_name);
        $project_file_ext = strtolower(end($project_file_ext));

        $upload_dir = 'uploads/';
        $image_name = uniqid(). '.' . $product_image_ext;
        $product_image_upload_dest = $upload_dir.'image/' .$image_name;

        $project_name = uniqid().'.' . $project_file_ext;
        $project_file_upload_dest = $upload_dir . 'files/' . $project_name;

        if ($db->addProduct($product_name, $product_price, $product_desc, $image_name, $project_name)) {
            move_uploaded_file($product_image_temp, $product_image_upload_dest);
            move_uploaded_file($project_file_temp, $project_file_upload_dest);

            echo $util->showMessage('success', 'Product added succesfully!');
        } else{
            echo $util->showMessage('danger', 'something went wrong!');
        }
    }
?>