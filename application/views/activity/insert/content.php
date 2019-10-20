<div class="container">
    <h3>เพิ่มกิจกรรม</h3>
    <br>
    <div class="row">
        <div class="col-md-12">
            <form>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="exampleInputEmail1">ชื่อกิจกรรม</label>
                        <input type="text" class="form-control" name="activity_name" placeholder="ชื่อกิจกรรม" required>
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="exampleInputEmail1">วันที่เริ่มกิจกรรม</label>
                        <input type="text" class="form-control" name="start_date" id="start_date" placeholder="วันที่เริ่มกิจกรรม">
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="exampleInputEmail1">วันที่สิ้นสุดกิจกรรม</label>
                        <input type="text" class="form-control" name="end_date" id="end_date" placeholder="วันที่สิ้นสุดกิจกรรม">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    <button class="btn btn-success" type="submit">บันทึก</button>
                    <a href="<?php echo base_url('/activity/'); ?>" class="btn btn-outline-secondary" type="button">ยกเลิก</a>
                    </div>
                </div>    
            </form>
        </div>    
    </div> 