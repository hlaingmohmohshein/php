<!-- Modal -->
<div class="modal fade" id="ModelCategory"  data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="categoryModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="categoryModalLabel">新しいCategoryを作成する。</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- <form id="add_category_form" onsubmit="return false">
                    <div class="form-group">
                        <label for="category_name">Category Name</label>
                        <input type="text" name="category_name" class="form-control" id="category_name" placeholder="Enter category">
                        <small id="cat_error" class="form-text text-muted"></small>
                    </div>
                    <button type="submit" name="add_submit" class="btn btn-primary">Add</button>
                </form> -->
                <form id="category_form_create" onsubmit="return false">
                    <div class="form-group">
                        <label for="category_name">Category 名前</label>
                        <input type="text" name="category_name" id="category_name" class="form-control" placeholder="Enter category">
                        <small id="cat_error" class="form-text text-muted"></small>
                        <button type="submit" class="btn btn-primary">作成</button>

                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                </div>

            </div>
        </div>
    </div>