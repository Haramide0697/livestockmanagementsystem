<script type="text/javascript">
$(document).ready(function(e) {
$("#uploadimage").on('submit' ,(function(e) {
e .preventDefault();
$("#message").empty();
$('#loading').show();
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
// Function to preview image after validation
$(function() {
$("#pass").change(function()
{
$("#message").empty(); // Toremove the previous error message
var file = this .files [ 0 ];
var imagefile = file .type ;
var match = [ "image/jpeg" , "image/png" , "image/jpg" ];
if(!((imagefile == match [ 0]) ||(imagefile == match[ 1 ]) || (imagefile == match[ 2 ])))
{
$('#previewing').attr('src','noimage.png');
$("#message").html("<p id='error'>Please Select A valid Image File</p>" + "<h4>Note</h4>" + "<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
return false ;
}
else
{
var reader = new FileReader();
reader .onload = imageIsLoaded ;
reader .readAsDataURL(this.files [0]);
}
});
});
function imageIsLoaded(e) {
$("#pass").css("color" , "green");
$('#image_preview').css("display" , "block");
$('#previewing').attr('src' , e .target .result);
$('#previewing').attr('width' , '10%');
$('#previewing').attr('height' , '10%');
};
});
</script>
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Add A Staff</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add A Staff</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form id="uploadimage" action ="" method ="post" enctype ="multipart/form-data">
                        <div id ="image_preview"><img id ="previewing" src ="assets/img/Graphic1.jpg"/></div>
                        <hr id ="line">
                            <div class="row">
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="pass" >Upload Passport</label>
                                <input type="file" name="pass" id="pass" class="form-control" accept="image/*">
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="sname" >Surname</label>
                                <input type="text" name="sname" id="sname" class="form-control">
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="oname" >Other Names</label>
                                <input type="text" name="oname" id="oname" class="form-control">
                            </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="gender" >Gender</label>
                                <select class="form-control" name="gender" id="gender">
                                    <option value=" " selected="">Select...</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="country" >Country</label>
                                <input type="text" name="country" id="country" class="form-control">
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="email" >Email</label>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="number" >Number</label>
                                <input type="number" name="number" id="number" class="form-control">
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="password" >Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="cpassword" >Confirm Password</label>
                                <input type="password" name="cpassword" id="cpassword" class="form-control">
                            </div>
                            </div>
                            </div>
                            </div>
                            <button  class="btn btn-success submit" value="Upload" type="submit" name="submit">Submit</button></a>
                            <span id="loading" style="display:none"><img src="../img/core-img/loading.gif"></span>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->