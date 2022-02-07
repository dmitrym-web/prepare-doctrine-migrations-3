### В предыдущих сериях ...

>Необходимо было сделать миграции в проекте, но! Должен генерироваться `sql` файл, чтобы его можно было запускать без привязки к `php`, 
а главное не использовать `ORM`. Для препарирования была взята [Doctrine Migrations](https://www.doctrine-project.org/projects/migrations.html). 
Прочитав документацию, я понял, что задача выполнима. Поставив свежий пакет(версия `3.4.1`), я начал вскрытие.

> В документации написанно, что при выполнении миграции нужно использовать ключ `--write-sql`, который позволяет сгенерировать вожделенный `sql` файл и положить его в укромное место. 

## Задача

Хочется разобраться, как устроена логика, описаная в другом [репозитории](https://github.com/nvrsk-yii2/prepare-doctrine-migrations-2), применительно к версии `3.4.1`

Как я говорил в предыдущим репозитории, при выполнении миграции с ключом `--write-sql`, выполняется сама миграция, и генерируется в надежном месте `sql` файл следующего содержания:

```sql
-- Doctrine Migration File Generated on 2022-02-07 22:06:51

-- Version DoctrineMigrations\Version20220207215917
CREATE TABLE projects(id SERIAL PRIMARY KEY, name VARCHAR(50) NOT NULL, description TEXT);
```

Я попробовал сгенерировать `sql` файл через `execute` нно результат такой же:

```sql
-- Doctrine Migration File Generated on 2022-02-07 22:24:01

-- Version DoctrineMigrations\Version20220207215917
DROP TABLE projects;
```

Скорее всего надор либо как-то вручную прописывать логику версионирования, либо делать какой-то механизм, либо получить ответ от разработчиков.

### Установка

`https://github.com/nvrsk-yii2/prepare-doctrine-migrations-3`

`cd prepare-doctrine-migrations-3`

`make docker-up`

Остальные команды я описал [здесь](/docs/COMMANDS.md).

Я оставил пару миграций в репозитории для примера.

### Выводы