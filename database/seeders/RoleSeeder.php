<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          //........................................................................................................
          $role1= Role::create(['name'=> 'Admin']);
          $role2= Role::create(['name'=> 'Editor']);
  
          //........................................................................................................
          Permission::create(['name'=> 'coches.listado'])->syncRoles([$role1]);
          Permission::create(['name'=> 'coches.edit'])->syncRoles([$role1]);
          Permission::create(['name'=> 'coches.create'])->syncRoles([$role1]);
          Permission::create(['name'=> 'coches.show'])->syncRoles([$role1]);
  
          Permission::create(['name'=> 'propietarios.listado'])->syncRoles([$role1]);
          Permission::create(['name'=> 'propietarios.edit'])->syncRoles([$role1]);
          Permission::create(['name'=> 'propietarios.create'])->syncRoles([$role1]);
          Permission::create(['name'=> 'propietarios.show'])->syncRoles([$role1]);
  
          Permission::create(['name'=> 'roles.listado'])->syncRoles([$role1]);
          Permission::create(['name'=> 'roles.editar'])->syncRoles([$role1]);
          Permission::create(['name'=> 'roles.update'])->syncRoles([$role1]);
      }
    }
