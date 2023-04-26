<?php include 'templates/header.php';

    include '../dbconnection.php'

 ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Appointments</h4>
                        <div class="d-flex align-items-center">

                        </div>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                   
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div><br>
                <div class="row">
                    <!-- Column -->
                        
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- <h4 class="card-title">Zero Configuration</h4> -->
                                <!-- <h6 class="card-subtitle">DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function:<code> $().DataTable();</code>. You can refer full documentation from here <a href="https://datatables.net/">Datatables</a></h6> -->
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Date</th>
                                                <th>VIN</th>
                                                <th>Customer</th>
                                                <th>Location</th>
                                                <!-- <th>Salary</th> -->
                                            </tr>
 <?php
$query=mysqli_query($conn,"select * from appointments");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $cnt;?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['phone'];?></td>
<td><?php echo $row['creditcard'];?></td>
<td><?php echo $row['address'];?></td>
                                            </tr>
                                         <?php
$cnt=$cnt+1;
 } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>id</th>
                                                <th>Date</th>
                                                <th>VIN</th>
                                                <th>Customer</th>
                                                <th>Location</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
<?php include 'templates/footer.php' ?>