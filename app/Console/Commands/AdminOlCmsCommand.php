<?php

namespace OrlandoLibardi\OlCms\AdminCms\app\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Composer;

class AdminOlCmsCommand extends Command{


   /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'OLCMS:Admin';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cria o administrador e suas dependências';
    /**
     * The Composer instance.
     *
     * @var \Illuminate\Support\Composer
     */
    protected $composer;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Composer $composer)
    {
        parent::__construct();
        $this->composer = $composer;
    }


    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('iniciando administrador');
        $this->call('vendor:publish', ['--provider'=> 'OrlandoLibardi\OlCms\AdminCms\app\Providers\AdminCmsServiceProvider', '--tag' => 'config']);
        $this->info('iniciando migrate');        
        $this->call('migrate');
        $this->info('composer dump-autoload');
        $this->composer->dumpAutoloads();
        $this->info('cache clear');
        $this->call('cache:clear');
        $this->info('iniciando seed');
        $this->call('db:seed', ['--class' => 'AdminPagesCmsTableSeeder']); 
        
        $this->info('Concluído:');
        $this->info('Administrador instalado com sucesso!');        

        
        return 0;
        
    }
}


