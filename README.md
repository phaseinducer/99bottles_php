# 99 bottles PHP

## Setup

1. Run `docker compose build`. This will build a very light Debian image containing only PHP 7.4 CLI and composer.
2. Check the image is ok by running `docker compose run --rm php php -v`
3. Install dependencies: `docker compose run --rm php composer install`
