<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CMSPAPA</title>

    <!-- Bootstrap -->
    <link href="/themes_start_assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
     /* body{
        background-color: #673AB7;
        color:#fff;
      }*/
      .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
          height: 200px;
          border: 1px solid #fff;
          background: #eee;
      }

      footer {
        background-color: #f2f2f2;
        padding: 25px;
        margin-top: 20px;
      }
    </style>
  </head>
  <body>
    @foreach($papaStructure as $levelOneKey => $levelOneComponent)
      @if($levelOneComponent['type'] == 'navbar')
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            @if($levelOneComponent['is_region'] == true)
              @yield($levelOneKey) 
            @endif
          </div>
        </nav>
      @elseif($levelOneComponent['type'] == 'jumbotron')
        <div class="jumbotron">
          <div class="container">
            @if($levelOneComponent['is_region'] == true)
              @yield($levelOneKey) 
            @endif
          </div>
        </div>
      @elseif($levelOneComponent['type'] == 'container-fluid' || $levelOneComponent['type'] == 'container')
        <div class="{{ $levelOneComponent['type'] }}">
          @foreach($levelOneComponent['level_two'] as $levelTwoComponent)
            @if($levelTwoComponent['type'] == 'row')
              <div class="row">
                @foreach($levelTwoComponent['columns'] as $columnKey => $column)
                {{-- needs work--}}
                  <div class="col-md-{{$column['width']}}">
                    @if($column['is_region'] == true)
                      @yield($columnKey) 
                    @endif
                  </div>
                @endforeach
              </div>
            @endif
          @endforeach
        </div>
      @elseif($levelOneComponent['type'] == 'footer')
        <footer class="container-fluid text-center">
          @if($levelOneComponent['is_region'] == true)
            @yield($levelOneKey) 
          @endif
        </footer>
      @endif
    @endforeach
    {{-- @php
      dd($papaStructure);
    @endphp --}}
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/themes_start_assets/js/bootstrap.min.js"></script>
  </body>
  
</html>