# REST-API for Contao 4

With this Symfony app it shall be possible to directly query the Contao database.

Please note: The access is **read-only**, no changes can be made to the database. But strangers may gain access to the **user database**...


# Setup

For now, the app is running apart from Contao. You'll have to configure the DATABASE_URL in .env, e.g.

```conf
DATABASE_URL=mysql://contao:contao@127.0.0.1:3306/contao
```

Within the project directory you can start Symfonys own web-server with the following command:

```sh
php bin/console server:start 0.0.0.0:8000
```

The REST-API can then be accessed via http at your server's port 8000.

For now, the access is secured by an admin-password. You can set the password in `/config/packages/security.yaml`.

```yaml
security:
  providers:
    in_memory:
      memory:
        users:
          admin:
            password: $2y$10$p1rJel.5UXPtTgZojZ0/e..e7TVO0zDlrR3pAOpT6EBtdkCjKmrhG
            roles: "ROLE_ADMIN"
```


# Usage

Every listed request must be prepended with `http://<url>/api/`.

## General access to all tables

### `general`

This will respond with a list of all known tables.

### `general/<table>`

Query the data of the given table.

* e.g. `general/tl_article?published=1` listing all public articles

## Request page information (w/o content)

### `page`

* e.g. `page?published=1` listing all public pages

### `page/<id>` or `page/<alias>`

* e.g. `page/home` delivering information about the page with alias 'home'

### `page/sub-list`, `page/sub-tree`, `page/sub-datalist`, `page/sub-datatree`

* Possible structure types of response:
	* `sub-list`:
		* All found pages will be contained in the response as an one-dimensional list.
		* The pages' hierarchy will be represented at every page with an array-field `_path`, e.g. `_path => [3, 7]`, if the given page is the child of the page with ID 7 and grandchild of the page with ID 3.
		* The response will only include basic data about every page, e.g. `[ 'id' => 3, 'alias' => 'home', 'published' => 1 ]`
		* May be combined with URL-filters to reduce the set of listed pages, e.g. `?published=1`
	* `sub-tree`:
		* All found pages will be contained in the response as a two-dimensional array, following the pages' hierarchy.
		* The response will only include basic data about every page, e.g. `[ 'id' => 3, 'alias' => 'home', 'published' => 1 ]`
	* `sub-datalist` or `sub-datatree`
		* Like before but the response will also contain all the pages' information from the database.
		* May be combined with URL-filters to reduce the set of listed pages, e.g. `?published=1`. With type `sub-datatree` all other pages which don't match the URL-filters will still be included but only with basic data.

* Two selectors needed:
	1. `<id>` or `<alias>`
	1. `<maximum-depth>`

* e.g. `page/sub-datalist/home/2` listing the page with alias 'home' together with all it's subordinated pages with a maximum depth of 2
