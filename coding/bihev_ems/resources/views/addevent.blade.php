<!DOCTYPE html>
<htmal lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoort" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Calendar</title>
        
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>

    </head>
    <body>
       <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background: #2e6da4; color: white;">
                        add event to calendar
                    </div>

                    <div class="panel-body">
                        <h1>task: add date</h1>
                        <form method="post" action="{{action('EventController@store')}}">
                            {{ csrf_field()}}

                        <label for="">Enter name of event</label>
                        <input type="text" class="form-control" name="title" placeholder="enter the name" /><br>

                        <label for="">Enter color</label>
                        <input type="color" class="form-control" name="color" placeholder="enter the color" /><br>

                        <label for="">start date of event</label>
                        <input type="datetime-local" class="form-control" name="start_date" class="date" placeholder="enter the start date" /><br>

                        <label for="">Enter the end date of event</label>
                        <input type="datetime-local" class="form-control" name="end_date" class="date" placeholder="enter the end date" /><br>
                        
                        
                        <input type="submit" name="submit" class="btn btn-primary" value="Add Event Data" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</htmal>