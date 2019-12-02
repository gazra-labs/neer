<?php include_once "header.php" ?>
<div class="container-fluid" style="padding:0px;">
    <!-- ============================================================== -->
    <!-- Sales Cards  -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- Column -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title m-b-0">Field Survey</h5>
                    <div class="form-group m-t-20">
                        <label>Current Location With Area </label>
                        <div class="form-control">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.30600837636!2d-74.25987068303986!3d40.69714940675332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1574773220108!5m2!1sen!2sin" style="max-width:100% !important; min-width:100% !important;" width="800" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <div class="form-group m-t-20">
                        <label>Nearby Locality </label>
                        <input type="text" class="form-control" placeholder="Nearby Locality">
                    </div>
                    <div class="form-group">
                        <label>Select Inlet Source </label>
                        <input type="text" class="form-control" placeholder="Select Inlet Source">
                    </div>
                    <div class="form-group">
                        <label>Select DMA </label>
                        <input type="text" class="form-control" placeholder="Select DMA">
                    </div>
                    <div class="form-group">
                        <label>SR Name </label>
                        <input type="text" class="form-control" placeholder="SR Name">
                    </div>
                    <div class="form-group">
                        <label>Ward Number </label>
                        <input type="text" class="form-control" placeholder="Ward Number">
                    </div>
                    <div class="form-group">
                        <label>Select Surevy Field</label>
                        <input type="text" class="form-control" placeholder="Select Survey Field">
                    </div>
                    <div class="form-group">
                        <label>Comments</label>
                        <textarea class="form-control" name="" id="" cols="30" rows="5" placeholder="Comment"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Surevy Photo</label>
                        <input type="file" class="form-control" placeholder="Select Survey Photo">
                    </div>
                    <div class="form-group text-center">
                        <button type="button" class="btn btn-danger">Report</button>
                        <button type="button" class="btn btn-success">Save</button>
                        <button type="button" class="btn btn-cyan">Submit</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    
    
    
</div>

<?php include_once "footer.php" ?>