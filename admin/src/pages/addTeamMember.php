<div id="page-wrapper">
<div id="page-inner">
    <div class="row">
      <div class="col-md-12">
          <h1 class="page-header">
              Add Top Team Member <small>Add a new member</small>
          </h1>
      </div>
    </div>
      <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                      <?php displayMessage(); ?>
                        <form role="form" action="/admin/addTeamMember.php" method="POST" enctype="multipart/form-data">
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label>Select Position</label>
                                <select class="form-control" name="position">
                                    <option value="Chief Executive Officer, C.E.O">Chief Executive Officer, C.E.O</option>
                                    <option value="Chief Technical Officer, C.T.O">Chief Technical Officer, C.T.O</option>
                                    <option value="Chief Operating Officer, C.O.O">Chief Operating Officer, C.O.O</option>
                                    <option value="Chief Commercial Officer, C.C.O">Chief Commercial Officer, C.C.O</option>
                                    <option value="Chief Markerting Officer, C.M.O">Chief Markerting Officer, C.M.O</option>
                                </select>
                            </div>
                              <div class="form-group">
                                <label>Name</label>
                                  <input class="form-control" name="name" placeholder="Full Name" required />
                              </div>
                              <div class="form-group">
                                  <label>Description</label>
                                  <textarea class="form-control" rows="3" name="description" placeholder="Add a description about this team member" required></textarea>
                              </div>
                              <div class="form-group">
                                <label>Images - accept png/jpeg</label>
                                <input type="file" name="file" accept="image/x-png,image/jpeg" required />
                            </div>
                            </div>
                            
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label>Facebook</label>
                                  <input type="text" class="form-control" name="facebook" placeholder="Enter facebook page link" />
                              </div>
                              <div class="form-group">
                                <label>Twitter</label>
                                  <input type="text" class="form-control" name="twitter" placeholder="Enter twitter page link" />
                              </div>
                              <div class="form-group">
                                <label>Instagram</label>
                                  <input type="text" class="form-control" name="instagram" placeholder="Enter instagram page link" />
                              </div>
                              <div class="form-group">
                                <label>Whatsapp</label>
                                  <input type="tel" class="form-control" name="whatsapp" placeholder="Enter whatsapp number" />
                              </div>
                            </div>
                          </div>
                          <button type="submit" class="btn btn-default" name="addTeamMember">Submit Button</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
  </div>
</div>
