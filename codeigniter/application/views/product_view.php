
<h1>
    <center>Product List</center>
</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Product Name</th>
            <th scope="col">Price</th>
            <th width="200">Action</th>
        </tr>
    </thead>
    <?php
        $count = 0;
        foreach ($product->result() as $row) :
        $count++;
    ?>
    <tr>
        <th scope="row"><?php echo $count;?></th>
        <td><?php echo $row->product_name;?></td>
        <td><?php echo number_format($row->product_price);?></td>
        <td>
            <a href="<?php echo site_url('product/get_edit/'.$row->product_id); ?>" class="btn btn-sm btn-info">Update
            <a href="<?php echo site_url('product/delete/'.$row->product_id); ?>" class="btn btn-sm btn-danger">Delete
        </td>
    </tr>
    <?php endforeach;?>
    </tbody>
</table>
