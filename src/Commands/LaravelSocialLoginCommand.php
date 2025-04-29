<?php

namespace lukasyelle\LaravelSocialLogin\Commands;

use Illuminate\Console\Command;

class LaravelSocialLoginCommand extends Command
{
    public $signature = 'laravel-social-login';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
