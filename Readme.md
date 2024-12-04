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
docker compose up -d --build && docker compose logs -f app
```  
Теперь сайт доступен по такому адресу <a href="http://localhost:8888/">localhost:8888</a>
<br />
<br />

### Документация

Документация доступна посредством <a href="https://www.postman.com/downloads/"> Postman-а</a> либо Swagger-а.

Импорт файл Postman-a в корневой директории с названием `Notebook.postman_collection.json`
А Swagger доступен по адресу <a href="http://localhost:8888/api/documentation/">localhost:8888/api/documentation</a>
<br />
<br />

#### Важное замечание
Для того чтобы попробовать весь функционал продукта надо будет зарегистрировать пользователя, в Postman-е уже есть готовые реквесты с заранее подготовленным grant токеном.

Чтобы воспользоваться им сделайте запросы для регистрации через импорт файл Postman-a, либо отправьте post запрос на `localhost:8888/oauth/token` с таким телом:
```
{
    "grant_type": "password",
    "client_id": "1",
    "client_secret": "rUJrG0RsI10VlRYVVgPZiqMYGADLF11Pm5TCdHJu",
    "username": "jhonDoe@email.com",
    "password": "somepassword",
    "scope": "*"
}
```

Затем ко всем запросом напишите `Authorization` header со значением взятого из ответа к запрошу выше. Обычно он выглядит так:
```
"access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZjdmNWU5ZjRhYzYxNzE0ZTlhNjk3ZTc2YWIwMDYzYzJmNzc2NjE3OWZlNGVlMmJmMjU4MGJlNzVmYjQwZmU3MDNkZjhkYTRiYTZjZmUwNDAiLCJpYXQiOjE3MzMzMzMxNTMuMzk4ODE5LCJuYmYiOjE3MzMzMzMxNTMuMzk4ODIxLCJleHAiOjE3NjQ4NjkxNTMuMzcxODcsInN1YiI6IjIiLCJzY29wZXMiOlsiKiJdfQ.RHaiYhDdusXWUB4vYyqHNQ_DWxMA7tCxh_nUspmEqPdZIzPTgP-O7OwwDG8ticwJ7LRyZeEbFtd6q85VnfhPGyjcNjaAUidCxE6KsUYYyVyw_0zwyLJdzefzb9vVAx9Bq0KB8HbZ35g-Pp9WjXa97OP1YgSug76j-niGzZWvLDpcRSctTldekG68W2QXlco8ngO795XjaLHetwfXUqCcy9XXI8sA1KtyGpPKd7vOK1uwg_KlcnbIUj-KtkJx5JvLOHQmnSWq94garcEOLU2oAoST-Xb-4ZUMrxdLl4QKceKT3tANtZZItUMcRRCw7hQSXRKdwEWY6rvnRfXjzILS9TCoRcKAGx5NUS2Dj0_gE71C8ajiV-7SxB-yLTU8EvGH1Z1rf8PEMK5B2ODcz9-KcYc6ApfXYi-GJ4LBsDvJHlgFmFLGMbV9ikBCWR8Czqjn2qr7JGQaQ5xq9naMLxPKpBPJBQPRekOsOUY6yKaeAxOohEBKeK2mjPS_M0-tvicrhz0HgJ1JZZK_AucSDuGXg7YTaeLO016inVc1PCV-SHKzrnyXIZaC3iFxNM6-OVJfmYjPc4qB89Jo_4AWbGfk_-pb2LsjStx2c2Fnu5Fqju9V5C1iToj6ret_w8sIIMyAjHGfd4KvCgXNTvIDItKsbuYUg80FHCh8gRfeTTSNadw",
```

Итоговое значение `Authorization` header-a должно быть таким:
```
Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZjdmNWU5ZjRhYzYxNzE0ZTlhNjk3ZTc2YWIwMDYzYzJmNzc2NjE3OWZlNGVlMmJmMjU4MGJlNzVmYjQwZmU3MDNkZjhkYTRiYTZjZmUwNDAiLCJpYXQiOjE3MzMzMzMxNTMuMzk4ODE5LCJuYmYiOjE3MzMzMzMxNTMuMzk4ODIxLCJleHAiOjE3NjQ4NjkxNTMuMzcxODcsInN1YiI6IjIiLCJzY29wZXMiOlsiKiJdfQ.RHaiYhDdusXWUB4vYyqHNQ_DWxMA7tCxh_nUspmEqPdZIzPTgP-O7OwwDG8ticwJ7LRyZeEbFtd6q85VnfhPGyjcNjaAUidCxE6KsUYYyVyw_0zwyLJdzefzb9vVAx9Bq0KB8HbZ35g-Pp9WjXa97OP1YgSug76j-niGzZWvLDpcRSctTldekG68W2QXlco8ngO795XjaLHetwfXUqCcy9XXI8sA1KtyGpPKd7vOK1uwg_KlcnbIUj-KtkJx5JvLOHQmnSWq94garcEOLU2oAoST-Xb-4ZUMrxdLl4QKceKT3tANtZZItUMcRRCw7hQSXRKdwEWY6rvnRfXjzILS9TCoRcKAGx5NUS2Dj0_gE71C8ajiV-7SxB-yLTU8EvGH1Z1rf8PEMK5B2ODcz9-KcYc6ApfXYi-GJ4LBsDvJHlgFmFLGMbV9ikBCWR8Czqjn2qr7JGQaQ5xq9naMLxPKpBPJBQPRekOsOUY6yKaeAxOohEBKeK2mjPS_M0-tvicrhz0HgJ1JZZK_AucSDuGXg7YTaeLO016inVc1PCV-SHKzrnyXIZaC3iFxNM6-OVJfmYjPc4qB89Jo_4AWbGfk_-pb2LsjStx2c2Fnu5Fqju9V5C1iToj6ret_w8sIIMyAjHGfd4KvCgXNTvIDItKsbuYUg80FHCh8gRfeTTSNadw
```

Во Swager-е тоже надо будеть ввести пользователя, для того чтобы сделать это нажмите на кнопку `Authorize` в правом верхнем углу и в инпут добавьте выше указанное значение. 