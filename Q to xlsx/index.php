<?php
	$sets = null;
	if(isset($_POST["submit"])){
		$texts = $_POST["data"];
		$data_array = explode("\n", $texts);
		$sets = array_chunk($data_array, 7);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Excel Format Conversion for the Question</title>
	
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <style>
        ol {padding-left: 20px;}
        ol li {line-height: 30px;}
    </style>
</head>
	<body>
	   <section class="container-fluid">
	       <div class="row mt-3">
	           <div class="col-lg-12 text-center text-danger"><h1>Excel Format Conversion for the Question</h1><hr/></div>
	       </div>
	       
	       <div class="row mt-3">

	           <div class="col-lg-6">
	               <form action="" method="post">
	                    <label class="font-weight-bold">Input Box</label>
            			<textarea name="data" id="" class="w-100 form-control" rows="10" placeholder="Please paste the Questions Here.."></textarea>
            			<input type="submit" name="submit" value="Submit Questions" class="btn btn-primary mt-2">
            	   </form>
	           </div>

	           <div class="col-lg-6">
	               <h3 class="mt-2">How it works?</h3>
	               <ol>
                      <li>Once you have to install table capture adons into your browser.
                         <u><a href="https://chrome.google.com/webstore/detail/table-capture/iebpjdmgckacbodjpijphcplhebcmeop?hl=en" target="_blank">
                             Click Here
                        </a></u>  
                      </li>
                      <li>Please paste the Questions in the input box</li>
                      <li>Then click the submit button</li>
                      <li>Then right click on the table and click Table Capture -Display inline text</li>
                      <li>Finally Copy the question into MS Excel to Upload</li>
                    </ol>
                    
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
                        See the Video Tutorial
                    </button>
                    
                      <!-- The Modal -->
                      <div class="modal" id="myModal">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                          <div class="modal-content">
                          
                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title">How it works?</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            
                            <!-- Modal body -->
                            <div class="modal-body">
                             <iframe class="w-100" height="400" src="https://www.youtube.com/embed/7bjbMhhQkNU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            
                            <!-- Modal footer -->
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                            
                          </div>
                        </div>
                      </div>
	           </div>
	       </div>

	       <div class="row mt-3">
	           <div class="col-lg-12">
	               <?php if($sets!=null){ ?>
        			<div class="table-responsive">
        			    <table class="table table-bordered table-striped">
            				<tr>
            					<th>Question</th>
            					<th>A</th>
            					<th>B</th>
            					<th>C</th>
            					<th>D</th>
            					<th>E</th>
            					<th>Answer</th>
            					<th>Explanation</th>
            					<th>Reference</th>
            				</tr>
            				<?php foreach ($sets as $key => $value) { ?>
            				<tr>
            					<?php foreach ($value as $key => $data) { ?>
            					<td><?php echo $data; ?></td>
            					<?php } ?>
            					<td></td>
            					<td></td>
            					<td></td>
            				</tr>
            				<?php } ?>
            			</table>
        			</div>
        			<?php } ?>
	           </div>
	       </div>
	   </section>  
	</body>
</html>