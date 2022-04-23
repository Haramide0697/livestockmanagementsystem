<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>View Visitors</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>View Visitors</h2>
                    <div class="clearfix"></div>
                  </div>
                                   <div class="x_content">
                  <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>S/N</th>
                          <th>IP Address</th>
                          <th>Page Visited</th>
                          <th>Date</th>
                        </tr>
                      </thead>
                      <tbody>

<?php
$query = $conn->query("SELECT * FROM visitors order by 'id' DESC");
$fetch = $query->fetchAll(PDO::FETCH_OBJ);
$count = $query->rowCount();
$num = 1;
if ($count > 0) {
  foreach ($fetch as $key) {
    $id = $key->id;
    $ip = $key->ip;
    $page = $key->page;
    $min = $key->min;
    $hour = $key->hour;
    $day = $key->day;
    $month = $key->month;
    $year = $key->year;
    $date = $hour.":".$min.","." ".$day."-".$month."-".$year; 
    
    ?>
 
                      
                        <tr>
                          <td><?php echo $num; ?></td>
                          <td><?php echo $ip; ?></td>
                          <td><?php echo $page; ?></td>
                          <td><?php echo $date; ?></td>
                        </tr>
                    

      <?php
      $num++;
   }
   
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
        <!-- /page content -->