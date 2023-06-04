<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>DataTables</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">DataTables</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">


          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Imię</th>
                  <th>Nazwisko</th>
                  <th>Miasto</th>
                  <th>Data utworzenia</th>
                  <th>Data ostatniego logowania</th>
                  <th>Rola</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  require_once "../../scripts/connect.php";
                  $stmt = $conn->prepare("SELECT u.firstName, u.lastName, u.created_at createUser, c.city, l.created_at createLog, r.role FROM users u INNER JOIN cities c on u.city_id = c.id INNER JOIN logs l on u.id = l.user_id INNER JOIN roles r on u.role_id = r.id");
                  $stmt->execute();
                  $result = $stmt->get_result();
                  while($user = $result->fetch_assoc()){
                    echo <<< USER
                      <tr>
                        <td>$user[firstName]</td>
                        <td>$user[lastName]</td>
                        <td>$user[city]</td>
                        <td>$user[createUser]</td>
                        <td>$user[createLog]</td>
                        <td>$user[role]</td>
                      </tr>
USER;
                  }
                ?>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>