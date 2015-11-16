# Net-Meter-Solar-App
# Net Metering Interconnection for Plug and Play Solar System
# Author: Yuenyong Nilsiam
# Date: September 16, 2015

Setting Up the Application Web Page
1. Prerequisite
 a) Computer as a Server Machine
 b) Apache HTTP Server [https://httpd.apache.org/]
 c) PHP Interpreter [http://php.net/]
 d) MySQL Database [https://www.mysql.com/]

On the server machine, all of the prerequisite softwares can be installed easily using XAMPP [https://www.apachefriends.org]. It is a free open source cross-platform web server software package. You can install each of them separately if you prefer.

2. Create Database and Table
In MySQL database, run 'nmifpapss.sql' to create database and table structure for the application page. You can use phpmyadmin or terminal to connect to MySQL server to run the script.

3. Application Page
Put application page ('application.php') in the public folder of apache web server, usually at '/var/www/html' on Linux machine. The default user name and password for MySQL server are 'root' and 'password!' respectively. If you set up the different user name and password, then you can change the them in the 'application.php' by finding the line: 
$db_conn = new mysqli("localhost", "root", "password!", "nmifpapss");
and change to your new user name and password.

4. Access the Application Page
On the server machine, you can access the application page from url: 'localhost/application.php'. On other machine, you need to know the IP address or the domain name of the server so you can access the page through them, for example, '192.168.2.7/application.php' or 'mydomain.com/application.php'.
