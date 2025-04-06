<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>PHP - AJAX - CRUD</title>
  </head>
  <body>
  <!-- Add Modal -->
<div class="modal fade" id="Student_AddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Student Data using JQuery Ajax in php without page reload</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <div class="error-message">

            </div>
          </div>
          <div class="col-md-6">
            <label for="">First Name</label>
            <input type="text" class="form-control fname">
          </div>
          <div class="col-md-6">
            <label for="">Last Name</label>
            <input type="text" class="form-control lname">
          </div>
          <div class="col-md-6">
            <label for="">Class</label>
            <input type="text" class="form-control class">
          </div>
          <div class="col-md-6">
            <label for="">Department</label>
            <input type="text" class="form-control department">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary student_add_ajax">Save</button>
      </div>
    </div>
  </div>
</div>

<!-- View Modal -->
<div class="modal fade" id="StudentViewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Student Detail View</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4 class="id_view"></h4>
        <h4 class="fname_view"></h4>
        <h4 class="lname_view"></h4>
        <h4 class="class_view"></h4>
        <h4 class="department_view"></h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="StudenteditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Student Data without page reload</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <input type="hidden" id="id_edit">

          <div class="col-md-12">
            <div class="error-message-update">

            </div>
          </div>
          <div class="col-md-6">
            <label for="">First Name</label>
            <input type="text" id="edit_fname" class="form-control">
          </div>
          <div class="col-md-6">
            <label for="">Last Name</label>
            <input type="text" id="edit_lname" class="form-control">
          </div>
          <div class="col-md-6">
            <label for="">Class</label>
            <input type="text" id="edit_class" class="form-control">
          </div>
          <div class="col-md-6">
            <label for="">Department</label>
            <input type="text" id="edit_department" class="form-control">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary student_update_ajax">Update</button>
      </div>
    </div>
  </div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="StudentDeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm and Delete Student Data without page reload</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <input type="hidden" id="id_delete">

          <div class="col-md-12">
            <h4>Are you sure want to delete this data ?</h4>
          </div>
          
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger student_delete_ajax">Yes, Delete</button>
      </div>
    </div>
  </div>
</div>

