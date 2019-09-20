<!DOCTYPE html>
<htmal lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoort" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
        <title>Calendar</title>
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <table class="table tabel-striped table-bordered table-hover">
                    <thead class="thead">
                        <tr class="warning">
                            <th>ID</th>
                            <th> title </th>
                            <th> color </th>
                            <th> Start Date </th>
                            <th> End Date </th>
                            <th> Update/Edit </th>
                            <th> Delete </th>
                        </tr>
                    </thead>
                    @foreach($events as $event)
                    <tbody>
                        <tr>
                            <td>{{ $event->id}}</td>
                            <td>{{ $event->title}}</td>
                            <td>{{ $event->color}}</td>
                            <td>{{ $event->start_date}}</td>
                            <td>{{ $event->end_date}}</td>
                            
                            <th><a href="{{action('EventController@edit',$event['id'])}}" class="btn btn-success"><i class="glyphicon glyphicon-edit"> Edit</i></a></th>
                            
                            <th>
                                <form method="POST" action="{{action('EventController@destroy',$event['id'])}}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <button type="submit" class="btn btn-danger">
                                        <i class="glyphicon glyphicon-trash"> Delete</i>
                                    </button>
                                </form>
                            </th>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
                
                
                
            </div>
        </div>
        <script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.world.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

    
    </body>
    </htmal>