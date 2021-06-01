
### Подготовка приложения

- Импортировать базу urls_db.sql в PostgreSql
- Пользователь: ruslan
- Конфигурация .env
##
### 1. Тестирование сервиса с помощью Rest Client


- Сохранить длинный Url (Вариант 1): 

Адрес: http://task-api-la-pg.pro/api/v1/save-url

Метод: Post Raw Json. 

Ключ: form_long_url.

Пример:

{

    "form_long_url":"https://very-long-uniform-resource-locator.com/18-websgjti5675ftgyhtes-every42-ftrfty2detyrtyveloper-should-visit-rityryght-now/"

}

- Сохранить длинный Url (Вариант 2): 

Rest Client метод POST передача параметров:

http://task-api-la-pg.pro/api/v1/save-url?form_long_url=https://very-long-uniform-resource-locator.com/18-websgjti5675ftgyhtes-every42-ftrfty2detyrtyveloper-should-visit-rityryght-now/

- Сохранить длинный Url (Вариант 3) с помощью формы (от меня):

Адрес: http://task-api-la-pg.pro/add-url
##
### 2. Проверка сокращенных ссылок

- Ответ записи Json пример:

{

  "Result": "Data has been saved",
  
  "Short Url": "http://task-api-la-pg.pro/82122"
  
}

Пример: Rest Client GET по http://task-api-la-pg.pro/82122 

Получаем 301 redirect to https://very-long-uniform-resource-locator.com/18-websgjti5675ftgyhtes-every42-ftrfty2detyrtyveloper-should-visit-rityryght-now/

- Видео демонстрация работы сервиса

Show task-api-la-pg.pro 2021-06-01.mp4

Или здесь https://youtu.be/COFI8Hdjbyw



