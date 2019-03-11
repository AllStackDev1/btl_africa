<div id="page-wrapper">
<div id="page-inner">
    <div class="row">
      <div class="col-md-12">
          <h1 class="page-header">
              Add Admin <small>Add a new admin</small>
          </h1>
      </div>
    </div>
      <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                      <?php displayMessage(); ?>
                        <form role="form" action="/admin/addAdmin.php" method="POST">
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label>Name</label>
                                  <input class="form-control" name="name" placeholder="Full Name" required />
                              </div>
                              <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" name="password" placeholder="Password" required />
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label>Email</label>
                                  <input class="form-control" name="email" placeholder="Email" required />
                              </div>
                              <div class="form-group">
                                <label>Comfirm Password</label>
                                <input class="form-control" name="confirm_password" placeholder="Comfirm Password" required />
                              </div>
                            </div>
                          </div>
                          <button type="submit" class="btn btn-default" name="addAdmin">Submit Button</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
  </div>
</div>
