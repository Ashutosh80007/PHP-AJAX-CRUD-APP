<?php

    $conn = mysqli_connect("localhost","root","","phpcrud");

    if(isset($_POST['checking_add']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $class = $_POST['class'];
        $department = $_POST['department'];

        $query = "INSERT INTO students (fname,lname,class,department) VALUES('$fname','$lname','$class','$department')";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo $return = "Successfully Stored";
        }
        else
        {
            echo $return = "Something went wrong";
        }
    }


    // view button
    if(isset($_POST['checking_view']))
    {
        $stud_id = $_POST['stud_id'];
        $result_array = [];

        $query = "SELECT * FROM students WHERE id='$stud_id' ";
        $query_run = mysqli_query($conn, $query);

        if(mysqli_num_rows($query_run) > 0)
        {
            foreach($query_run as $row)
            {
                array_push($result_array, $row);
            }
            header('Content-type: application/json');
            echo json_encode($result_array);
        }
        else
        {
            echo $return = "No Record Found. !";
        }
    }

    // Edit Button
    if(isset($_POST['checking_edit']))
    {
        $stud_id = $_POST['stud_id'];
        $result_array = [];

        $query = "SELECT * FROM students WHERE id='$stud_id' ";
        $query_run = mysqli_query($conn, $query);

        if(mysqli_num_rows($query_run) > 0)
        {
            foreach($query_run as $row)
            {
                array_push($result_array, $row);
            }
            header('Content-type: application/json');
            echo json_encode($result_array);
        }
        else
        {
            echo $return = "No Record Found. !";
        }
    }

    // Update Data
    if(isset($_POST['checking_update']))
    {
        $id = $_POST['stud_id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $class = $_POST['class'];
        $department = $_POST['department'];

        $query = "UPDATE students SET fname='$fname', lname='$lname', class='$class', department='$department' WHERE id='$id' ";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo $return = "Successfully Updated";
        }
        else
        {
            echo $return = "Something went wrong";
        }
    }

    // Delete button
    if(isset($_POST['checking_delete']))
    {
        $id = $_POST['stud_id'];
        $query = "DELETE FROM students WHERE id='$id' ";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo $return = "Successfully Deleted";
        }
        else
        {
            echo $return = "Something went wrong";
        }
    }

?>
