<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="//cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
</head>
<body>
    <div class="container" style="justify-content: between;text-align:center;padding:10px">
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered yajra-datatable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Describe</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
    
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="//cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>


<script type="text/javascript">
    
    $(document).ready(function(){
        $(function () {
            var table = $('.yajra-datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('message.list') }}",
                columns: [
                    {data: 'name', name: 'name' },
                    {data: 'email', name: 'email'},
                    {data: 'subject', name: 'subject'},
                    {data: 'describe', name: 'describe'},
                    {
                        data: 'action', 
                        name: 'action', 
                        orderable: true, 
                        searchable: true,
                        
                    },
                ],
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                responsive: true,
            });
        });
        
        $(document).on('click','#deleteMessage',function(){
            var message_id = $(this).data('id');
            var url = '<?= route("message.delete") ?>';
            swal.fire({
                title:'Are you sure?',
                html:'you want to <b>delete</b> this row',
                showCancelButton:true,
                showCloseButton:true,
                cancelButtonText:'Cancel',
                confirmButtonText:'Yes Delete it',
                cancelButtonColor:'#d33',
                confirmButtonColor:'#556ee6',
                width:300,
                allowOutsideClick:false
            }).then(function(result){
                if(result.value){
                    $.post(url,{message_id:message_id}, function(data){
                        if(data.code == 1){
                            toastr.success(data.msg);
                            $('.yajra-datatable').DataTable().ajax.reload(null, false);
                        }else{
                            toastr.error(data.msg)
                        }
                    },'json')
                }
            });
        });
    });
</script>
</body>
</html>