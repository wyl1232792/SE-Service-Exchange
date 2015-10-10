<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }

            input {
                margin-right: 30px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <form method="get" action="hash">
                    <input name="value" placeholder="enter string here">
                    <button>get hash</button>
                </form>
            </div>
        </div>
    </body>
</html>
