<?php

namespace Tests\Stub;

use Faker\Factory;
use Faker\Generator;

class GeneratorStub
{
    public static GeneratorStub $instance;

    public static function random(): Generator
    {
        return self::instance()->generator();
    }

    public function generator(): Generator
    {
        return Factory::create('pt_BR');
    }

    public static function instance(): GeneratorStub
    {
        if (! isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}
