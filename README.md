
HOW TO INSTALL THE PROJECT

--Clone the project in htdocs
    git clone https://github.com/salmern/teaapp.git

--install the project with composer 
   composer update or install

--initiate the code and set the development
    ./init

--create database with the name "teaapp" in xampp phpmyadmin
    create table with the name teachers and 6 columns
    Name    Type    Collation       
    1   teacher_id Primary int(11)          
    2   teacher_name    varchar(255)    
    3   teacher_address varchar(255)    
    4   teacher_mail    varchar(255)    
    5   teacher_age int(11)     
    6   date_join   date    


--initiate the database migration
    ./yii migrate

--run the project in the browser with this link below
    http://localhost/teaapp/backend/web/index.php?r=teachers

