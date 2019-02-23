<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        
    </head>
    <body>
        
          
        <!--<div class="container">
            <h1>Create a new test</h1>
            <form method="post" action="{{ action('TestController@store') }}">
                {{ csrf_field() }}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="text" name="title" placeholder="Test title">
                <input type="text" name="subject" placeholder="Test subject">
                <input type="number" name="user_id" placeholder="user id">
                <input type="submit" name="submit">
            </form>
        </div>
               -->
              {!! Form::open(['url' => 'foo/bar']) !!}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="text" name="title" placeholder="Test title">
                <input type="text" name="subject" placeholder="Test subject">
                <input type="number" name="user_id" placeholder="user id">
                <input type="submit" name="submit">
              {!! Form::close() !!}
            
      
    </body>
</html>
