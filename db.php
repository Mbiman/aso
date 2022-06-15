<?php
    require_once 'config.php';

    class Database extends Config{
        //insert form data into database
        public function addProduct($pn, $pp, $pd, $pi, $pf){
            $sql = 'INSERT INTO products (product_name, product_price, product_desc, product_image, project_file) VALUES (:product_name, :product_price, :product_desc, :product_image, :project_file)';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                'product_name'=>$pn,
                'product_price'=>$pp,
                'product_desc'=>$pd,
                'product_image'=>$pi,
                'project_file'=>$pf
            ]);
            return true;
        }
    }
?>
