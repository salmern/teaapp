
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
    
    SCREENSHOTS

![delete](https://user-images.githubusercontent.com/50671163/147772013-0024b0d5-7902-46dc-ae23-2128ddc5700d.PNG)
![teachers search](https://user-images.githubusercontent.com/50671163/147772064-89be42a1-af1f-43b3-b656-100c43b04c94.PNG)
![teachers table](https://user-images.githubusercontent.com/50671163/147772067-5d9d633a-8934-4d40-9979-055d5015229b.PNG)
![teachers](https://user-images.githubusercontent.com/50671163/147772069-f4bad4e3-ee52-4d00-a155-8c77a5df1d46.PNG)
![update](https://user-images.githubusercontent.com/50671163/147772071-69095d7e-22d8-4885-a11e-dfa76e1c9572.PNG)
![view](https://user-images.githubusercontent.com/50671163/147772073-3f9260d5-799f-4ee2-a3e4-127a3f7e7a57.PNG)
