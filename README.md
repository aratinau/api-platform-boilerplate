# Api-Platform Boilerplate

1. If not already done, [install Docker Compose](https://docs.docker.com/compose/install/) (v2.10+)
2. Run `docker compose build --no-cache` to build fresh images
3. Run `docker compose up --pull always -d --wait` to start the project
4. Open `https://localhost` in your favorite web browser and [accept the auto-generated TLS certificate](https://stackoverflow.com/a/15076602/1352334)
5. Run `docker compose down --remove-orphans` to stop the Docker containers.

## Install API

`composer require api`

`composer require make`
`composer require symfony/orm-pack`

## Install Codeception

`composer require --dev codeception/module-symfony`

`composer require codeception/module-rest --dev`

`composer require codeception/module-doctrine2 --dev`

`composer require codeception/module-datafactory --dev`

`composer require codeception/module-asserts --dev`

`composer require codeception/module-phpbrowser --dev`

### Config Codeception

```
File codeception.yml created        <- global configuration
tests/unit created                  <- unit tests
tests/unit.suite.yml written        <- unit tests suite configuration
tests/functional created            <- functional tests
tests/functional.suite.yml written  <- functional tests suite configuration
tests/acceptance created            <- acceptance tests
tests/acceptance.suite.yml written  <- acceptance tests suite configuration
Codeception is installed for acceptance, functional, and unit testing
Next steps:
1. Edit tests/acceptance.suite.yml to set the url of your application. Change PhpBrowser to WebDriver to enable browser testing.
2. Edit tests/functional.suite.yml to enable Doctrine module if needed.
3. Create your first acceptance test using vendor/bin/codecept g:cest Acceptance First
4. Write your first test in tests/acceptance/FirstCest.php
5. Run tests using: vendor/bin/codecept run

```
