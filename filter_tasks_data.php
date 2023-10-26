<?php
    require("config.php");
    session_start();
    $filters = $_POST['id'];

    if($filters == "All"){
        $filters_data = "all";
    }elseif($filters == "Active"){
        $filters_data = "all";
    }elseif($filters == "Pending"){
        $filters_data = "0";
    }elseif($filters == "Completed"){
        $filters_data = "1";
    }


    // $filters_data = implode(', ', $filters);

    if($filters_data != "all"){

        $query = "SELECT * FROM tasks  WHERE user_id = {$_SESSION['id']} AND task_status In ($filters_data)";
        // foreach ($filters as $key => $value){
        //     if(count($filters) == 1){
        //         $query .= "'" .$value. "'";
        //     }elseif($value == end($filters)){
        //         $query .= "'" .$value. "'";
        //     }else{
        //         $query .= "'" .$value. "', ";
        //     }
        // }
        // $query .= ")";
    }else{
        $filters_data = "0, 1";
        $query = "SELECT * FROM tasks  WHERE user_id = {$_SESSION['id']} AND task_status In ($filters_data)";
    }
    
    
    
    $fetch_tasks = mysqli_query($conn, $query) or die("Query FAiled");
    
    
    if (mysqli_num_rows($fetch_tasks) > 0) {
        while ($tasks_list_data = mysqli_fetch_assoc($fetch_tasks)) {
        ?>        
            <tr>
                <td class="data names">
                    <div class="data-list"><?php echo $tasks_list_data['task_title'] ?></div>
                </td>
                <td class="data email">
                    <div class="data-list"><?php echo $tasks_list_data['task_description'] ?></div>
                </td>
                <td class="data joined">
                    <div class="data-list"><?php echo $tasks_list_data['task_category'] ?></div>
                </td>
                <td class="data type">
                    <div class="data-list"><?php echo $tasks_list_data['task_due_date'] ?></div>
                </td>
                <td class="data status">
                    <div class="data-list"><?php echo $tasks_list_data['task_status'] == 0 ? "Pending" : "Completed" ?></div>
                </td>
                <td class="data status">

                    <div class="data-list">
                        <button id = "complete" data-cid = "<?php echo $tasks_list_data['id']; ?>">
                            <i class="uil uil-check"></i>
                            <!-- Edit -->
                        </button>
                        <button id = "edit" data-eid = "<?php echo $tasks_list_data['id']; ?>">
                            <i class="uil uil-edit"></i>
                            <!-- Edit -->
                        </button>
                        <button id = "delete" data-did = "<?php echo $tasks_list_data['id'];  ?>">
                            <i class="uil uil-trash-alt"></i>
                            <!-- Delete -->
                        </button>
                    </div>
                </td>
            </tr>
        <?php 
        } 

    }else{
    ?>
        <tr>
            <td class="data names" colspan="5" style="text-align: center">
                <div class="data-list">No records Found</div>
            </td>
        </tr>
    <?php
    }
    
    mysqli_close($conn);
?>