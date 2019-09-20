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
    <form action="{{action ('EventController@update',$id)}}" method="post">
        {{ csrf_field() }}
        <div class="container">
            <div class="jumbotron" style="margin-top 5%;">
                <h1> UPdate your data</h1>
                <hr>
                    <input type="hidden" name="_method" value="UPDATE" />
                <div class="form-group">
                    <label>Name of events</label>
                    <input type="text" class="form-control" name="title" placeholder="enter name" value="{{$events->title}}">
                </div>
                <div class="form-group">
                    <label>color</label>
                    <input type="color" class="form-control" name="color" placeholder="enter color" value="{{$events->color}}">
                </div>
                <div class="form-group">
                    <label>start_date</label>
                    <input type="datetime-local" class="form-control" name="start_date" placeholder="enter name" value="{{$events->start_date}}">
                </div>
                <div class="form-group">
                    <label>Name of events</label>
                    <input type="datetime-local" class="form-control" name="end_date" placeholder="enter name" value="{{$events->end_date}}">
                </div>
                {{ method_field('PUT') }}
                <button type="submit" name="submit" class="btn btn-success">update</button>
                                    
                </div>
        </div>
    </form>
    
    
    </body>
</htmal>