<!-- Output Design code -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>PHP - AJAX - CRUD | How to Fetch Data from database using jQuery AJAX
                        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#Student_AddModal">
                          Add 
                        </button>

                        </h4>
                    </div>
                    <div class="card-body">
                      <div class="message-show">

                      </div>
                        <table class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Class</th>
                              <th>Department</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody class="studentdata">
                            
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
     <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


    <script>
        $(document).ready(function () {
          getdata();

          // Confirm and Delete
          $('.student_delete_ajax').click(function (e) {
            e.preventDefault();

              var stud_id = $('#id_delete').val();
              
              $.ajax({
                  type: "POST",
                  url: "ajax-crud/code.php",
                  data: {
                      'checking_delete': true,
                      'stud_id': stud_id,
                  },
                  success: function (response){
                        
                        $('#StudentDeleteModal').modal('hide');
                        $('.message-show').append('\
                            <div class="alert alert-success alert-dismissible fade show" role="alert">\
                              <strong>Hey!</strong> '+response+'.\
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
                                <span aria-hidden="true">&times;</span>\
                              </button>\
                            </div>\
                          ');
                          $('.studentdata').html("");
                          getdata();
                  }
              });

          });

            $(document).on("click", ".delete_btn", function (){
                var stud_id = $(this).closest('tr').find('.stud_id').text();
                $('#id_delete').val(stud_id)
                $('#StudentDeleteModal').modal('show');
  
                // For direct Delete
                // $.ajax({
                //   type: "POST",
                //   url: "ajax-crud/code.php",
                //   data: {
                //       'checking_delete': true,
                //       'stud_id': stud_id,
                //   },
                //   success: function (response){
                //         // console.log(response);
                //         $('#StudentDeleteModal').modal('hide');
                //         $('.message-show').append('\
                //             <div class="alert alert-success alert-dismissible fade show" role="alert">\
                //               <strong>Hey!</strong> '+response+'.\
                //               <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
                //                 <span aria-hidden="true">&times;</span>\
                //               </button>\
                //             </div>\
                //           ');
                //           $('.studentdata').html("");
                //           getdata();
                //   }
                // });
            });


            // Update Data
            $('.student_update_ajax').click(function (e) {
              e.preventDefault();

              var stud_id = $('#id_edit').val();
              var fname = $('#edit_fname').val();
              var lname = $('#edit_lname').val();
              var stu_class = $('#edit_class').val();
              var department = $('#edit_department').val();

              if(fname !='' & lname !='' & stu_class !='' & department !='')
              {
                $.ajax({
                  type: "POST",
                  url: "ajax-crud/code.php",
                  data: {
                    'checking_update':true,
                    'stud_id': stud_id,
                    'fname': fname,
                    'lname': lname,
                    'class': stu_class,
                    'department': department,
                  },
                  success: function (response) {

                    $('#StudenteditModal').modal('hide');
                    $('.message-show').append('\
                    <div class="alert alert-success alert-dismissible fade show" role="alert">\
                      <strong>Hey!</strong> '+response+'.\
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
                        <span aria-hidden="true">&times;</span>\
                      </button>\
                    </div>\
                    ');
                    $('.studentdata').html("");
                    getdata();
                  }
                });
              }
              else
              {
                
                $('.error-message-update').append('\
                <div class="alert alert-warning alert-dismissible fade show" role="alert">\
                  <strong>Hey!</strong> Please enter all fields.\
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
                    <span aria-hidden="true">&times;</span>\
                  </button>\
                </div>\
                ');
              } 
              
            });


            // Edit Button Code
            $(document).on("click", ".edit_btn", function (){
                var stud_id = $(this).closest('tr').find('.stud_id').text();

                $.ajax({
                  type: "POST",
                  url: "ajax-crud/code.php",
                  data: {
                      'checking_edit': true,
                      'stud_id': stud_id,
                  },
                  success: function (response){
                  
                        $.each(response, function (key,studedit){
                          
                          $('#id_edit').val(studedit['id']);
                          $('#edit_fname').val(studedit['fname']);
                          $('#edit_lname').val(studedit['lname']);
                          $('#edit_class').val(studedit['class']);
                          $('#edit_department').val(studedit['department']);
                        });
                        $('#StudenteditModal').modal('show');
                  }
                });
            });


            // View Button code
            $(document).on("click", ".viewbtn", function (){
                var stud_id = $(this).closest('tr').find('.stud_id').text();

                $.ajax({
                  type: "POST",
                  url: "ajax-crud/code.php",
                  data: {
                      'checking_view': true,
                      'stud_id': stud_id,
                  },
                  success: function (response){
                        
                        $.each(response, function (key,studview){
                          
                          $('.id_view').text(studview['id']);
                          $('.fname_view').text(studview['fname']);
                          $('.lname_view').text(studview['lname']);
                          $('.class_view').text(studview['class']);
                          $('.department_view').text(studview['department']);
                        });
                        $('#StudentViewModal').modal('show');
                  }
                });
            });


            // Add button code
            $('.student_add_ajax').click(function (e) {
              e.preventDefault();

              var fname = $('.fname').val();
              var lname = $('.lname').val();
              var stu_class = $('.class').val();
              var department = $('.department').val();

              if(fname !='' & lname !='' & stu_class !='' & department !='')
              {
                $.ajax({
                  type: "POST",
                  url: "ajax-crud/code.php",
                  data: {
                    'checking_add':true,
                    'fname': fname,
                    'lname': lname,
                    'class': stu_class,
                    'department': department,
                  },
                  success: function (response) {
                    
                    $('#Student_AddModal').modal('hide');
                    $('.message-show').append('\
                    <div class="alert alert-success alert-dismissible fade show" role="alert">\
                      <strong>Hey!</strong> '+response+'.\
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
                        <span aria-hidden="true">&times;</span>\
                      </button>\
                    </div>\
                    ');
                    $('.studentdata').html("");
                    getdata();
                    $('.fname').val("");
                    $('.lname').val("");
                    $('.class').val("");
                    $('.department').val("");

                  }
                });
              }
              else
              {
                
                $('.error-message').append('\
                <div class="alert alert-warning alert-dismissible fade show" role="alert">\
                  <strong>Hey!</strong> Please enter all fields.\
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
                    <span aria-hidden="true">&times;</span>\
                  </button>\
                </div>\
                ');
              } 
              
            });

        });

        // fetching data using this code
        function getdata()
          {
            $.ajax({
              type: "GET",
              url: "ajax-crud/fetch.php",
              success: function (response) {
                // console.log(response);
                $.each(response, function(key, value){
                    // console.log(value['fname']);
                    $('.studentdata').append('<tr>'+
                              '<td class="stud_id">'+value['id']+'</td>\
                              <td>'+value['fname']+'</td>\
                              <td>'+value['lname']+'</td>\
                              <td>'+value['class']+'</td>\
                              <td>'+value['department']+'</td>\
                              <td>\
                                <a href="#" class="badge btn-info viewbtn">VIEW</a>\
                                <a href="#" class="badge btn-primary edit_btn">EDIT</a>\
                                <a href="#" class="badge btn-danger delete_btn">DELETE</a>\
                              </td>\
                            </tr>');
                });
              }
            });
        }
    </script>

  </body>
</html>