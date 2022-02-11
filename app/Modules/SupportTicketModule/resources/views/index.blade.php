@extends('dashboard') @section('title','User List')

@section('css')
@stop

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success" id="success_msg">
            <p>{{ $message }}</p>
        </div>
    @endif
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 align-self-center">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Support Tickets</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="#">Support Tickets</a></li>
                            <li class="breadcrumb-item"><a href="#">Ticket List</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- basic table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Ticket List</h4>
                        <div class="table-responsive">

                            <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                <thead>
                                <tr>
                                    <th>reference ID</th>
                                    <th>Name</th>
                                    <th>Description </th>
                                    <th>Email</th>
                                    <th>Mobile No </th>
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php $i = 1; ?>
                                @foreach ($data as $ticket)

                                    <tr>
                                    <td>{{ $ticket->ref_id }}</td>
                                    <td>{{ $ticket->customer_name }}</td>
                                    <td>{{ $ticket->description }}</td>
                                    <td>{{ $ticket->customer_email }}</td>
                                    <td>{{ $ticket->customer_contact_no }}</td>
                                    <td>
                                        @if($ticket->status == 0)

                                            Closed

                                        @elseif($ticket->status ==1)

                                            Initial

                                        @elseif($ticket->status ==2)

                                            Inprogress

                                    @endif
                                    </td>
                                    <td>
                                        @if($ticket->status == 1 ||	$ticket->status == 2)

                                             <!-- Button to invoke the modal -->
                                            <button type="button" class="btn btn-primary replyModal
                                                btn-sm" data-toggle="modal" data-id="{{$ticket->ref_id}}"
                                                data-target="#replyModal">
                                                Open
                                            </button>

                                        @else

                                            Replied

                                        @endif
                                    </td>
                                </tr>
                                <?php $i++; ?>
                                @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>reference ID</th>
                                    <th>Name</th>
                                    <th>Description </th>
                                    <th>Email</th>
                                    <th>Mobile No </th>
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="modal-view-area">
        <div id="replyModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header small-dialog-header">
                        <h3>Reply</h3>
                        <button type="button" id = "submit" data-dismiss="modal"  class="close" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="tabs-container alt">
                            <div class="tab-content">
                                <div class="tab-pane fade show active">


                                    <div class="row">
                                        <div class="col-md-12">

                                            <label for="comment">
                                                <textarea rows="4" cols="50" name="comment" onkeyup="isEmpty()" id="comment"></textarea>
                                                @if($errors->has('comment'))
                                                <label id="label-error" style="color: red" class="error"
                                                        for="permission">{{$errors->first('comment')}}</label>
                                                @endif
                                            </label>
                                            <input type="hidden" name="ref_id" id="ref_id" value=""/>
                                        </div>
                                    </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary" name ="inprogress" id="inprogress"  disabled="disabled" onclick="replyTicket('inprogress')">Inprogress</button>
                                            <button type="submit" class="btn btn-danger" name = "complete"  id="complete"   disabled="disabled" onclick="replyTicket('complete')">Complete</button>
                                        </div>

                                </div>
                            </div>
                        </div>
                </div>

            </div>
        </div>
    </div>

@stop

@section('js')

<script type="text/javascript">

    $(document).on("click", ".replyModal", function () {
        var refId = $(this).data('id');
        $(".modal-body #ref_id").val(refId);
    });

    function replyTicket($val){
        var val = $val;
        if(val=='inprogress'){

            var status = '2'

        }else{

            var status = '0'

        }
        var ref_id = $('#ref_id').val();
        var comment = $('#comment').val();

        $.ajax({
            url: "{{url('/ticket/reply')}}",
            type:"POST",
            data:{
                "_token": "{{csrf_token() }}",
                ref_id:ref_id,
                status:status,
                comment:comment,
            },
            success:function(response){

                window.location.href = "{{url('/ticket/list')}}";
                $('#success_').text("new dialog title");
            }
        });

    }

    function isEmpty(){
            if( document.getElementById('comment').value.length > 0) {
                document.getElementById('inprogress').disabled = false;
                document.getElementById('complete').disabled = false;
            } else {
                document.getElementById('inprogress').disabled = true;
                document.getElementById('complete').disabled = true;
            }
        }

</script>
@stop

