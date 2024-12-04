## Инсталляция и запуск

Скопируйте репозиторий
```
git clone https://github.com/Drooggie/notebook-api.git
``` 

Зайдите в папку с проектом
```
cd notebook-api
``` 

Запуститет эту команду для запуска Docker контейнеров.
```
docker-compose up -d --build && docker-compose logs -f app
```  
<br />

Теперь сайт доступен по такому адресу <a href="http://localhost:8888/">localhost:8888</a>

### Документация

Документация доступна посредством <a href="https://www.postman.com/downloads/"> Postman-а</a> либо Swagger-а.

Импорт файл Postman-a в корневой директории с названием `Notebook.postman_collection.json`
А Swagger доступен по адресу <a href="http://localhost:8888/api/documentation/">localhost:8888/api/documentation</a>

#### Важное замечание
Для того чтобы попробовать весь функционал продукта надо будет зарегистрировать пользователя, в Postman-е уже есть готовые реквесты с заранее подготовленным grant токеном.

Если хотите опробовать без регистрации то уже есть заранее зарегистрированный пользователь. Для того чтобы им воспользоваться в Header добавьте `Authorization` со следующим значением:
```
Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMzNhY2U3OTc0NWM0NmJhNDg5Yzg3YjY5YmVhNWM2N2RmMTQxN2U2ZGIzMjQyN2YyNTUxOWY0OWNjZmE1MmNlODI4MjQxYTgxMTEwOTFhZmIiLCJpYXQiOjE3MzMyNzU0MjYuNjYwMTcyLCJuYmYiOjE3MzMyNzU0MjYuNjYwMTc2LCJleHAiOjE3NjQ4MTE0MjYuNjMxNDMsInN1YiI6IjIiLCJzY29wZXMiOlsiKiJdfQ.L8LiwPLdJBOd9onEcX5ErD-EyrwCEVz4187-9ro8j1WlrJzixywhqS450v6QbqQ6Mv0uE74f4koR_TQ1MwA21KTUx_62SQNbEnEchpQKrA7ERB0KLBIebw6FB5IwVyIMu0aD9QuTQ7WwUWjlLRzb2M3gxGbufYgdaDrd_QwNUMCLW3Ph-KoVBw0-wtb0qG7v3u--ZgO4ogAsV2IZhJeTD2SxJBgzbbFS1GySHVyo1mhjw-dOrc0oYNYfgaVa2XaTbqdfabwyI6fK4EEh9QnRezVx7Qahg-w4Lx4irg0lx_DcwLUkCWZieQPV4UnOKrVCvJpu4yXyOQcwnz6vSnVfepdhoNdzlx6GXiE4FvTr-SqHKGoWE9t8Sfd9TrxTcaPf5CU-JYI6v3dNVzCO_MtR8pY2K1-X5QO_PhuWw30uduxmIU_mljzeq43n0a8IO7HDrIIq9eh0y7hkcIvKu2P_GVUgm6j1FGMgPjTQ-GRt-kyeHaKi2vbTyaDZYEmEv5aAgSQd9xihetUNqhXrb4p8EbPwCOZ6XRaVkT3pAm0NbPPJyHeVAWr5rOdT_oNDx1KLp72kF1mDvracG_PS8pNUyS8YCfLQAGbCy-vTh_wQcRNpqHKa9HSFQMs105OMdZ-ECW1_TIYOLu905DrMZgIOQnvuTK93MOzMUj_bNe1gXB0
```
<br />

Во Swager-е тоже надо будеть ввести пользователя, для того чтобы сделать это нажмите на кнопку `Authorize` в правом верхнем углу и в инпут добавьте выше указанное значение. 