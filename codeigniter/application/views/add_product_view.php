
<h1>
    <center>Add New Product</center>
</h1>
<div class="col-md-6 offset-md-3">
    <form action="<?php echo site_url('product/save');?>" method="post">
        <div class="form-group">
            <label>Product Name</label>
            <input type="text" class="form-control" name="product_name" placeholder="Product Name">
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" name="product_price" placeholder="Price">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


