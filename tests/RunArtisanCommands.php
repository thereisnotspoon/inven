<?php
namespace Tests;
use Illuminate\Support\Facades\Artisan;

trait RunArtisanCommands
{
    /**
    * If true, setup has run at least once.
    * @var boolean
    */
    protected static $setUpHasRunOnce = false;
    /**
    * After the first run of setUp "migrate:fresh --seed"
    * @return void
    */
    public function setUp() : void
    {
        parent::setUp();
        if (!static::$setUpHasRunOnce) {
            Artisan::call('migrate:fresh');
            Artisan::call(
                'db:seed', ['--class' => 'DatabaseSeeder']
            );
            Artisan::call('passport:install');
            static::$setUpHasRunOnce = true;
         }
    }
}