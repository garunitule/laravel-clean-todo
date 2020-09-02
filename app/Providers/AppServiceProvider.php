<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // パターンごとにメソッドを作っておけばDIを制御できる。
        // 例えば、テスト用と本番用、MySQl版とPostgreSQL版など
        $this->registerForInMemory();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    private function registerForInMemory()
    {
        $this->app->singleton(
            \packages\Domain\Domain\Todo\TodoRepositoryInterface::class,
            \packages\Infrastructure\Todo\TodoRepository::class
        );

        $this->app->bind(
            \packages\UseCase\Todo\Create\TodoCreateUseCaseInterface::class,
            \packages\Domain\Application\Todo\TodoCreateInteractor::class
        );
    }
}
