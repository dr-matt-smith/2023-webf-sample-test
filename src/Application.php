<?php

namespace Tudublin;

class Application
{
    public function run()
    {
        $action = filter_input(INPUT_GET, 'action');

        switch ($action){
            case 'address':
                require_once __DIR__ . '/../templates/address.php';
                break;

            case 'modules':
                $repo = new ModuleRepository();
                $modules = $repo->findAll();
                require_once __DIR__ . '/../templates/modules.php';
                break;

            case 'module':
                $id = filter_input(INPUT_GET, 'id');
                $repo = new ModuleRepository();
                $modules = $repo->find($id);
                require_once __DIR__ . '/../templates/module.php';
                break;

            default:
                require_once __DIR__ .  '/../templates/home.php';
        }
	}
}