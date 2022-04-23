<script type="text/javascript">                
function reply(iden){
$(document).ready(function(ea) {
$('#replymess'+iden).on('submit' ,(function (ea) {
ea .preventDefault();
$('#loading'+iden).show();
$ .ajax({
url : "control.php" , //Url to which the request issend
type : "POST" , //Type of request to be send,called as method
data : new FormData(this), //Data sent to server, a set of key/value pairs(i.e.form fields and values)
contentType : false, //The content type used when sending data to the server.
cache : false , //To unable request pages to be cached
processData : false, //To send DOMDocument or non processed data file it is set to false
beforeSend : function(){
            $('#loading').show();
        },
success: function(data) //A function to be called if request succeeds
{
$('#loading').hide();
alert(data);
window.location.reload(1);
}
});
}));
});
}

function del(iden,action){
    var dataString = "id="+iden+"&action="+action;
    var status = $("#status").val();
    var identity = $('#loading')+iden;
    var confirms = confirm("clicking this will remove this reply and all the records completely, are you sure you want to continue?");
    if (confirms == true) {
    $.ajax({
        type: "POST",
        url: "control.php",
        cache : false,
        data : dataString,
        beforeSend : function(){
            $('#del'+iden).hide();
            $('#loading'+iden).show();
        },
        success : function(response){
            $('#loading'+iden).hide();
            alert(response);
            window.location.reload(1);
        }
    });
}
}
</script>



<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Property Message</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Property Message</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>S/N</th>
                          <th>Picture</th>
                          <th>Property Details</th>
                          <th>Name</th>
                          <th>Phone Number</th>
                          <th>Email</th>
                          <th>Message</th>
                          <th>Status</th>
                          <th>Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>

<?php
$query = $conn->query("SELECT * FROM property_message order by 'id' DESC");
$fetch = $query->fetchAll(PDO::FETCH_OBJ);
$count = $query->rowCount();
$num = 1;
if ($count > 0) {
  foreach ($fetch as $key) {
    $id = $key->id;
    $property_id = $key->property_id;
    $name = $key->name;
    $phone = $key->phone;
    $email = $key->email;
    $message = $key->message;
    $date = $key->date;

$queryy = $conn->query("SELECT * FROM properties WHERE id = $property_id");
$fetchh = $queryy->fetchAll(PDO::FETCH_OBJ);
$countt = $queryy->rowCount();
if ($countt > 0) {
  echo "yes";
  foreach ($fetchh as $value) {
    $pic = $value->pic;
    $ros = $value->rent_sell;
    $price = $value->price;
    $toh = $value->type_of_house;
    $cate = $value->category;
    $locations = $value->location_state;
    $locationc = $value->location_country;
    $details = "$toh at $locations, $locationc for $ros at $price";
    
  
    ?>
 
                      
                        <tr>
                          <td><?php echo $num; ?></td>
                          <td><a data-toggle="modal" data-target="#accept<?php echo $id; ?>"><img src="../img/pro-img/<?php echo $pic ?>" height="10%"></a>
                          </td>
                          <td><?php echo $details; ?></td>
                          <td><?php echo $name; ?></td>
                          <td><?php echo $phone; ?></td>
                          <td><?php echo $email; ?></td>
                          <td><?php echo $message; ?></td>
                          <?php
                          $queryy2 = $conn->query("SELECT * FROM reply_pmessages WHERE message_id = $id");
                          $fetchh2 = $queryy2->fetchAll(PDO::FETCH_OBJ);
                          $countt2 = $queryy2->rowCount();
                          if ($countt2 > 0) {
                            $use = "noreply";
                            foreach ($fetchh2 as $key2) {
                              $reid = $key2->id;
                              $rmess = $key2->message;
                              $mail = $key2->email;
                              $dates = $key2->dates;
                          ?>
                          <td>
                          <a data-toggle="modal" data-target="#read<?php echo $id; ?>"><button class="btn btn-success"> Replied </button></a></td>
                           <div class="modal fade" id="read<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                    <div class="modal-content">
                     <div class="modal-header" style="background: white;">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: black;">&times;</button>
                     <h4 class="modal-title" id="myModalLabel" style="color: black; text-transform: capitalize; font-weight: bolder;">Receiver Email: <?php echo "$mail"; ?> </h4>
                     </div>
                     <div class="modal-body">
                        <?php echo "$rmess"; ?>
                     </div>
                     <div class="modal-footer">
                       <h4>Sent on <?php echo "$dates"; ?></h4>
                       <a title="Delete this message" onclick= "del('<?php echo $reid ?>', 'deletermes')"><i class="fa fa-trash"></i></a>
                     </div>
                     </div><!-- /.modal-content -->
                    </div><!-- /.modal -->
                </div>     


                          <?php 

                            }
                          }else{
                            $use = "reply";
                          ?>
                          <td>
                          <button class="btn btn-danger">Waiting </button></td>
                          <?php
                          }


                          ?>
                         
                          <td><?php echo $date; ?></td>
                          <td>
                            <a style="cursor:pointer" title="Reply Message" onclick="reply('<?php echo $id ?>');" data-toggle="modal" data-target="#<?php echo $use ?><?php echo $id; ?>"><i class="fa fa-reply"></i></a> <span id="loading<?php echo $id ?>" style="display:none"><img src="../img/core-img/loading.gif"></span>
                          </td>


                    <div class="modal fade" id="reply<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                    <div class="modal-content">
                     <div class="modal-header" style="background: white;">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: black;">&times;</button>
                     <h4 class="modal-title" id="myModalLabel" style="color: black; text-transform: capitalize; font-weight: bolder;">Reply to <?php echo "$name"; ?> (<?php echo "$email"; ?>) </h4>
                     </div>
                     <div class="modal-body">
                        <form method="post" id="replymess<?php echo $id ?>">
                          <input type="number" id="iden" name="identity" value="<?php echo $id ?>" style="display: none;">
                          <div class="form-group">
                            <label for="Reply"> Reply </label>
                            <textarea class="form-control" id="reply" name="reply"></textarea>
                          </div>
                          <button class="btn btn-default" name="reply">Send</button>
                          <span id="loading<?php echo $id ?>" style="display:none"><img src="../img/core-img/loading.gif"></span>
                        </form>
                     </div>
                     </div><!-- /.modal-content -->
                    </div><!-- /.modal -->
                </div>     

                    <div class="modal fade" id="accept<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                    <div class="modal-content">
                     <div class="modal-header" style="background: white;">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: black;">&times;</button>
                     <h4 class="modal-title" id="myModalLabel" style="color: black; text-transform: capitalize; font-weight: bolder;">(<?php echo $num; ?>) <?php echo $toh; ?> in <?php echo $locations; ?> <?php echo $locationc; ?> </h4>
                     </div>
                     <div class="modal-body">
                        <img src="../img/pro-img/<?php echo $pic ?>" width="100%">
                     </div>
                     </div><!-- /.modal-content -->
                    </div><!-- /.modal -->
                </div>
                        </tr>
                     </tbody>

      <?php
      $num++;
      }
}
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