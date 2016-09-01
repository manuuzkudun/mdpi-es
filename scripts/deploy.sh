#!/bin/bash
if [[ $1 = "" ]]
then
    echo "Usage: ./deploy.sh <prepare | go>"
    exit 1;
fi

opts=""
if [[ $1 != "go" ]]
then
    opts="--dry-run"
fi

sudo rsync -avz $opts --exclude=app/logs/  --exclude=app/cache/ --exclude=.git /var/staging_www/mdpi.es/ /var/www/mdpi.es/

sudo chown -R www-data /var/www/mdpi.es
sudo chgrp -R www-data /var/www/mdpi.es

## Don't run symfony commands when preparing
if [[ $1 == "go" ]]; then
	sudo -u www-data /var/www/mdpi.es/app/console cache:clear --env=prod
	sudo -u www-data /var/www/mdpi.es/app/console cache:clear --env=dev
	sudo -u www-data /var/www/mdpi.es/app/console assets:install --symlink
# doesnt work at the moment
#	sudo -u www-data /var/www/mdpi.es/app/console assets:compress
fi
