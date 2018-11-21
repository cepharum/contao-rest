* Initialisation of project

```sh
composer create-project symfony/skeleton contao-rest
cd contao-rest
composer require symfony/web-server-bundle --dev
composer require symfony/orm-pack
composer require symfony/maker-bundle --dev
composer require symfony/security-bundle
```

* Generating entities matching Contao's database structure:

```sh
bin/console doctrine:mapping:import 'App\Entity' annotation --path=src/Entity
bin/console make:entity --regenerate App
```

* Generating a repositoriy classes for every entity:
  * Following https://stackoverflow.com/questions/51774053/symfony-4-and-doctrine-how-to-generate-repository-automatically-after-mapping

```sh
for file in ./src/Entity/*; do printf -v sed_expr '/\\*\\s*@ORM\\\\Entity\\(\\s\\|$\\)/s/Entity/Entity(repositoryClass="App\\\\Repository\\\\%sRepository")/' $(basename ${file%.php}); sed -i -e "$sed_expr" $file; done
bin/console make:entity --regenerate App
```

* Starting Symfony's http server:

```sh
bash server-start.sh
```

# Relations within Contao's database:

```json
{
	tl_article: {
		config:	{
			dataContainer:	"Table",
			ptable:	"tl_page",
			ctable:	["tl_content"],
			sql:	{
				keys:	["id"]
			}
		},
		fields: {
			id:	"key",
			pid:	{
				foreignKey:	"tl_page.title"
				relation:	{
					type:	"belongsTo",
					load:	"lazy"
				}
			},
			sorting:	"sorting",
			published:	"visible"
		}
	},
	tl_content:	{
		config:	{
			dataContainer:	"Table",
			ptable:	["tl_content", "tl_article"]
			dynamicPtable:	true
		},
		fields:	{
			id:	"key",
			pid:	"dynamicParent",
			ptable:	"parentTable",
			sorting:	"sorting",
			invisible:	"hidden"
		}
	},
	tl_page:	{
		config:	{
			dataContainer:	"Table",
			ctable:	["tl_article"],
			pid:	"tl_page",
			sorting:	"sorting",
			published:	"visible"
		}
	}
}
```
