            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i> Edit barang </h4>
                      <form class="form-horizontal style-form" action="<?php echo base_url(); ?>index.php/admin/barang/edit/<?php echo $hasil->ID;?>" method="POST" enctype="multipart/form-data">
                          <div class="form-group">
                              <label class="col-sm-10 col-sm-2 control-label">Nama Barang</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="barang" value="<?php echo $hasil->BARANG ?>">
                              </div>
                          </div>
                           <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Serial Number</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="serial" value="<?php echo $hasil->SERIAL_NUMBER ?>">
                              </div>
                          </div>
			  
                          <button type="submit" class="btn btn-theme" name="submit">Update</button>

                      </form>
                  </div>
              </div><!-- col-lg-12-->       
            </div><!-- /row -->
     
