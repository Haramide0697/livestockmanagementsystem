<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Bookings</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Bookings</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>S/N</th>
                          <th>Name</th>
                          <th>Arrival Date</th>
                          <th>Departure Date</th>
                          <th>Type</th>
                          <th>Age Category</th>
                          <th>Number Of Rooms</th>
                          <th>Date</th>
                        </tr>
                      </thead>
                      <tbody>

<?php
$query = $conn->query("SELECT * FROM booking order by 'id' DESC");
$fetch = $query->fetchAll(PDO::FETCH_OBJ);
$count = $query->rowCount();
$num = 1;
if ($count > 0) {
  foreach ($fetch as $key) {
    $id = $key->id;
    $name = $key->name;
    $arrival = $key->arrival;
    $departure = $key->departure;
    $type = $key->type;
    $category_age = $key->category_age;
    $number_rooms = $key->number_rooms;
    $date = $key->date;
  
    ?>
 
                      
                        <tr>
                          <td><?php echo $num; ?></td>
                          <td><?php echo $name; ?></td>
                          <td><?php echo $arrival; ?></td>
                          <td><?php echo $departure; ?></td>
                          <td><?php echo $type; ?></td>                         
                          <td><?php echo $category_age; ?></td>                         
                          <td><?php echo $number_rooms; ?></td>                         
                          <td><?php echo $date; ?></td>
                        </tr>
                     </tbody>

      <?php
      $num++;
      }
}
?>
                     
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->