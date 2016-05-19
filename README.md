# plus GainTime
###### Versão de desenvolvimento

**Abstração de CRUD em php para o GainTime**


### Model
Você vai utilizar a `./lib/model/base.php` para dar um `extends` da nossa `\Model\Base` em sua model.

```php
require_once('../lib/model/base.php');

class User extends \Model\Base
{
    public $fillable = ['id', 'name', 'email', 'level'];
}

```

Isto é tudo o que você precisa para utilizar as funções básicas de um CRUD.

IMPORTANTE: Para utilizar a `\Model\Base`, suas funções e propriedades corretamente, você vai precisar nomear suas tabelas do banco de dados com o mesmo nome da model correpondente acrescido de s.
```
- Model: User
- Correspondent database table: users
```

... we'll continue
