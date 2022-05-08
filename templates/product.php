<div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">新しいProductを作成する。</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form name="product_form_create" id="product_form_create">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="date" class="col-form-label">Date:</label>
                <input type="text" class="form-control" name="date" readonly value="<?php echo date('Y-m-d');?>">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Product Name:</label>
                <input type="text" class="form-control" name="product_name">
              </div>
            </div>

          </div>
          <div class="form-group">
            <label for="select_category" class="col-form-label">Category:</label>
            <select class="form-control" name="select_category" id="select_category">
            </select>
          </div>
          <div class="form-group">
            <label for="select_brand" class="col-form-label">Brand:</label>
            <select class="form-control" name="select_brand" id="select_brand">

            </select>

          </div>
          <div class="form-group">
            <label for="product_price" class="col-form-label">Product Price:</label>
            <input type="number" class="form-control" name="product_price">
          </div>
          <div class="form-group">
            <label for="quantity" name="quantity" class="col-form-label">Quantity:</label>
            <input type="text" class="form-control" id="quantity" name="quantity">
          </div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Back</button>
        <button type="submit" class="btn btn-outline-primary">Create</button>
      </div>
      </form>
    </div>
  </div>
</div>
