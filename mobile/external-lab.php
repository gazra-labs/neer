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
                        <label>Location</label>
                        <input type="text" class="form-control" placeholder="28.4589765,77.26599">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6 p-l-0">
                                <label>Current Date</label>
                                <input type="date" class="form-control" placeholder="Date">
                            </div>
                            <div class="col-6 p-r-0">
                                <label>Current Time</label>
                                <input type="time" class="form-control" placeholder="Time">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Lab Name </label>
                        <input type="text" class="form-control" placeholder="Lab Name">
                    </div>
                    <div class="form-group">
                        <label>Sample Number</label>
                        <input type="text" class="form-control" placeholder="Sample Number">
                    </div>
                    <div class="form-group">
                        <label>Select Fields</label>
                        <input type="text" class="form-control" placeholder="Select Fields">
                    </div>
                    <div class="form-group row">
                        <label>Test Status</label>
                        <div class="col-12">
                            <select class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                <option>Select</option>
                                <option value="pending">Pending</option>
                                <option value="done">Done</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Comments</label>
                        <textarea class="form-control" name="" id="" cols="30" rows="5" placeholder="Comment"></textarea>
                    </div>
                    <div class="form-group text-center">
                        <button type="button" class="btn btn-success">Save</button>
                        <button type="button" class="btn btn-cyan">Submit</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    
    
    
</div>

<?php include_once "footer.php" ?>