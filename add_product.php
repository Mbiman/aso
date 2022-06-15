<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />

</head>
<body class="bg-dark">
  
<div class="container">
    <div class="row mt-5">
        <div class="col-lg-6 mx-auto">
            <div class="card shadow">
                <div class="card-header">
                    <h3>Add Product</h3>
                </div>
                <div class="card-body">
                    <div id="alert_message"></div>
                    <form action="#" method="POST" enctype="multipart/form-data" id="add_product_form" novalidate>
                    
                        <div class="form-group">
                            <input type="text" name="product_name" class="form-control" placeholder="Product Name" required>
                            <div class="invalid-feedback">Product name is required!</div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="product_price" class="form-control" placeholder="Product Price" required>
                            <div class="invalid-feedback">Product Price is required!</div>
                        </div>
                        <div class="form-group">
                            <textarea name="product_desc" class="form-control" placeholder="Product description" required></textarea>
                            <div class="invalid-feedback">Product Description is required!</div>
                        </div>
                        <div class="form-group">
                            <label for="product_image">Select Product Image</label> <br>
                            <input type="file" name="product_image" required>
                            <div class="invalid-feedback">Product Image is required!</div>
                        </div>
                        <div class="form-group">
                            <label for="product_file">Select Project Files</label> <br>
                            <input type="file" name="project_file" id="project_file">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Add Product" class="btn btn-primary btn-block" id="add_product_btn">
                        </div>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js" integrity="sha512-wV7Yj1alIZDqZFCUQJy85VN+qvEIly93fIQAN7iqDFCPEucLCeNFz4r35FCo9s6WrpdDQPi80xbljXB8Bjtvcg==" crossorigin="anonymous"></script>
<script>
    $(function(){
        $("#add_product_form").submit(function(e){
            e.preventDefault();
            const formData = new FormData(this);
            formData.append("add_product_form_submit", 1);

            if (this.checkValidity() === false){
                e.preventDefault();
                e.stopPropagation();
                $(this).addClass("was-validated");
            }else{
                $("#add_product_btn").val("please wait...");
                $.ajax({
                    url: "action.php",
                    method: "post",
                    data: formData,
                    cache: false,
                    contentType: false, 
                    processData: false,
                    success:function(response){
                        $("#alert_message").html(response);
                        $("#add_product_form")[0].reset();
                        $("#add_product_btn").val("Add Product");
                        $("#add_product_form").removeClass("was-validated");
                    },
                });
            }
        });
    });
</script>
</body>
</html>