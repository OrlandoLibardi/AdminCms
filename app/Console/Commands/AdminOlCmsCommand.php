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
<<<<<<< HEAD
        $this->info('1- Copiar arquivos do OLCMS Admin');
        $this->call('vendor:publish', ['--provider'=> 'OrlandoLibardi\OlCms\AdminCms\app\Providers\AdminCmsServiceProvider', '--tag' => 'config']);
        
        $this->info('2- Migrate:');        
        $this->call('migrate');

        $this->info('3- Composer dump-autoload');
        $this->composer->dumpAutoloads();
        
        $this->info('4- Cache Clear');
        $this->call('cache:clear');

        $this->info('5- Composer dump Optimized');
        $this->composer->dumpOptimized();

        $this->info('6- Seedes');
=======
        
        $this->call('vendor:publish', ['--provider'=> 'OrlandoLibardi\OlCms\AdminCms\app\Providers\AdminCmsServiceProvider', '--tag' => 'config']);
                
        $this->call('migrate');

        $this->composer->dumpAutoloads();

>>>>>>> parent of 8bfc51f... adicionado comando
        $this->call('db:seed', ['--class' => 'AdminPagesCmsTableSeeder']); 
        
        $this->info('Concluído: Administrador instalado com sucesso!');        

        
        return 0;
        
    }
}


