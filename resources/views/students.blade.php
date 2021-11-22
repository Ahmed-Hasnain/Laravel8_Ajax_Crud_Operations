@extends('app')
@section('page_title','Dashboard')
@section('dashboard_selected','active')
@section('container')
	


    <!-- Modal -->
<div class="modal fade" id="addStudentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      	<ul id="addStudent_form"></ul>

       <div class="form-group mb-3">
       		<label>Student name</label>
       		<input class="name form-control"></input>
       </div>
       <div class="form-group mb-3">
       		<label>Email</label>
       		<input class="email form-control"></input>
       </div>
       <div class="form-group mb-3">
       		<label>Phone Number</label>
       		<input class="phone form-control"></input>
       </div>
       <div class="form-group mb-3">
       		<label>Course</label>
       		<input class="course form-control"></input>
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary add_student">Save</button>
      </div>
    </div>
  </div>
</div>
    <!-- Modal  Ends-->

    <!-- Edit Modal Starts-->
<div class="modal fade" id="editStudentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      	<ul id="editStudent_form"></ul>

      	<input type="hidden" id="edit_stud_id">

       <div class="form-group mb-3">
       		<label>Student name</label>
       		<input class="name form-control" id="edit_name"></input>
       </div>
       <div class="form-group mb-3">
       		<label>Email</label>
       		<input class="email form-control" id="edit_email"></input>
       </div>
       <div class="form-group mb-3">
       		<label>Phone Number</label>
       		<input class="phone form-control" id="edit_phone"></input>
       </div>
       <div class="form-group mb-3">
       		<label>Course</label>
       		<input class="course form-control" id="edit_course"></input>
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary update_student">Update</button>
      </div>
    </div>
  </div>
</div>
    <!-- Edit Modal Ends-->


     <!-- Delete Modal Starts-->

<div class="modal fade" id="deleteStudentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<input type="hidden" id="delete_stud_id">
      	<h4>Are You Sure You Want To Delete This?</h4>

       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary delete_student">Yes</button>
      </div>
    </div>
  </div>
</div>

     <!-- Delete Modal Ends-->





