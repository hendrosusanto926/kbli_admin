<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php $this->load->view('header');?>
    <!-- x-editor CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo site_url('assets/css/editor/select2.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/editor/datetimepicker.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/editor/bootstrap-editable.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/editor/x-editor-style.css') ?>">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo site_url('assets/css/data-table/bootstrap-table.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/data-table/bootstrap-editable.css') ?>"> 
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
    <?php $this->load->view('v_admin/v_menuleft');?> 
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <?php $this->load->view('v_admin/v_navAtas');?> 
            <!-- Mobile Menu start -->
            <?php $this->load->view('v_admin/v_mobileMenu');?> 
            <!-- Mobile Menu end -->
            <br><br>
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Tambah Admin</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description"> Tambah Admin</a></li>
                                <li><a href="#reviews"> Tabel Admin</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <form id="acount-infor" method="post" action="<?php echo base_url('index.php/Admin2/tambah'); ?>" class="acount-infor">
                                                            <div class="devit-card-custom">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="nama" placeholder="Nama">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="username" type="text" class="form-control" placeholder="Username">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="password" type="password" class="form-control" placeholder="Password">
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="level" class="form-control">
																			<option value="none" selected="" disabled="">Pilih Level</option>
																			<option value="1">Admin</option>
																			<option value="0">Pegawai</option>
																		</select>
                                                                </div>
                                                                <input class="btn btn-primary waves-effect waves-light"  type="submit" name="submit" value="Simpan">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="reviews">
                                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control dt-tb">
											<option value="">Export Basic</option>
											<option value="all">Export All</option>
											<option value="selected">Export Selected</option>
										</select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="id">ID</th>
                                                <th data-field="nama" >Nama</th>
                                                <th data-field="username" >Username</th>
                                                <th data-field="level" >Level</th>
                                                <th data-field="status" >Status</th>
                                                <th data-field="action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i =1;
                                                if( ! empty($user)){ // Jika data siswa tidak sama dengan kosong, artinya jika data siswa ada
                                                    
                                                    foreach($user as $data){
                                                    if ($data->level==1) {
                                                        $lvl="admin";
                                                    } else {
                                                        $lvl="pegawai";
                                                    }
                                                    if ($data->blokir==1) {
                                                        $bl="aktif";
                                                    } else {
                                                        $bl="blokir";
                                                    }
                                                    echo "<tr>
                                                    <td>".$data->id."</td>
                                                    <td>".$i++."</td>
                                                    <td>".$data->nama."</td>
                                                    <td>".$data->username."</td>
                                                    <td>".$lvl."</td>
                                                    <td>".$bl."</td>
                                                    <td>
                                                        <a href='#' class='btn btn-danger'><i class='fa fa-times edu-danger-error' aria-hidden='true'></i></a>
                                                        <a href='#' class='btn btn-danger'><i class='fa fa-times edu-danger-error' aria-hidden='true'></i></a>
                                                        <a href='".base_url("index.php/Admin2/hapus/".$data->id)."' class='btn btn-danger'><i class='fa fa-times edu-danger-error' aria-hidden='true'></i></a>
                                                    </td>
                                                    </tr>";
                                                    }
                                                }else{ // Jika data siswa kosong
                                                    echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2020  TIM KBLI ICM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo site_url('assets/js/vendor/jquery-1.12.4.min.js') ?>"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?php echo site_url('assets/js/bootstrap.min.js') ?>"></script>
    <!-- wow JS
		============================================ -->
    <script src="<?php echo site_url('assets/js/wow.min.js') ?>"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="<?php echo site_url('assets/js/jquery-price-slider.js') ?>"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?php echo site_url('assets/js/jquery.meanmenu.js') ?>"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="<?php echo site_url('assets/js/owl.carousel.min.js') ?>"></script>
    <!-- sticky JS
		============================================ -->
    <script src="<?php echo site_url('assets/js/jquery.sticky.js') ?>"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?php echo site_url('assets/js/jquery.scrollUp.min.js') ?>"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?php echo site_url('assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') ?>"></script>
    <script src="<?php echo site_url('assets/js/scrollbar/mCustomScrollbar-active.js') ?>"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="<?php echo site_url('assets/js/metisMenu/metisMenu.min.js') ?>"></script>
    <script src="<?php echo site_url('assets/js/metisMenu/metisMenu-active.js') ?>"></script>
    <script src="<?php echo site_url('assets/js/plugins.js') ?>"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo site_url('assets/js/main.js') ?>"></script>
    <!-- tawk chat JS
        ============================================ -->
        <!-- data table JS
		============================================ -->
    <script src="<?php echo site_url('assets/js/data-table/bootstrap-table.js') ?>"></script>
    <script src="<?php echo site_url('assets/js/data-table/tableExport.js') ?>"></script>
    <script src="<?php echo site_url('assets/js/data-table/data-table-active.js') ?>"></script>
    <script src="<?php echo site_url('assets/js/data-table/bootstrap-table-editable.js') ?>"></script>
    <script src="<?php echo site_url('assets/js/data-table/bootstrap-editable.js') ?>"></script>
    <script src="<?php echo site_url('assets/js/data-table/bootstrap-table-resizable.js') ?>"></script>
    <script src="<?php echo site_url('assets/js/data-table/colResizable-1.5.source.js') ?>"></script>
    <script src="<?php echo site_url('assets/js/data-table/bootstrap-table-export.js') ?>"></script>
    <!--  editable JS
		============================================ -->
    <script src="<?php echo site_url('assets/js/editable/jquery.mockjax.js') ?>"></script>
    <script src="<?php echo site_url('assets/js/editable/mock-active.js') ?>"></script>
    <script src="<?php echo site_url('assets/js/editable/select2.js') ?>"></script>
    <script src="<?php echo site_url('assets/js/editable/moment.min.js') ?>"></script>
    <script src="<?php echo site_url('assets/js/editable/bootstrap-datetimepicker.js') ?>"></script>
    <script src="<?php echo site_url('assets/js/editable/bootstrap-editable.js') ?>"></script>
    <script src="<?php echo site_url('assets/js/editable/xediable-active.js') ?>"></script>
    <!-- Chart JS
		============================================ -->
    <script src="js/chart/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
</body>

</html>
