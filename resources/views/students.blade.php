@extends('app')
@section('page_title','Dashboard')
@section('dashboard_selected','active')
@section('container')
	


    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">

	    <div class="col-md-12">
	        <!-- DATA TABLE -->
	        <h3 class="title-5 m-b-35">data table</h3>
	        {{-- <button class="btn btn-primary float-right">Add Student</button> --}}
	       {{--  <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#mediumModal">Medium</button> --}}
	       <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Add Students</button>
	        <div class="table-responsive table-responsive-data2">
	            <table class="table table-data2">
	                <thead>
	                    <tr>
	                       
	                        <th>name</th>
	                        <th>email</th>
	                        <th>Phone # </th>
	                        <th>Course</th>
	                        <th>status</th>
	                        <th></th>
	                    </tr>
	                </thead>
	                <tbody>
	                    <tr class="tr-shadow">
	                    
	                        <td>Lori Lynch</td>
	                        <td>
	                            <span class="block-email">lori@example.com</span>
	                        </td>
	                        <td>03225555205</td>
	                        <td>
	                            <span class="status--process">Processed</span>
	                        </td>
	                        <td>$679.00</td>
	                        <td>
	                            <div class="table-data-feature">
	                               
	                                <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
	                                    <i class="zmdi zmdi-edit"></i>
	                                </button>
	                                <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
	                                    <i class="zmdi zmdi-delete"></i>
	                                </button>
	                               
	                            </div>
	                        </td>
	                    </tr>
	                    <tr class="spacer"></tr>
	                    <tr class="tr-shadow">
	                    
	                        <td>Lori Lynch</td>
	                        <td>
	                            <span class="block-email">lori@example.com</span>
	                        </td>
	                        <td>03225555205</td>
	                        <td>
	                            <span class="status--process">Processed</span>
	                        </td>
	                        <td>$679.00</td>
	                        <td>
	                            <div class="table-data-feature">
	                               
	                                <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
	                                    <i class="zmdi zmdi-edit"></i>
	                                </button>
	                                <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
	                                    <i class="zmdi zmdi-delete"></i>
	                                </button>
	                               
	                            </div>
	                        </td>
	                    </tr>
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
	
	
	
</script>
@endsection


