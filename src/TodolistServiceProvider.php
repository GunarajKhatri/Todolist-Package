<?php

namespace Gunaraj\Todolist;

use Illuminate\Support\ServiceProvider;

class TodolistServiceProvider extends ServiceProvider
{
	public function boot()
	{
		$this->loadRoutesFrom(__DIR__.'/routes/web.php');
		$this->loadViewsFrom(__DIR__.'/views','todolist');
		$this->loadViewsFrom(__DIR__.'/views','edittodolist');
		$this->loadMigrationsFrom(__DIR__.'/database/migrations');
		$this->publishes([
			__DIR__.'/views' => resource_path('views/vendor/todolist')
		]
		);
	}
	public function register()
	{
		
	}
}