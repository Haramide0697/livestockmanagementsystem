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
                <h3>Paid Orders</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Paid Orders</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>S/N</th>
                          <th>by</th>
                          <th>goods</th>
                          <th>total</th>
                          <th>date</th>
                        </tr>
                      </thead>
                      <tbody>

<?php
$query = $conn->query("SELECT * FROM cart WHERE status = 'paid' order by 'id' DESC");
$fetch = $query->fetchAll(PDO::FETCH_OBJ);
$count = $query->rowCount();
$num = 1;
if ($count > 0) {
  foreach ($fetch as $key) {
    $id = $key->id;
    $byid = $key->byid;  
    $goods = $key->goods;  
    $amount = $key->amount;  
    $date = $key->date; 
 $query2 = $conn->query("SELECT * FROM users WHERE id = '$byid' LIMIT 1");
$fetch2 = $query2->fetchAll(PDO::FETCH_OBJ);
$count2 = $query2->rowCount(); 
if ($count2 > 0) {
  foreach ($fetch2 as $keys) { 
    $email = $keys->email;
    ?>
 
                      
                        <tr>
                          <td><?php echo $num; ?></td>
                          <td><?php echo $email; ?></td>
                          <td>
                            <a data-toggle="modal" data-target="#read<?php echo $id; ?>"><button class="btn btn-success"> View Details </button></a>
                          </td>
                          <td><?php echo $amount; ?></td>
                          <td><?php echo $date; ?></td>
                       </tr>
                     </tbody>
                     <div class="modal fade" id="read<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                          <div class="modal-content">
                           <div class="modal-header" style="background: white;">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: black;">&times;</button>
                           <h4 class="modal-title" id="myModalLabel" style="color: black; text-transform: capitalize; font-weight: bolder;">Details </h4>
                           </div>
                           <div class="modal-body">
                              <?php echo "$goods"; ?>
                           </div>
                           </div><!-- /.modal-content -->
                          </div><!-- /.modal -->
                      </div>

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