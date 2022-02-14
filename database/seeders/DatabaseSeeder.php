<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function __construct() {
        $this->userModel = new User();
    }
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->userModel->truncate();
        $this->userModel->factory(10)->create();
    }
}
