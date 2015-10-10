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
                    <p>暂时做了个tut的分支里面放些学前后端入门需要达标的效果</p>
                    <a href="http://web.seiee.com">大神写的教程博客</a>
                    <br>
                    <br>
                    <a href="tutorial">前端的要求页面</a>
                    <br><br>
                    后端的一个小程序 可以现在里面输入东西确定之后会返回一个hash值，摸索一下怎么做的<br>
                    <input name="value" placeholder="enter string here">
                    <button>get hash</button>
                </form>
            </div>
        </div>
    </body>
</html>
