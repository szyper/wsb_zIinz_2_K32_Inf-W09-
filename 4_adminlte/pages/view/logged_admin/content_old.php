<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Administrator</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Dashboard v2</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<!-- Info boxes -->
			<div class="row">
				<div class="col-12 col-sm-6 col-md-3">
					<div class="info-box">
						<span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

						<div class="info-box-content">
							<span class="info-box-text">CPU Traffic</span>
							<span class="info-box-number">
                  10
                  <small>%</small>
                </span>
						</div>
						<!-- /.info-box-content -->
					</div>
					<!-- /.info-box -->
				</div>
				<!-- /.col -->
				<div class="col-12 col-sm-6 col-md-3">
					<div class="info-box mb-3">
						<span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

						<div class="info-box-content">
							<span class="info-box-text">Likes</span>
							<span class="info-box-number">41,410</span>
						</div>
						<!-- /.info-box-content -->
					</div>
					<!-- /.info-box -->
				</div>
				<!-- /.col -->

				<!-- fix for small devices only -->
				<div class="clearfix hidden-md-up"></div>

				<div class="col-12 col-sm-6 col-md-3">
					<div class="info-box mb-3">
						<span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

						<div class="info-box-content">
							<span class="info-box-text">Sales</span>
							<span class="info-box-number">760</span>
						</div>
						<!-- /.info-box-content -->
					</div>
					<!-- /.info-box -->
				</div>
				<!-- /.col -->
				<div class="col-12 col-sm-6 col-md-3">
					<div class="info-box mb-3">
						<span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

						<div class="info-box-content">
							<span class="info-box-text">New Members</span>
							<span class="info-box-number">2,000</span>
						</div>
						<!-- /.info-box-content -->
					</div>
					<!-- /.info-box -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->

			<div class="row">
				<div class="col-md-12">
					<div class="card">

<!--     tabela z użytkownikami       -->
            <?php
              if (isset($_GET["showTableUsers"])){
                ?>

                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Użytkownicy </h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dt-buttons btn-group flex-wrap">               <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Copy</span></button> <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>CSV</span></button> <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Excel</span></button> <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>PDF</span></button> <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="example1" type="button"><span>Print</span></button> <div class="btn-group"><button class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis" tabindex="0" aria-controls="example1" type="button" aria-haspopup="true"><span>Column visibility</span><span class="dt-down-arrow"></span></button></div> </div></div><div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable dtr-inline collapsed" aria-describedby="example1_info">
                            <thead>
                            <tr><th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Rendering engine</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Browser</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Platform(s)</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="display: none;">Engine version</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="display: none;">CSS grade</th></tr>
                            </thead>
                            <tbody>

                            <tr class="odd">
                              <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
                              <td>Firefox 1.0</td>
                              <td>Win 98+ / OSX.2+</td>
                              <td style="display: none;">1.7</td>
                              <td style="display: none;">A</td>
                            </tr><tr class="even">
                              <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
                              <td>Firefox 1.5</td>
                              <td>Win 98+ / OSX.2+</td>
                              <td style="display: none;">1.8</td>
                              <td style="display: none;">A</td>
                            </tr><tr class="odd">
                              <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
                              <td>Firefox 2.0</td>
                              <td>Win 98+ / OSX.2+</td>
                              <td style="display: none;">1.8</td>
                              <td style="display: none;">A</td>
                            </tr><tr class="even">
                              <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
                              <td>Firefox 3.0</td>
                              <td>Win 2k+ / OSX.3+</td>
                              <td style="display: none;">1.9</td>
                              <td style="display: none;">A</td>
                            </tr><tr class="odd">
                              <td class="sorting_1 dtr-control" tabindex="0">Gecko</td>
                              <td>Camino 1.0</td>
                              <td>OSX.2+</td>
                              <td style="display: none;">1.8</td>
                              <td style="display: none;">A</td>
                            </tr><tr class="even">
                              <td class="sorting_1 dtr-control" tabindex="0">Gecko</td>
                              <td>Camino 1.5</td>
                              <td>OSX.3+</td>
                              <td style="display: none;">1.8</td>
                              <td style="display: none;">A</td>
                            </tr><tr class="odd">
                              <td class="sorting_1 dtr-control" tabindex="0">Gecko</td>
                              <td>Netscape 7.2</td>
                              <td>Win 95+ / Mac OS 8.6-9.2</td>
                              <td style="display: none;">1.7</td>
                              <td style="display: none;">A</td>
                            </tr><tr class="even">
                              <td class="sorting_1 dtr-control" tabindex="0">Gecko</td>
                              <td>Netscape Browser 8</td>
                              <td>Win 98SE+</td>
                              <td style="display: none;">1.7</td>
                              <td style="display: none;">A</td>
                            </tr><tr class="odd">
                              <td class="sorting_1 dtr-control" tabindex="0">Gecko</td>
                              <td>Netscape Navigator 9</td>
                              <td>Win 98+ / OSX.2+</td>
                              <td style="display: none;">1.8</td>
                              <td style="display: none;">A</td>
                            </tr><tr class="even">
                              <td class="sorting_1 dtr-control" tabindex="0">Gecko</td>
                              <td>Mozilla 1.0</td>
                              <td>Win 95+ / OSX.1+</td>
                              <td style="display: none;">1</td>
                              <td style="display: none;">A</td>
                            </tr></tbody>
                            <tfoot>
                            <tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1" style="display: none;">Engine version</th><th rowspan="1" colspan="1" style="display: none;">CSS grade</th></tr>
                            </tfoot>
                          </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                  </div>
                  <!-- /.card-body -->
                </div>

            <?php
              }
            ?>
						<!-- /.card-footer -->
					</div>
					<!-- /.card -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->

			<!-- Main row -->

			<!-- /.row -->
		</div><!--/. container-fluid -->
	</section>
	<!-- /.content -->
</div>
`