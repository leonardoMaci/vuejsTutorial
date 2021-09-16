# vuejsTutorial
Curso da Udemy de vue js que fiz em 06/2020

- PHP instalado na maquina
- Composer instaldo na maquina
- rodar composer install na pastar do projeto
- rodar npm install na pasta do projeto
- rodar php artisan key:generate

**** banco sqlite *****

- remover do php.ini a ";" antes do (extension=pdo_sqlite)
- ajustar o .env :
   DB_CONNECTION=sqlite
   DB_HOST=127.0.0.1
   DB_PORT=3306   
- criar dentro da pastas database um arquivo com nome de (database.sqlite)
- rodar php artisan migrate

************************

*** rodar o server ***

- php artisan serve
- npm run dev / npm run watch

**********************
