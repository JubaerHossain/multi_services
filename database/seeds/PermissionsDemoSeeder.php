<?php

use App\ModuleAction;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();


        $role1 = Role::create(['name' => 'User']);
        $role2 = Role::create(['name' => 'Admin']);
        $role3 = Role::create(['name' => 'Super Admin']);

        // create permissions
        $modules = ModuleAction::all();
        foreach ($modules as $key => $value) {
            $permission =new Permission();
            $permission->name = $value->name;
            $permission->guard_name = 'web';
            $permission->action_id = $value->id;
            $permission->save();
            $role3->givePermissionTo($permission);          
        }       
        $user = App\User::create([
                'name' => 'Admin',
                'first_name' => 'John',
                'last_name' => "Due",
                'email' => 'xteamitbd@gmail.com',
                'password' => Hash::make(12345678),
                'avatar' =>'public/uploads/profile/default.jpg',
                'token' => ''
            ]);
        $user->assignRole($role3);
    }
}
