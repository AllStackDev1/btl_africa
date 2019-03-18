<div id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-12">
          <h1 class="page-header">
              Add Image <small>Add project images here</small>
          </h1>
      </div>
    </div>
      <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                      <?php displayMessage(); ?>
                        <form role="form" action="/admin/addImage.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Select Category</label>
                                <select class="form-control" name="category">
                                    <option value="branding">BRANDING</option>
                                    <option value="activations">ACTIVATIONS</option>
                                    <option value="design">DESIGNING</option>
                                    <option value="events">EVENTS</option>
                                </select>
                            </div>
                            <div class="form-group">
                              <label>Title</label>
                              <input type="text" class="form-control" name="title" placeholder="Title" required />
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="3" name="description" placeholder="Add a description about this image" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Images - accept png/jpeg</label>
                                <input type="file" name="file_array[]"  multiple="multiple"  class="form-control" accept="image/x-png,image/jpeg" required />
                            </div>
                            <button type="submit" class="btn btn-default" name="addImage">Submit Button</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
  </div>
</div>
