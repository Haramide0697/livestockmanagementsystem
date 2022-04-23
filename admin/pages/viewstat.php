<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Statistics</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ststistics</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                   <form method="post">
                    <div class="row">
                     
                      <h3 class="pull-right">To</h3>
                      <h3>From</h3>

                      <div class="col-md-5 col-sm-5 col-xs-5 col-lg-5 ">
                        <div class="col-md-3 col-sm-3 col-xs-3 col-lg-3">
                          <div class="form-group">
                            <label for="hour1">Hour</label>
                            <input type="number" name="hour1" class="form-control" id="hour1">
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 col-lg-3">
                          <div class="form-group ">
                            <label for="day1">Day</label>
                            <input type="number" name="day1" class="form-control" id="day1">
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 col-lg-3">
                        <div class="form-group">
                            <label for="month1">Month</label>
                            <input type="number" name="month1" class="form-control" id="month1">
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 col-lg-3">
                        <div class="form-group">
                            <label for="year1">Year</label>
                            <select name="year1" class="form-control" id="year1">
                              <?php
                              $datess = date('Y');
                              for ($i=2000; $i <= $datess ; $i++) { 
                              ?>
                              <option value="<?php echo $i ?>"><?php echo $i ?></option>
                              <?php
                              }
                              ?>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-2 col-sm-2 col-xs-2 col-lg-2">
                        
                      </div>
                    
                    <div class="col-md-5 col-sm-5 col-xs-5 col-lg-5">
                     <div class="col-md-3 col-sm-3 col-xs-3 col-lg-3">
                          <div class="form-group">
                            <label for="hour2">Hour</label>
                            <input type="number" name="hour2" class="form-control" id="hour2">
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 col-lg-3">
                          <div class="form-group">
                            <label for="day2">Day</label>
                            <input type="number" name="day2" class="form-control" id="day2">
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 col-lg-3">
                        <div class="form-group">
                            <label for="month2">Month</label>
                            <input type="number" name="month2" class="form-control" id="month2">
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 col-lg-3">
                        <div class="form-group">
                            <label for="year2">Year</label>
                            <select name="year2" class="form-control" id="year2">
                              <?php
                              $datess = date('Y');
                              for ($i=2000; $i <= $datess ; $i++) { 
                              ?>
                              <option value="<?php echo $i ?>"><?php echo $i ?></option>
                              <?php
                              }
                              ?>
                            </select>
                          </div>
                        </div>
                      </div>                    
                    </div>
                    <button class="btn btn-dafault" name="filter"> <i class="fa fa-filter"></i> </button>
                  </form>
                  <hr>
                  <?php 
                  if (isset($_POST['filter'])) {
                    $hour1 = $_POST['hour1'];
                    $day1 = $_POST['day1'];
                    $month1 = $_POST['month1'];
                    $year1 = $_POST['year1'];
                    $hour2 = $_POST['hour2'];
                    $day2 = $_POST['day2'];
                    $month2 = $_POST['month2'];
                    $year2 = $_POST['year2'];

                    if (empty($hour1) || empty($day1) || empty($month1) || empty($year1) || empty($hour2) || empty($day2) || empty($month2) || empty($year2)) {
                     ?>
                     <div class="alert alert-warning">
                      <h3>Please Fill All Fields</h3>
                    </div>
                     <?php
                    }else{

                    $query = $conn->query("SELECT * FROM visitors WHERE hour >= $hour1 AND hour <= $hour2 AND day >= $day1 AND day <= $day2 AND month >= $month1 AND month <= $month2 AND year >= $year1 AND year <= $year2 order by 'id' DESC");
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
                  <div class="row">
                    <h1><?php echo "$count"; ?> Visitor(s)</h1>
                  </div>
                  <div class="row">
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
                        <tr>
                          <td><?php echo $num; ?></td>
                          <td><?php echo $ip; ?></td>
                          <td><?php echo $page; ?></td>
                          <td><?php echo $date; ?></td>
                        </tr>
                     </tbody>                     
                    </table>
                  </div>
                    <?php
                      }
                    }else{
                      ?>
                      <div class="alert alert-info">
                      <h3>There was no visitor in this range</h3>
                      </div>
                      <?php
                    }
                  }
                }else{
                    ?>
                    <div class="alert alert-info">
                      <h3>Please filter a date to check the visitors</h3>
                    </div>
                    <?php
                  }
                  ?>
                  

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->