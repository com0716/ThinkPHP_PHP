# ThinkPHP_PHP
ThinkPHP框架学习过程
1 环境搭建过程
	1.1 在ThinkPHP官网上下载ThinkPHP源码
	1.2 将源码中的ThinkPHP文件夹copy到当前工程文件夹中
	1.3 在工程文件夹中创建shop文件夹，然后在shop文件夹下创建index.php文件
		<?php
		define('APP_DEBUG', true);
		include('../ThinkPHP/ThinkPHP.php');
	1.4 然后在浏览器中访问http://www.mythinkphp.com/shop，在shop文件夹中自动生成
		Common
		Home
		Runtime

2 基本界面的访问
	模仿Home/Controller/IndexController.class.php创建LoginController.class.php
	然后在Home/View文件夹下创建Login文件夹，然后在Login文件夹下创建login函数对应的login.html
	在浏览器中通过http://www.mythinkphp.com/shop/index.php/home/login/login访问
	
  PS: ThinkPHP下的路由形式
  	http://www.mythinkphp.com/shop/index.php/home/login/login
  	默认是index.php/home/index/index
  	其中，index.php入口文件，home是分组名，index是控制器名称，index是函数名称
  	1)去掉index.php的方法
  		在shop文件夹下创建.htaccess文件，然后在里面
  		<IfModule mod_rewrite.c>
		  Options +FollowSymlinks
		  RewriteEngine On
		
		  RewriteCond %{REQUEST_FILENAME} !-d
		  RewriteCond %{REQUEST_FILENAME} !-f
		  RewriteRule ^(.*)$ index.php/$1 [QSA,PT,L]
		</IfModule>
		这个需要开启Apache的rewrite功能，并重启apache才能实现

3 将ThinPHP默认的模板引擎改成Smarty模版
	在ThinkPHP/Library下有一个Vendor文件夹，主要用于存放第三方库
	在配置shop/Common/Conf/config.php文件，
		'TMPL_ENGINE_TYPE'=>'Smarty',
		'TMPL_ENGINE_CONFIG'=>array(
		    'left_delimiter'=>'<{',
		    'right_delimiter'=>'}>',
		),
	然后使用assign和display函数使用Smarty模版引擎
	
  		

