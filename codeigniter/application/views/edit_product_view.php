
<h1>
    <center>Edit Product</center>
</h1>
<div class="col-md-6 offset-md-3">
    <form action="<?php echo site_url('product/update');?>" method="post">
        <div class="form-group">
            <label>Product Name</label>
            <input type="text" class="form-control" name="product_name" value="<?php echo $product_name;?>"placeholder="Product Name">
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" name="product_price" value="<?php echo $product_price;?>"placeholder="Price">
        </div>
        <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

