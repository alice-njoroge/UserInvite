<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            ['name' => 'can create a building '],
            ['name' => 'can view a building'],
            ['name' => 'can edit a building'],
            ['name' => 'can remove a building'],
            ['name' => 'can create payment'],
            ['name' => 'can view payment'],
            ['name' => 'can edit payment'],
            ['name' => 'can remove payment']
        ];
        foreach ($permissions as $permission) {
            Permission::create($permission);
        }

    }
}
