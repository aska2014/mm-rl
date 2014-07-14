<?php

class CreateAdminResourceCommand extends \Illuminate\Console\Command {

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'admin:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create admin resource tables.';

    protected $asked = false;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function fire()
    {
        // Get resources as an array
        $resource = $this->argument('resource');

        $resource = trim($resource);
        $resource = strtolower($resource);

        // Template location
        $this->createTemplate(__DIR__.'/admin_template.txt',
                            app_path('/controllers/Admin'), ucfirst(Str::camel($resource)).'Controller.php');

        $this->createTemplate(__DIR__.'/views/add.txt',
                            app_path('views/admin/'.$resource), 'add.blade.php');

        $this->createTemplate(__DIR__.'/views/all.txt',
                            app_path('views/admin/'.$resource), 'all.blade.php');

        $this->comment('Resource created successfully.');
    }

    public function createTemplate($source, $destination, $fileName)
    {
        // Get source code
        $sourceData = $this->prepareTemplate(file_get_contents($source));

        // If file exists then ask if he wants to override
        if(!$this->asked && file_exists($destination.'/'.$fileName) && $this->ask('This will override the resource? [y|n] ') !== 'y')
        {
            exit();
        }

        $this->asked = true;

        if(! file_exists($destination)) mkdir($destination);

        file_put_contents($destination.'/'.$fileName, $sourceData);
    }

    /**
     * @param $template
     * @return mixed
     */
    protected function prepareTemplate($template)
    {
        $resource = $this->argument('resource');

        $resource = trim($resource);
        $resource = strtolower($resource);

        $template = str_replace('{url}' , $resource , $template);
        $template = str_replace('{view}' , $resource , $template);

        $template = str_replace('{input}' , ucfirst(Str::camel($resource)), $template);
        $template = str_replace('{class}' , ucfirst(Str::camel($resource)), $template);

        $template = str_replace('{title}' , ucfirst(str_replace('-', ' ', $resource)), $template);

        $template = str_replace('{variable}' , lcfirst(Str::camel($resource)), $template);
        $template = str_replace('{variablePlural}' , lcfirst(Str::camel(Str::plural($resource))), $template);

        return $template;
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return array(
            array('resource', \Symfony\Component\Console\Input\InputArgument::REQUIRED, 'Resources name.'),
        );
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return array(
        );
    }

}