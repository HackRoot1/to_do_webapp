<?php 
    require("header.php");
?>

        <div class="dash-content">

            <div class="overview">
                <div class="title filter-options">
                    <div>
                        <i class="uil uil-filter"></i>
                        <span class="text">Filters</span>
                    </div>
                    <div id = "filter-close-open" style = "cursor: pointer">
                        <!-- <i class="uil uil-minus" id = "minus" style = "display: none"></i> -->
                        <i class="uil uil-minus" id = "minus"></i>
                    </div>
                </div>
            </div>

            <div class="boxes">
                <div class="filter-box">
                    <div class = "filter-options">
                        <select name="sorts" id="sorting-filters">
                            <option value="task_title">sort by name</option>
                            <option value="task_category">sort by category</option>
                            <option value="task_due_date">sort by date</option>
                        </select>
                    </div>

                    <div class = "filter-options">
                        <div>
                            <input type="checkbox" class = "checkboxBtn" value="all" id="all" checked>
                            <label for="all">All</label>
                        </div>
                        <div>
                            <input type="checkbox" class = "checkboxBtn" value="1" id="completed">
                            <label for="completed">completed</label>
                        </div>
                        <div>
                            <input type="checkbox" class = "checkboxBtn" value="0" id="pending">
                            <label for="pending">pending</label>
                        </div>
                    </div>
                    
                    <div class = "filter-options">
                        <select name="" id="">
                            <option value="">one</option>
                            <option value="">two</option>
                            <option value="">three</option>
                            <option value="">four</option>
                        </select>
                    </div>
                </div>
            </div>


            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-two"></i>
                    <span class="text">Tasks list</span>
                </div>

                <div id = "result-data">
                    <div class="success-result"></div>
                    <div class="error-result"></div>
                </div>


                <table class="activity-data">
                    <thead>
                        <tr>
                            <th class="data names">
                                <div class="data-title">Title</div>
                            </th>
                            <th class="data email">
                                <div class="data-title">Description</div>
                            </th>
                            <th class="data joined">
                                <div class="data-title">Category</div>
                            </th>
                            <th class="data type">
                                <div class="data-title">Due Date</div>
                            </th>
                            <th class="data status">
                                <div class="data-title">Status</div>
                            </th>
                            <th class="data status" style = "text-align: center">
                                <div class="data-title">Action</div>
                            </th>
                        </tr>
                    </thead>

                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>

    </section>
    <section id = "model">
        <div class="model-box">

        </div>
    </section>

    <!-- ======= external js link ======== -->
    <script src="assets/js/script.js"></script>

    <!-- ======== jquery link ========= -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- ajax code -->
    <!-- ajax code -->
    <script>
        $(document).ready(function(){


            // fetching all data and displaying in table
            function loadData(){
                $.ajax({
                    url : "fetch_all_data.php",
                    type : "POST",
                    success : function(data){
                        $(".activity-data tbody").html(data);
                    }
                });
            }


            loadData();


            // filter search using checkboxes
            $(document).on("click", ".checkboxBtn", function(){
                var id = [];
                $(":checkbox:checked").each(function(key){
                    id[key] = $(this).val();
                });

                if(id == ""){
                    loadData();
                }else{
                    $.ajax({
                        url : "filter_tasks_data.php",
                        type : "POST",
                        data : {id : id}, 
                        success : function(data){
                            if(data){
                                // alert(data);
                                $(".activity-data tbody").html(data);
                            }else{
                                $(".activity-data tbody").html("Only single data found");
                            }
                        }
                    });
                }
            });

            // deleting records data from table
            $(document).on("click", "#delete", function(){
                var id = $(this).data('did');
                $.ajax({
                    url : "delete_data.php",
                    type : "POST",
                    data : {id : id },
                    success : function(data){
                        if(data){
                            $("#result-data .success-result").html(data).slideDown(2000).slideUp(2000);
                            loadData();
                        }else{
                            $("#result-data .success-result").html(data).slideDown(2000).slideUp(2000);
                        }
                    }
                });
            });


            // editing record data from table
            $(document).on("click", "#edit", function(){
                var id = $(this).data('eid');
                // alert(id);
                $("#model").show();

                $.ajax({
                    url : "edit_data.php",
                    type : "POST",
                    data : {id : id },
                    success : function(data){
                        if(data){
                            $("#model .model-box").html(data);
                        }else{
                            alert("Something wrong");
                        }
                    }
                });
            });
            
            // closing popup box
            $(document).on("click",".close-btn", function(){
                $("#model").hide();
            });

            // editing data using model box
            $(document).on("click", "#save-data", function(){
                // alert($("#form-data").serialize());
                $.ajax({
                    url : "edit_task.php",
                    type : "POST",                    
                    data : $("#form-data").serialize(),
                    success : function(data){
                        $("#model").hide();
                        $("#result-data .success-result").html(data).slideDown(2000).slideUp(2000);
                        loadData();
                    }
                });
            });


            // Check task to complete mode
            $(document).on("click", "#complete", function(){
                var id = $(this).data('cid');
                // alert(id);
                $.ajax({
                    url : "task_modify.php",
                    type : "POST",
                    data : {id : id},
                    success : function(data){
                        $("#result-data .success-result").html(data).slideDown(2000).slideUp(2000);
                        loadData();
                    }
                });
            });


            // filter data based on options
            $(document).on("change", "#sorting-filters", function(){
                var sort_value = $(this).val();
                // alert(sort_value);
                $.ajax({
                    url : "sort_data.php",
                    type : "POST",
                    data : {sort : sort_value},
                    success : function(data){
                        $(".activity-data tbody").html(data);
                    }
                });
            });

            
        });
        
        // filter button + or - 
        $(document).on("click", "#filter-close-open:has(i#plus)", function(){
            $("#filter-close-open").html("<i class='uil uil-minus' id = 'minus'></i>");
            $(".boxes .filter-box").slideDown();
        });
        
        $(document).on("click", "#filter-close-open:has(i#minus)", function(){
            $("#filter-close-open").html("<i class='uil uil-plus' id = 'plus'></i>");
            $(".boxes .filter-box").slideUp();
        });
    </script>

<?php 
    require("footer.php");
?>