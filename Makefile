test:
	php vendor/bin/phpunit

assets-install:
	npm install

assets-dev:
	npm run dev

assets-prod:
	npm run prod

assets-watch:
	npm run watch

assets-rebuild:
	npm rebuild node-sass --force
