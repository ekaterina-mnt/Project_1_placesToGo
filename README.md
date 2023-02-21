# Project_1_placesToGo
<p>Проект был выполнен с использованием программы Docker, необходимые действия для запуска:</p>

<b>docker-compose up -d</b><br>
<b>cd src</b><br>
<b>cp .env.example .env</b><br>

<p>Отредактировать файл .env:</p>

DB_CONNECTION=mysql<br>
DB_HOST=mysql<br>
DB_PORT=3306<br>
DB_DATABASE=placestogo<br>
DB_USERNAME=user<br>
DB_PASSWORD=secret<br>

<b>docker-compose exec php composer install</b><br>
<b>docker-compose exec php php artisan key:generate</b><br>
<b>docker-compose exec php php artisan migrate</b><br>
<b>docker-compose exec php php artisan storage:link</b><br>
<b>docker-compose exec php php artisan db:seed</b><br>

И перейти: <b>http://localhost:8000/</b>

<h1>Суть проекта:</h1>

<p>Цель проекта - создать возможность откладывать места/мероприятия, которые человек хочет посетить, в список (таблица want). После посещения у человека есть возможность перенести место/мероприятие в другую таблицу (was), чтобы видеть, куда человек уже сходил.</p>
<p>Чтобы вести трекер, необходимо зарегистрироваться на сайте. При создании записи о месте/мероприятии в таблицу заносится id юзера. Так у каждого юзера есть свой список мест.</p>
<p>При регистрации необходимо указывать пол, email, логин и пароль. Также необязательные поля: имя, фамилия, день рождения и фото. По умолчанию за каждым зарегистрированным пользовалем закрепляется картинка с пустой аватаркой. В будущем у юзера будет возможность изменять профиль, в т.ч. и фото.</p>
<p>Возможные доработки проекта в будущем: 
<ul>
<li>будет добавлена возможность создавать кастомизированные списки мест с названиями, выбираемыми пользователями;</li>
<li>будут добавлены конфигурационные файлы докера.</li>
<ul>

<br>

<h1>Замечания:</h1>
<p>
  При сидировании создается пользователь Екатерина Пензева с тремя записями в таблице "хочу пойти" с прописанными id=1, id=2, id=3.
  <br>
  Логин: ekaterina
  <br>
  Пароль: 123
</p>


<h1>Реализация проекта:</h1>

<br>

![image](https://user-images.githubusercontent.com/112812361/220431467-e1d63b01-081f-4cbf-9315-a3f195685c26.png)
![image](https://user-images.githubusercontent.com/112812361/220431502-bd56472a-216f-492a-b016-71cb3d5def3e.png)
![image](https://user-images.githubusercontent.com/112812361/220431525-60f8d24f-e03a-43d0-89ba-26d1bfb1790d.png)
![image](https://user-images.githubusercontent.com/112812361/220431543-e4972f4c-1cc7-448c-ab28-6ebae5a9bd59.png)
![image](https://user-images.githubusercontent.com/112812361/220431552-dbc4a14c-4443-46c1-b585-29a825448c53.png)
![image](https://user-images.githubusercontent.com/112812361/220431570-512dec2c-0fb3-489e-9569-144af0bddd00.png)
![image](https://user-images.githubusercontent.com/112812361/220431584-541976c2-2ae0-4a47-8a96-cd98fb7a73b8.png)
![image](https://user-images.githubusercontent.com/112812361/220431633-f07e423f-fde8-4755-b1cc-391b8db729b0.png)
![image](https://user-images.githubusercontent.com/112812361/220431653-dfce31cb-3895-4291-9f3f-1b4ffdeabc55.png)





