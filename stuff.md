基础教程（这是科普向的，有的东西会不全，我可能还会写个相对简洁点的文档，自己看吧）
======
##配置流程
	我现在已经在仓库里放了laravel，算基本的网页框架，down下来之后要做一些配置让他能够运作，但暂时先别去直接搜laravel的文档，否则会让人崩溃的。
	成功的标志是，当浏览器访问localhost（如果设置了虚拟主机则输入对应的域名），页面显示出LARAVEL5字样，白底黑字。
###LAMP/WAMP/MAMP的安装
	其实就是http的服务器软件，然后还有mysql数据库和一些基本的组件。
	如果使用linux类系统或者mac系统的话，安装会比较麻烦，这里不多说，想装逼的朋友私下聊。
	如果系统用的windows，建议直接安装一个叫'xampp'的软件，一劳永逸，一定要去官网安装最新版，要求php>=5.5.9。
	安装好之后，设置一下apache的文档路径（用来指向所在的网页）找到一行
	```html
	<Directory "C:/xampp/htdocs">
		DocumentRoot "C:/xampp/htdocs"
	```
	把里面两行都改成网页public文件夹的路径 比如 "G:/git/SE-Service-Exchange/public"
	注意斜杠方向
	'注意' 尽量设置一下php的路径为系统环境变量，否则之后要调用php的时候很麻烦。
	另外，vmware虚拟机的某进程会占用80端口，建议停掉。
###git和composer
	暂时就需要这些，git应该都装了，记住安装其中的git bash，会给个虚拟的linux的shell。
	composer去网上下载一个composer.phar文件，丢到根目录就可以了。
###laravel本地化
	打开git bash到根目录。运行一下代码。
	```Bash
	mv .env.example .env
	```
	在运行第一条命令后根目录会生成一个.env文件，里面有设置数据库用户名和密码。如果是windows安装xampp的话，默认情况下就不用设置了。否则请自行更改。
	```Bash
	php composer.phar install
	```
	'说明'：如果在校外可能有的网会被墙，那么会失败，可以vpn到sjtu再安装。另外，当php没有设置系统路径的时候，php将换成/c/xampp/php/php
	接下来用artisan的方法生成一个密钥。
	```Bash
	php artisan key:generate
	```

	这样windows情况下已经配完了。启动apache和mysql之后，在浏览器下键入localhost试试就行。

##编辑器
	windows下的话，推荐像sublime这样的编辑器吧，功能很全。其实任何编辑器都可以，自己用c++printf也没有问题。
	但千万不要使用微软出品的编辑器，在没设置的情况下文字编码之类的坑特别多（包括visual studio任何版本和notepad记事本）
	不喜欢sublime的话网上去找找吧
	编写前端html的话，dreamweaver的确可以预览预览页面，不过说实话不太实用，因为他不识别laravel提供的blade模板。