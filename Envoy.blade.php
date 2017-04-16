@servers(['web' => ['root@drimbe.info']])

@task('deploy', ['on' => 'web'])
	cd /var/www/html
	
	git pull origin master
	
	composer install
	php artisan migrate --force
	php artisan config:cache
	php artisan route:cache
	php artisan optimize
	php artisan cache:clear
@endtask