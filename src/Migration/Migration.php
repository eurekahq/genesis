<?php

namespace App\Migration;

use Illuminate\Database\Capsule\Manager as Capsule;
use Phinx\Migration\AbstractMigration;

class Migration extends AbstractMigration {
    /** @var \Illuminate\Database\Capsule\Manager $capsule */
    public $capsule;
    /** @var \Illuminate\Database\Schema\Builder $schema */
    public $schema;

    public function init() {
        /** @var Array $credentials */
        $credentials = require __DIR__ . '/../../app/database.php';

        $this->capsule = new Capsule;
        $this->capsule->addConnection($credentials);

        $this->capsule->bootEloquent();
        $this->capsule->setAsGlobal();
        $this->schema = $this->capsule->schema();
    }
}