## Weather client

#### Pre-installation actions:
1. Go to [Weather API](https://www.weatherapi.com/signup.aspx)
2. Create an account and copy API Key to .env.

#### Documentation
* Endpoint for get current weather: `api/weather/{city}`
* Available on `/api/doc`

### Installation process:
Docker required. Checked on version 4.38
Installation process is pretty simple
1. `cp .env.example .env`
2. `make init`

### Other usefully commands:
* `make start` - Start containers
* `make stop` - Stop containers
* `make sh` - Enter to container bash
* `make test` - Run phpunit tests
* `make remove-all-data` - Remove all containers and volumes
