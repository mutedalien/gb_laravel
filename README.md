# gb_laravel
09-10.2020

TASK 1

1. Настроить на локальной машине окружение для работы с фреймворком.
2. Ознакомиться с документацией
3. Установить Laravel.
4. Реализовать несколько страниц с выводом какой-либо информации. Сделайте менюшку для перехода между страницами.

TASK 2

1. Добавить в проект несколько контроллеров. Создать минимум 4 страницы:
a. Страницу приветствия.
b. Страницу категорий новостей.
c. Страницу вывода новостей по конкретной категории.
d. Страницу вывода конкретной новости.

2 . Оптимизировать "запрос" getNewsId, что бы поиск id не в цикле был, а сразу получали по ключу из массива.
3* . Сгруппировать роуты news, и перенести контроллер новостей в пространство имен News. Можно еще сгруппировать и виды в папочке news.
4*. Страница категорий должна работать не по числовому Id, а по ЧПУ ссылке (category/sport например)

TASK 3

1. Ознакомиться с документацией по работе с шаблонами в laravel.
2. Добавить в проект шаблоны blade и bootstrap.
3. Сделать шаблоны страниц авторизации и добавления новости (ВАЖНОЕ).
Шаблон может быть не сложным, но обязательно должен содержать в себе главный шаблон (лайаут), меню, и контент. Продумайте как удобнее сделать меню, возможно вынести меню админа в выпадающий список, помните, что после авторизации функционал админа будет закрыт для простых пользователей. В форме логина должно быть видно ваше меню основное.

TASK 4

1. Создать форму для получения данных от пользователя. Это должна быть форма добавления новости или форма заказа на получение выгрузки данных.
2. Организуйте прием данный о новой новости и сохраните в хранилище в виде файла. Т.е. переделать источник новостей из массива в файл (хранить в json-формате).
3. Добавить тесты на созданные классы и страницы.

TASK 5

1. Создать БД для новостей и категорий, новости можно пока без ссылок на категорию, без связей. Построить таблицы через миграции.
2. Заполнить таблицы фейковыми данными через seeder и Faker.
3. Подключиться и вывести информацию из БД на страницах новостей и отдельной новости.
4. Реализовать добавление новости в базу данных через форму. (можно пока без категории) ВАЖНОЕ
5 *. Сделать возможность добавления изображения к новости.

TASK 6

1. Добавить модели. Расширить миграции.
2. Переделать все запросы на ORM-модель работы с БД. Сделать пагинацию всех страниц.
3. Сделать crud-блок для новостей или отзывов или категорий.
4* Используйте роуты типа resoure
