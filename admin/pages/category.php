<?php
if (isset($_POST['submit'])) {
    $name = sanitize($_POST['name']);

    if (empty($name)) {
        $errmsg = "Please Type A Name";
    }else{
        $select = $conn->query("SELECT * FROM category WHERE name = '$name' ");
        $fetch = $select->fetchAll(PDO::FETCH_OBJ);
        $count = $select->rowCount();
        if ($count > 0) {
        $errmsg = "Category Added Once";
        }else{
        $in = array('name' => $name, );
        create('category',$in);
        $msg = "You Have Successfully Added $name";
    }
    }

}

?>
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Add Category</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add Category</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form method ="post">
                            <div class="row">
                            <div class="col-md-4">
                            <?php
                            if (isset($errmsg)) {
                            ?>
                            <div class="alert alert-warning">
                                <?php echo "$errmsg"; ?>
                            </div>
                            <?php
                            }elseif (isset($msg)) {
                            ?>
                            <div class="alert alert-success">
                                <?php echo "$msg"; ?>
                            </div>
                            <?
                            }

                            ?>
                            <div class="form-group">
                                <label for="name" >Name</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            </div>
                            </div>
                            <button  class="btn btn-success submit" value="Upload" type="submit" name="submit"> <i class="fa fa-plus"></i> Add</button></a>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->