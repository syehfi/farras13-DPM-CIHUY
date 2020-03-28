  <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Peminjaman</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Peminjaman</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                        <form class="" action="" method="post" novalidate>
                            <div class="field item form-group">
                              <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Peminjam<span
                                  class="required">*</span></label>
                              <div class="col-md-6 col-sm-6">
                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="namapeminjam"required="required" />
                              </div>
                            </div>
                            <div class="field item form-group">
                              <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Organisasi<span
                                  class="required">*</span></label>
                              <div class="col-md-6 col-sm-6">
                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="jumlah"required="required" />
                              </div>
                            </div>
                            <div class="field item form-group">
                              <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Barang<span
                                  class="required">*</span></label>
                              <div class="col-md-6 col-sm-6">
                                <select id="barang" class="form-control" required>
                                <option value="">Choose..</option>
                                <option value="press">Barang</option>
                                </select>
                              </div>
                            </div>
                            <div class="field item form-group">
                              <label class="col-form-label col-md-3 col-sm-3  label-align">Jumlah Barang<span
                                  class="required">*</span></label>
                              <div class="col-md-6 col-sm-6">
                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="jumlah"required="required" />
                              </div>
                            </div>
                            <div class="field item form-group">
                              <label class="col-form-label col-md-3 col-sm-3  label-align">Tanggal Plot<span
                                  class="required">*</span></label>
                              <div class="col-md-6 col-sm-6">
                                <input type="date" class="form-control" data-validate-length-range="6" data-validate-words="2" name="jumlah"required="required" />
                              </div>
                            </div>
                            <div class="field item form-group">
                              <label class="col-form-label col-md-3 col-sm-3  label-align">Tanggal Peminjaman<span
                                  class="required">*</span></label>
                              <div class="col-md-6 col-sm-6">
                                <input type="date" class="form-control" data-validate-length-range="6" data-validate-words="2" name="jumlah"required="required" />
                              </div>
                            </div>
                            <div class="field item form-group">
                              <label class="col-form-label col-md-3 col-sm-3  label-align">Tanggal Pengembalian<span
                                  class="required">*</span></label>
                              <div class="col-md-6 col-sm-6">
                                <input type="date" class="form-control" data-validate-length-range="6" data-validate-words="2" name="jumlah"required="required" />
                              </div>
                            </div>
                            <div class="field item form-group">
                              <label class="col-form-label col-md-3 col-sm-3  label-align">Keperluan<span
                                  class="required">*</span></label>
                              <div class="col-md-6 col-sm-6">
                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="jumlah"required="required" />
                              </div>
                            </div>
                            <div class="field item form-group">
                              <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Penjamin (KTM)<span
                                  class="required">*</span></label>
                              <div class="col-md-6 col-sm-6">
                                <input type="date" class="form-control" data-validate-length-range="6" data-validate-words="2" name="jumlah"required="required" />
                              </div>
                            </div>
                            <div class="ln_solid">
                              <div class="form-group">
                                <div class="col-md-6 offset-md-3">
                            <button type='submit' class="btn btn-primary">Submit</button>
                            <button type='reset' class="btn btn-success">Reset</button>
                                </div>
                              </div>
                            </div>
                          </form>
                      </div>
                  </div>
              </div>
            </div>


            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List Peminjaman</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                          <p class="text-muted font-13 m-b-30">
                            Data Peminjaman
                          </p>
                          <table id="datatable-checkbox" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                              <tr>
                                <th>Check</th>
                                <th>No</th>
                                <th>Nama Peminjam</th>
                                <th>Nama Organisasi</th>
                                <th>Nama Barang</th>
                                <th>Jumlah Barang</th>
                                <th>Tanggal Plot</th>
                                <th>Tanggal Peminjaman</th>
                                <th>Tanggal Pengembalian</th>
                                <th>Keperluan</th>
                                <th>Jaminan</th>
                                <th>Status</th>
                              </tr>
                            </thead>  
                            <tbody>
                              <tr>
                                <td><input type="checkbox" id="check-all" > </td>
                                <td>1</td>
                                <td>Lael Greer</td>
                                <td>Systems Administrator</td>
                                <td>Lael Greer</td>
                                <td>Lael Greer</td>
                                <td>Lael Greer</td>
                                <td>Lael Greer</td>
                                <td>Lael Greer</td>
                                <td>Lael Greer</td>
                                <td>Lael Greer</td>
                                <td><button type="button" class="btn-info">OK</button></td>
                                
                              </tr>
                              <tr>
                                <td><input type="checkbox" id="check-all" > </td>
                                <td>1</td>
                                <td>Jonas Alexander</td>
                                <td>Developer</td>
                              </tr>
                            </tbody>
                          </table>
                          <button type="button" class="btn btn-round btn-warning" style="margin-left: 15px">Hapus</button>
                          <button type="button" class="btn btn-round btn-success">Print</button> 
                        </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>