<div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">

	    <div class="col-md-12">
	    	 <div id="success_msg" ></div>
	        <!-- DATA TABLE -->
	        <h3 class="title-5 m-b-35">data table</h3>
	        {{-- <button class="btn btn-primary float-right">Add Student</button> --}}
	       {{--  <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#mediumModal">Medium</button> --}}
	       <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addStudentModal">Add Students</button>

	        <div class="table-responsive table-responsive-data2">
	            <table class="table table-data2">
	                <thead>
	                    <tr>
	                       
	                        <th>Id</th>
	                        <th>name</th>
	                        <th>email</th>
	                        <th>Phone # </th>
	                        <th>Course</th>
	                        <th>status</th>
	                        <th>Action</th>
	                    </tr>
	                </thead>
	                <tbody>
	                    
	                </tbody>
	            </table>
	        </div>
	        <!-- END DATA TABLE -->
	    </div>

	    <!-- Button trigger modal -->


          </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

<script type="text/javascript">
	
	$(document).ready(function(){

////////////////////

  fetch_students();

//////////////////////////
//Fetching Student Data From DB and Displaying on table.

		function fetch_students(){
			$.ajax({
				type:"GET",
				url: "/fetch_student",
				dataType: "json",
				success: function(response){
					$('tbody').html("");
					$.each(response.student, function(key,item){

						$('tbody').append(`<tr class="tr-shadow">
	                    
	                        <td class=" text-uppercase">${item.id}</td>
	                        <td class="font-weight-bold text-uppercase">${item.name}</td>
	                        <td>
	                            <span class="block-email">${item.email}</span>
	                        </td>
	                        <td>${item.phone}</td>
	                        <td>
	                            <span class="status--process text-uppercase">${item.course}</span>
	                        </td>
	                        <td>True</td>
	                        <td>
	                            <div class="table-data-feature">
	                               
	                                <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" value="${item.id}" type="button" id="edit_student">
	                                    <i class="zmdi zmdi-edit"></i>
	                                </button>
	                                <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" value="${item.id}" type="button" id="delete_student">
	                                    <i class="zmdi zmdi-delete"></i>
	                                </button>
	                               
	                            </div>
	                        </td>
	                    </tr>
	                    <tr class="spacer"></tr>`);
					})
					

				}
			});
		}


		/////////////////////////
		//Model Open and Display Student data On Edit Button Click

		$(document).on('click','#edit_student',function(e){
			e.preventDefault();
			var stud_id = $(this).val();
			$('#editStudentModal').modal('show');

			$.ajax({
				type:"GET",
				url: "/edit_student/"+stud_id,
				success: function(response){

					if (response.status == 404) {
						$('#success_msg').html("");
						$('#success_msg').addClass('alert alert-success');
						$('#success_msg').text(response.error);
					}
					else{
						$('#edit_name').val(response.student.name);
						$('#edit_email').val(response.student.email);
						$('#edit_phone').val(response.student.phone);
						$('#edit_course').val(response.student.course);
						$('#edit_stud_id').val(stud_id);
					}
				}
		});

		});


		/////////////////////////
		//Update Student Data

		$(document).on('click','.update_student',function(e){
			e.preventDefault();
			$(this).text('Updating...');
			var stud_id = $('#edit_stud_id').val();
			var data={
				'name': $('#edit_name').val(),
				'email': $('#edit_email').val(),
				'phone': $('#edit_phone').val(),
				'course': $('#edit_course').val()
			}

			console.log(data);

			$.ajaxSetup({
 		   headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				    }
			});

			$.ajax({
				type:"PUT",
				url: "/update_student/"+stud_id,
				data: data,
				dataType: "json",
				success: function(response){

					if (response.status == 400) {
						$('#editStudent_form').html("");
						$.each(response.message, function(key,err_values){
								$('#editStudent_form').append('<li>'+err_values+'</li>');
								$('#editStudent_form').addClass('alert alert-danger');
						});
						$('.update_student').text('Update');
					}
					else{
						$('#success_msg').html("");
						$('#success_msg').addClass('alert alert-success');
						$('#success_msg').text(response.message);
						$('#editStudentModal').modal('hide');
						$('#editStudentModal').find('input').val('');
						$('.update_student').text('Update');
						fetch_students();

					}
         }
		});
		});

		//////////////////////////
		//Add Student Data 

		$(document).on('click','.add_student',function(e){
			e.preventDefault();
			var data={
				'name': $('.name').val(),
				'email': $('.email').val(),
				'phone': $('.phone').val(),
				'course': $('.course').val()
			}

			$.ajaxSetup({
 		   headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				    }
			});

			$.ajax({
				type:"POST",
				url: "/student",
				data: data,
				dataType: "json",
				success: function(response){

					if (response.status == 400) {
						$('#addStudent_form').html("");
						$.each(response.message, function(key,err_values){
								$('#addStudent_form').append('<li>'+err_values+'</li>');
								$('#addStudent_form').addClass('alert alert-danger');
						});
					}
					else{
						$('#success_msg').html("");
						$('#success_msg').addClass('alert alert-success');
						$('#success_msg').text(response.message);
						$('#addStudentModal').modal('hide');
						$('#addStudentModal').find('input').val('');
						fetch_students();

					}
				}
			});
		
		});


	/////////////////////////
	//Open Delete Modal On delete Button Click

		$(document).on('click','#delete_student',function(e){
			e.preventDefault();
			var stud_id = $(this).val();
			$('#delete_stud_id').val(stud_id);
			$('#deleteStudentModal').modal('show');		
	});


////////////////////////
//Delete student record from db on clicking yes


	$(document).on('click','.delete_student',function(e){
 
 		e.preventDefault();
 		$(this).text('Deleting...');
 		var stud_id = $('#delete_stud_id').val();

 		$.ajaxSetup({
 		   headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				    }
			});

		$.ajax({
				type:"DELETE",
				url: "/delete_student/"+stud_id,
				success: function(response){

					if (response.status == 404) {
						$('#success_msg').html("");
						$('#success_msg').addClass('alert alert-danger');
						$('#success_msg').text(response.error);
						$('#deleteStudentModal').modal('hide');
						$('.delete_student').text('Yes');
						fetch_students();

					}
					else{
						$('#success_msg').html("");
						$('#success_msg').addClass('alert alert-success');
						$('#success_msg').text(response.student);
						$('#deleteStudentModal').modal('hide');
						$('.delete_student').text('Yes');
						fetch_students();
					}
				}
		});
			

 });

//////////////////////////////////



	});
	
</script>
@endsection


