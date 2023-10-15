<?php 
    require("header.php");
    require("config.php");
?>

    <div class="dash-content">
        <div class="overview">
            <div class="title">
                <i class="uil uil-plus-circle"></i>
                <span class="text">Add New Task</span>
            </div>
        </div>

        <div id = "result-data">
            <div class="success-result"></div>
            <div class="error-result"></div>
        </div>

        <form id = "form-data">
            <div>
                <label for="taskTitle">Task Title</label>
                <input type="text" id = "taskTitle" name = "task_title">
            </div>
            <div>
                <label for="taskDescription">Task Description</label>
                <input type="text" id = "taskDescription" name = "task_description">
            </div>
            <div>
                <label for="dueDate">Due Date</label>
                <input type="date" id = "dueDate" name = "due_date">
            </div>
            <div>
                <label for="category">Category</label>
                <input type="text" id = "category" name = "category">
            </div>
            <div>
                <div class = "form-btn">
                    <input type="reset" name = "reset">
                    <button id = "submitBtn">Submit</button>
                </div>
            </div>
        </form>

        <!-- ======== jquery link ========= -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    
        <script>

            $(document).ready(function(){
                $("#submitBtn").click(function(){
                    $.ajax({
                        url : "add_task_data.php",
                        type : "POST",
                        data : $("#form-data").serialize(),
                        success : function(data){
                            $("#result-data .success-result").html(data).slideDown(2000).slideUp(2000);
                        }
                    });
                });
            });
        </script>
    </div>
<?php 
    require("footer.php");
?>