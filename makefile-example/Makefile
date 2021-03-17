.PHONY: help run submodules gitfix

help: ## Outputs this help screen
	@grep -E '(^[a-zA-Z0-9_-]+:.*?##.*$$)|(^##)' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}{printf "\033[32m%-30s\033[0m %s\n", $$1, $$2}' | sed -e 's/\[32m##/[33m/'

## Scripts

run: ## Execute run.php in a temporary Docker container
	docker run -v $(PWD):/var/www -w /var/www --rm php:7.4-alpine php run.php

## Git

submodules: ## Update Git submodules
	@git submodule init
	@git submodule update
	@echo "Submodules up to date"

gitfix: ## Quickly push a fix
	@git add .
	@git commit -m "Quick fix"
	@git push

