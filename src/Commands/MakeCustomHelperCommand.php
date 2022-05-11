<?php

namespace RanjbarAli\LaravelCustomHelper\Commands;

use Illuminate\Console\GeneratorCommand;

class MakeCustomHelperCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'make:helper';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make custom helper';

    protected $type = "helper";

    public function handle()
    {
        if (!preg_match('/^[a-zA-Z_]+[a-zA-Z0-9_]*$/', $this->argument('name'))):
            $this->error('Name must be a valid function name!');
            return 0;
        endif;
        parent::handle();
    }

    protected function getStub()
    {
        return __DIR__ . '/../Stubs/custom-helper.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . "\\" . str_replace('/', '\\', config('laravel-custom-helper.directory'));
    }

    protected function replaceClass($stub, $name)
    {
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);
        return str_replace('function_name', $class, $stub);
    }
}
