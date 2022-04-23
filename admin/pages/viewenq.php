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
                          <th>Full Name</th>
                          <th>Type Of Event</th>
                          <th>First Day</th>
                          <th>Last Day</th>
                          <th>Number of Persons</th>
                          <th>Company Name</th>
                          <th>Telephone</th>
                          <th>Email</th>
                          <th>Date of Arival</th>
                          <th>Date of Departure</th>
                          <th>Guests</th>
                          <th>Details</th>
                          <th>Contact Method</th>
                          <th>Accommodation</th>
                          <th>Requirements</th>
                          <th>Message</th>
                          <th>Date</th>
                        </tr>
                      </thead>
                      <tbody>

<?php
$query = $conn->query("SELECT * FROM enquiry order by 'id' DESC");
$fetch = $query->fetchAll(PDO::FETCH_OBJ);
$count = $query->rowCount();
$num = 1;
if ($count > 0) {
  foreach ($fetch as $key) {
    $id = $key->id;
    $full_name = $key->full_name;
    $type_of_event = $key->type_of_event;
    $first_day = $key->first_day;
    $last_day = $key->last_day;
    $num_of_persons = $key->num_of_persons;
    $company = $key->company;
    $telephone = $key->telephone;
    $email = $key->email;
    $date_of_arival = $key->date_of_arival;
    $date_of_departure = $key->date_of_departure;
    $guests = $key->guests;
    $details = $key->details;
    $contact_method = $key->contact_method;
    $accommodation = $key->accommodation;
    $requirements = $key->requirements;
    $message = $key->message;
    $date = $key->date;
  
    ?>
 
                      
                        <tr>
                          <td><?php echo $num; ?></td>
                          <td><?php echo $full_name; ?></td>
                          <td><?php echo $type_of_event; ?></td>
                          <td><?php echo $first_day; ?></td>
                          <td><?php echo $last_day; ?></td>                         
                          <td><?php echo $num_of_persons; ?></td>                         
                          <td><?php echo $company; ?></td>                         
                          <td><?php echo $telephone; ?></td>
                          <td><?php echo $email; ?></td>
                          <td><?php echo $date_of_arival; ?></td>
                          <td><?php echo $date_of_departure; ?></td>
                          <td><?php echo $guests; ?></td>
                          <td><?php echo $details; ?></td>
                          <td><?php echo $contact_method; ?></td>
                          <td><?php echo $accommodation; ?></td>
                          <td><?php echo $requirements; ?></td>
                          <td><?php echo $message; ?></td>
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