<?php
namespace Pifarek\Administrator;
use Illuminate\Support\ServiceProvider;
 
class AdministratorServiceProvider extends ServiceProvider {

    public function boot(){

    }

    public function register() {
        include __DIR__.'/Http/routes.php';
    }
}