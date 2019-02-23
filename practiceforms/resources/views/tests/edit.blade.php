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
        
          
        <div class="container">
            
            <h1>Edit test id: {{$test->id}}</h1>
            <form method="post" action="{{action('TestController@update',['id'=>$test->id])}}">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="text" name="title" value="{{$test->title}}">
                <input type="text" name="subject" value="{{$test->subject}}">
                
                <input type="submit" value="submit">
            </form>
        </div>
               
            
       </form>
       
       <form method="post" action="{{action('TestController@destroy',['id'=>$test->id])}}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
               <input type="submit" value="delete">
       </form>
    </body>
</html>
