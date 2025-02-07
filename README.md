## 🛣️🚗 Toll

This project consists of a toll simulation where you make vehicles pass through the different toll stations through an API Rest.

## 👁️ Views  
This is the toll stations view:

![Captura_de_pantalla_2025-02-07_183600](https://github.com/user-attachments/assets/9793fcae-4c27-449d-b510-2d45ea2b07e7)


This is the vehicles view:

![Captura_de_pantalla_2025-02-07_183758](https://github.com/user-attachments/assets/9e5fd3d8-9c15-4c35-8cfb-9c5c305c28f9)


## 💻 Languages ​​and tools used  

Project coding:

![](https://skillicons.dev/icons?i=php,html,css)
![](https://skillicons.dev/icons?i=laravel,git,github,vscode,)


## ⚙️ Installation prerequisites

🟢Install [Node.js](https://nodejs.org/en/download/source-code)

🟢Install [Composer](https://getcomposer.org/download/)

## 🛞 Installation Guide 

-1: Before installing the project, you have to create a database, in my case i have used mysql with xampp as host.

-2: Open the terminal and paste this command:

`git clone https://github.com/rodrigoo1604/Toll.git`

⚠️ Be careful, you have to be in the folder you want this project cloned at!

-3: After you have cloned the repository, rename the file `.env.example` to `.env` and adjust the database configuration to yours.


-4: Last but not least, open three terminals in bash and execute the following commands

▷Console 1:
    `npm install` and after `npm run dev`
    
▷Console 2:
    `composer install` and after `php artisan serve`
    
▷Console 3: 
    `php artisan migrate:fresh --seed`
    
-And that should be it, just open the browser and insert the url the server has provided you

⚠️ If you have done the previous steps and something has gone wrong please go back to the third command console and insert this:

`php artisan key:generate` and after `php artisan config:cache` 

## 🌐 Endpoint
The endpoint is very easy, you only need to know the id for the toll station and the vehicle you want it to pass through it.

It is the following:

`/api/toll/{toll station id}/vehicle/{vehicle id}`

## 🧑‍🔬 Tests 
All tests have passed ;) , insert `php artisan test --coverage` or `php artisan test --coverage-html=coverage-report` in the console to check them

![Captura_de_pantalla_2025-02-07_183320](https://github.com/user-attachments/assets/cfad5661-22ee-4722-abc7-aa42a29e25b8)


## 🗂️ DDBB Diagram 

![tollbbdd](https://github.com/user-attachments/assets/3fa5e656-b623-4c8a-99da-f727cfa9fcea)


## 🙍‍♂️ About me 
Hello, i am a student in a backend and AWS bootcamp.
- [Github Profile](https://github.com/rodrigoo1604)
