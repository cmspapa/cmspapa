<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CMS PAPA</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #673AB7;
                color: #fff;
                
                height: 100vh;
                margin: 0;
            }
            legend {
                color: #ffb74d;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .title {
                font-size: 84px;
                color: #ff9800;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    CMS PAPA
                </div>
                <form action="/install" method="POST" role="form">
                    <legend>Install Database</legend>
                
                    <div class="form-group">
                        <label for="db_connection">DB connection</label>
                        <input id="db_connection" name="db_connection" type="text" class="form-control" value="mysql" placeholder="mysql">
                    </div>

                    <div class="form-group">
                        <label for="db_host">DB host</label>
                        <input id="db_host" name="db_host" type="text" class="form-control" value="127.0.0.1" placeholder="127.0.0.1">
                    </div>

                    <div class="form-group">
                        <label for="db_port">DB port</label>
                        <input id="db_port" name="db_port" type="text" class="form-control" value="3306" placeholder="3306">
                    </div>

                    <div class="form-group">
                        <label for="db_name">DB name</label>
                        <input id="db_name" name="db_name" type="text" class="form-control" value="homestead" placeholder="homestead">
                    </div>

                    <div class="form-group">
                        <label for="db_username">DB username</label>
                        <input id="db_username" name="db_username" type="text" class="form-control" value="homestead" placeholder="homestead">
                    </div>

                    <div class="form-group">
                        <label for="db_password">DB password</label>
                        <input id="db_password" name="db_password" type="text" class="form-control" value="homestead" placeholder="homestead">
                    </div>
                
                    <button type="submit" class="btn btn-primary">Next</button>
                </form>
                
            </div>
        </div>
    </body>
</html>
