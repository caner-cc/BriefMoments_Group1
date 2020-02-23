<?php include 'includes/header.php';?>
<?php include 'includes/menu.php'; ?>
    <!--<div class="row">First block starts-->
<div class="container">
  <div class="myborder">
      <div class="col-12 box1">
        <p><h1>Thanks for visiting us!</h1></p>
        <p>If you have questions, don't hesitate to contact us!</p>
      </div>
    <div class="col-12 box1">
      <div>
        <p>You can reach us by</p>
      </div>
      <div class="row">
        <div class="col-12 col-sm-4">
            <p class="phone">Phone +36605123456</p>
            <!--<img src="phonepicto.png" alt="phone">-->
            <i class="fa fa-phone fa-5x" aria-hidden="true"></i>
        </div>
        <div class="col-12 col-sm-4">
        </div>
        <div class="col-12 col-sm-4">
            <p class="mail">email ouremail@gmail.com</p>
            <!--<img src="emailpicto.png" alt="email">-->
            <i class="fa fa-envelope-o fa-5x" aria-hidden="true"></i>
        </div>
      </div>
    </div>
  </div>
</div>
    <!--First block end-->
    <div class="navtainer">
    <div class="container">
    <div class="col-12 col-sm-12" id="form_cont">
      <div class="col-12 box123">
        <p>Or get an offer, by filling out the form below</p>
      </div>
      <form method="POST" action="create.php" enctype='multipart/form-data'>
        <div class="col-12 col-sm-12 box">
          <div class="row row1">
            <div class="col-sm-8 col-12">
              <div class="form-group row was-validated">
                <label for="inputName" class="col-sm-2 col-12 col-form-label">Name:</label>
                <div class="col-sm-10 col-12">
                  <input type="text" class="form-control" id="inputName" placeholder="Name" name="name" required>
                  <div class="invalid-feedback">
                    Please provide a valid name.
                  </div>
                </div>
              </div>

              <div class="form-group row was-validated">
                <label for="inputEmail" class="col-sm-2 col-12 col-form-label">Email:</label>
                <div class="col-sm-10 col-12">
                  <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email" required>
                  <div class="invalid-feedback">
                    Please provide a valid email.
                  </div>
                </div>
              </div>

              <div class="form-group row was-validated">
                <label for="inputPhone" class="col-sm-2 col-12 col-form-label">Phone:</label>
                <div class="col-sm-10 col-12">
                  <input type="number" class="form-control" id="inputPhone" placeholder="Phone" name="phone" required>
                  <div class="invalid-feedback">
                    Please provide a phone number.
                  </div>
                </div>
              </div>

              <div class="form-group row was-validated">
                <label for="inputName" class="col-sm-2 col-12 col-form-label">Company:</label>
                <div class="col-sm-10 col-12">
                  <input type="text" class="form-control" id="inputCompany" placeholder="Company" name="comp_name"  required>
                  <div class="invalid-feedback">Please provide a company name.
                  </div>
                </div>
              </div>

              <div class="form-group row">
                <label for="inputFile" class="col-sm-6 col-12 col-form-label">Upload Layout (if you have)</label>
                <div class="col-sm-6 col-12">
                  <input type="file" class="form-control-file" id="inputFile" placeholder="inputFile" name="file1">
                </div>
              </div>
              <p>What services do you need?</p>


              <div class="row" style="text-align:center">
                <div class="form-check  col-sm-4 col-12">
                  <input class="form-check-input" type="checkbox" value="Design" id="Check1" name="Design">
                  <label class="form-check-label" for="Check1">
                    Design
                  </label>
                </div>
                <div class="form-check col-sm-4 col-12">
                  <input class="form-check-input" type="checkbox" value="Frontend" id="Check2" name="Frontend">
                  <label class="form-check-label" for="Check1">
                    Frontend
                  </label>
                </div>
                <div class="form-check col-sm-4 col-12">
                  <input class="form-check-input" type="checkbox" value="Backend" id="Check3" name="Backend">
                  <label class="form-check-label" for="Check1">Backend</label>
                </div>
              </div>

            </div>

            <div class="col-sm-4 col-12">
              <p>Write briefly about your ideas, company etc.:</p>
              <textarea id="tarea" rows="12" cols="" name="letter"></textarea>
              <input type="submit" value="Send" class="btn btn-primary" id="send">
            </div>
          </div>
        </form>  
      </div>
    

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Information window</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           Data is added.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'includes/footer.php';?>