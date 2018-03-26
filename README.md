# SimpleTests

First
```
composer require phpunit/phpunit
```

Second
```json
{
	
    "require": {
        "phpunit/phpunit": "^7.0"
    },
    "autoload":{
		"psr-4":{
			"App\\": "App"
		}
	}
}

```
Use:`composer dump-autoload -o`
More about psr-4 autoloading at: `https://getcomposer.org/doc/04-schema.md#psr-4`

Tird
```xml
<?xml version="1.0" encoding="UTF-8"?>
<phpunit boostrap="vendor/autoload.php"
	colors="true"
	verbose="true"
	stopOnFailure="false">
	<testsuites>
		<testsuite name="Test suite">
			<directory>tests</directory>
		</testsuite> 
	</testsuites>
</phpunit>
```
More about PHPUnit configuration at `https://phpunit.de/manual/current/en/appendixes.configuration.html`
