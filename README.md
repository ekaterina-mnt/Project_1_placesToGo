# Project_1_placesToGo
<p>Проект был сделан с использованием программы Docker, необходимые действия для запуска:</p>

<b>cd src</b><br>
<b>composer install</b><br>
<b>npm install</b><br>
<b>cp .env.example .env</b><br>

<p>Отредактировать файл .env:</p>
DB_CONNECTION=mysql<br>
DB_HOST=mysql<br>
DB_PORT=3306<br>
DB_DATABASE=homestead<br>
DB_USERNAME=homestead<br>

DB_PASSWORD=secret<br><br>

<b>docker-compose build</b><br>
<b>docker-compose up -d</b><br>
<b>npm run dev</b><br>
<b>docker-compose exec php php /var/www/html/artisan key:generate</b><br>
<b>docker-compose exec php php /var/www/html/artisan optimize</b><br>
<b>docker-compose exec php php /var/www/html/artisan migrate</b><br>
<b>docker-compose exec php php /var/www/html/artisan storage:link</b><br>
<b>docker-compose exec php php /var/www/html/artisan db:seed</b><br>

И перейти: <b>http://localhost:8080/</b>

<h1>Суть проекта:</h1>

<p>Цель проекта - создать возможность откладывать места/мероприятия, которые человек хочет посетить, в список (таблица want). После посещения у человека есть возможность перенести место/мероприятие в другую таблицу (was), чтобы видеть, куда человек уже сходил.</p>
<p>Чтобы вести трекер, необходимо зарегистрироваться на сайте. При создании записи о месте/мероприятии в таблицу заносится id юзера. Так у каждого юзера есть свой список мест.</p>
<p>При регистрации необходимо указывать пол, email, логин и пароль. Также необязательные поля: имя, фамилия, день рождения и фото. По умолчанию за каждым зарегистрированным пользовалем закрепляется картинка с пустой аватаркой. В будущем у юзера будет возможность изменять профиль, в т.ч. и фото.</p>
<p>Возможные доработки проекта в будущем: 
<ul>
<li>добавить возможность создавать кастомизированные списки мест с названиями, выбираемыми пользователями.</li>
<ul>
<br>
<h1>Реализация проекта:</h1>
