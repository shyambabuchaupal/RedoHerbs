<?php include 'includes/header.php';?>
<div class="ContactPage">
    <div class="col-lg-8 bg-white rounded p-4" style='box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'>
        <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">Your name</label>
                <input type="text" class="form-control" id="validationCustom01" style='box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;' required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Your email address<span style='color:red;'>*</span></label>
                <input type="text" class="form-control" id="validationCustom02" style='box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;' required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
           
            <div class="col-md-6">
                <label for="validationCustom03" class="form-label">Contact Number<span style='color:red;'>*</span></label>
                <input type="number" class="form-control" style='box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;' id="validationCustom03" required>
                <div class="invalid-feedback">
                    Please provide a valid city.
                </div>
            </div>
            
            <div class="col-md-6">
                <label for="validationCustom05" class="form-label">
                Order Number</label>
                <input type="text" class="form-control" id="validationCustom05" style='box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;' required>
                <div class="invalid-feedback">
                    Please provide a valid zip.
                </div>
            </div>
            <div class="col-md-12">
                <label for="validationCustom05" class="form-label">
                Messages...</label>
                
                    <textarea type='text' rows='3' cols='30' name="" id="" class="form-control" style='box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;' required></textarea>
                <div class="invalid-feedback">
                    Please provide a valid zip.
                </div>
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" style='box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;' required>
                    <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary w-25" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
<?php include 'includes/footer.php';?>