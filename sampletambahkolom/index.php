<!DOCTYPE>
<html>
<head>
  <title>Cara Membuat Form Dinamis Menggunakan PHP MySQL</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">Cara Membuat Form Dinamis Menggunakan PHP MySQL</div>
    <div class="panel-body">
    
       <form action="action.php" method="POST">
	        <div class="input-group control-group after-add-more">
            <div class="col-sm-4">
	          <input type="text" name="addmore[]" class="form-control" placeholder="Hobi">
            </div>
            <div class="col-sm-2">
              <input type="text" name="addmore[]" class="form-control" placeholder="Hobi">
            </div>
	          <div class="input-group-btn"> 
	            <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Tmabah</button>
	          </div>
	        </div>
	        <div class="control-group text-center">
	            <br>
	            <button class="btn btn-success" type="submit">Submit</button>
	        </div>
 		</form>

        <!-- Copy Fields -->
        <div class="copy hide">
          <div class="control-group input-group" style="margin-top:10px">
            <div class="col-sm-4">
            <input type="text" name="addmore[]" class="form-control" placeholder="Hobi">
            </div>
            <div class="col-sm-2">
              <input type="text" name="addmore[]" class="form-control" placeholder="Hobi">
            </div>
            <div class="input-group-btn"> 
              <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Hapus</button>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
      $(".add-more").click(function(){ 
          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });
      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });
    });
</script>
</body>
</html>