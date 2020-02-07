install:
	composer install

verify:
	vendor/bin/phpcs --standard=PSR2 . --standard=ruleset.xml
	vendor/bin/phpstan analyse . tests --level max  --memory-limit=512M
	vendor/bin/phpunit tests

phpcbf:
	vendor/bin/phpcbf --standard=PSR2 . tests

phpcbf-fix:
	vendor/bin/phpcbf --standard=PSR2 . tests -w

phpunit:
	vendor/bin/phpunit tests

phpstan:
	vendor/bin/phpstan analyse . tests --level max --memory-limit=512M
