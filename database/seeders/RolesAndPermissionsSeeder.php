<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create roles
        $admin = Role::create([
            'name' => 'admin'
        ]);
        $moderator = Role::create([
            'name' => 'moderator'
        ]);
        $editor = Role::create([
            'name' => 'editor'
        ]);


        // Roles permissions
        Permission::create([
            'name' => 'view roles',
            "order" => 1
        ]);
        Permission::create([
            'name' => 'create roles',
            "order" => 1
        ]);
        Permission::create([
            'name' => 'edit roles',
            "order" => 1
        ]);
        Permission::create([
            'name' => 'delete roles',
            "order" => 1
        ]);

        // Permissions permissions
        Permission::create([
            'name' => 'view permissions',
            "order" => 2
        ]);
        Permission::create([
            'name' => 'create permissions',
            "order" => 2
        ]);
        Permission::create([
            'name' => 'edit permissions',
            "order" => 2
        ]);
        Permission::create([
            'name' => 'delete permissions',
            "order" => 2
        ]);

        // Users permissions
        Permission::create([
            'name' => 'view users',
            "order" => 3
        ]);
        Permission::create([
            'name' => 'show users',
            "order" => 3
        ]);
        Permission::create([
            'name' => 'create users',
            "order" => 3
        ]);
        Permission::create([
            'name' => 'edit users',
            "order" => 3
        ]);
        Permission::create([
            'name' => 'delete users',
            "order" => 3
        ]);


        // Attacks permissions
        Permission::create([
            'name' => 'view attacks',
            "order" => 4
        ]);
        Permission::create([
            'name' => 'show attacks',
            "order" => 4
            ]);
        Permission::create([
            'name' => 'create attacks',
            "order" => 4
        ]);
        Permission::create([
            'name' => 'edit attacks',
            "order" => 4
        ]);
        Permission::create([
            'name' => 'delete attacks',
            "order" => 4
        ]);

        // Barcodes permissions
        Permission::create([
            'name' => 'view barcodes',
            "order" => 5
        ]);
        Permission::create([
            'name' => 'show barcodes',
            "order" => 5
        ]);
        Permission::create([
            'name' => 'create barcodes',
            "order" => 5
        ]);
        Permission::create([
            'name' => 'edit barcodes',
            "order" => 5
        ]);
        Permission::create([
            'name' => 'delete barcodes',
            "order" => 5
        ]);


        // Brands permissions
        Permission::create([
            'name' => 'view brands',
            "order" => 6
        ]);
        Permission::create([
            'name' => 'show brands',
            "order" => 6
        ]);
        Permission::create([
            'name' => 'create brands',
            "order" => 6
        ]);
        Permission::create([
            'name' => 'edit brands',
            "order" => 6
        ]);
        Permission::create([
            'name' => 'delete brands',
            "order" => 6
        ]);

        // Celebrities permissions
        Permission::create([
            'name' => 'view celebrities',
            "order" => 7
        ]);
        Permission::create([
            'name' => 'show celebrities',
            "order" => 7
        ]);
        Permission::create([
            'name' => 'create celebrities',
            "order" => 7
        ]);
        Permission::create([
            'name' => 'edit celebrities',
            "order" => 7
        ]);
        Permission::create([
            'name' => 'delete celebrities',
            "order" => 7
        ]);

        // Hashtag permissions
        Permission::create([
            'name' => 'view hashtags',
            "order" => 8
        ]);
        Permission::create([
            'name' => 'show hashtags',
            "order" => 8
        ]);
        Permission::create([
            'name' => 'create hashtags',
            "order" => 8
        ]);
        Permission::create([
            'name' => 'edit hashtags',
            "order" => 8
        ]);
        Permission::create([
            'name' => 'delete hashtags',
            "order" => 8
        ]);

        // Live Tracker permissions
        Permission::create([
            'name' => 'view livetracker',
            "order" => 9
        ]);
        Permission::create([
            'name' => 'show livetracker',
            "order" => 9
        ]);
        Permission::create([
            'name' => 'create livetracker',
            "order" => 9
        ]);
        Permission::create([
            'name' => 'edit livetracker',
            "order" => 9
        ]);
        Permission::create([
            'name' => 'delete livetracker',
            "order" => 9
        ]);

        // Media permissions
        Permission::create([
            'name' => 'view media',
            "order" => 10
        ]);
        Permission::create([
            'name' => 'show media',
            "order" => 10
        ]);
        Permission::create([
            'name' => 'create media',
            "order" => 10
        ]);
        Permission::create([
            'name' => 'edit media',
            "order" => 10
        ]);
        Permission::create([
            'name' => 'delete media',
            "order" => 10
        ]);

        // Regions permissions
        Permission::create([
            'name' => 'view regions',
            "order" => 11
        ]);
        Permission::create([
            'name' => 'show regions',
            "order" => 11
        ]);
        Permission::create([
            'name' => 'create regions',
            "order" => 11
        ]);
        Permission::create([
            'name' => 'edit regions',
            "order" => 11
        ]);
        Permission::create([
            'name' => 'delete regions',
            "order" => 11
        ]);

        // Cities permissions
        Permission::create([
            'name' => 'view cities',
            "order" => 12
        ]);
        Permission::create([
            'name' => 'show cities',
            "order" => 12
        ]);
        Permission::create([
            'name' => 'create cities',
            "order" => 12
        ]);
        Permission::create([
            'name' => 'edit cities',
            "order" => 12
        ]);
        Permission::create([
            'name' => 'delete cities',
            "order" => 12
        ]);

        // States permissions
        Permission::create([
            'name' => 'view states',
            "order" => 13
        ]);
        Permission::create([
            'name' => 'show states',
            "order" => 13
        ]);
        Permission::create([
            'name' => 'create states',
            "order" => 13
        ]);
        Permission::create([
            'name' => 'edit states',
            "order" => 13
        ]);
        Permission::create([
            'name' => 'delete states',
            "order" => 13
        ]);

        // Countries permissions
        Permission::create([
            'name' => 'view countries',
            "order" => 14
        ]);
        Permission::create([
            'name' => 'show countries',
            "order" => 14
        ]);
        Permission::create([
            'name' => 'create countries',
            "order" => 14
        ]);
        Permission::create([
            'name' => 'edit countries',
            "order" => 14
        ]);
        Permission::create([
            'name' => 'delete countries',
            "order" => 14
        ]);

        // Sessions permissions
        Permission::create([
            'name' => 'view sessions',
            "order" => 15
        ]);
        Permission::create([
            'name' => 'show sessions',
            "order" => 15
        ]);
        Permission::create([
            'name' => 'create sessions',
            "order" => 15
        ]);
        Permission::create([
            'name' => 'edit sessions',
            "order" => 15
        ]);
        Permission::create([
            'name' => 'delete sessions',
            "order" => 15
        ]);


        $admin->givePermissionTo(

            // Roles permissions
            'view roles',
            'create roles',
            'edit roles',
            'delete roles',

            // Permissions permissions
            'view permissions',
            'create permissions',
            'edit permissions',
            'delete permissions',

            // Users permissions
            'view users',
            'show users',
            'create users',
            'edit users',
            'delete users',

            // Attacks permissions
            'view attacks',
            'show attacks',
            'create attacks',
            'edit attacks',
            'delete attacks',

            // Barcodes permissions
            'view barcodes',
            'show barcodes',
            'create barcodes',
            'edit barcodes',
            'delete barcodes',

            // Brands permissions
            'view brands',
            'show brands',
            'create brands',
            'edit brands',
            'delete brands',

            // Celebrities permissions
            'view celebrities',
            'show celebrities',
            'create celebrities',
            'edit celebrities',
            'delete celebrities',

            // Hashtags permissions
            'view hashtags',
            'show hashtags',
            'create hashtags',
            'edit hashtags',
            'delete hashtags',

            // Live Tracker permissions
            'view livetracker',
            'show livetracker',
            'create livetracker',
            'edit livetracker',
            'delete livetracker',

            // Media permissions
            'view media',
            'show media',
            'create media',
            'edit media',
            'delete media',

            // Regions permissions
            'view regions',
            'show regions',
            'create regions',
            'edit regions',
            'delete regions',

            // Cities permissions
            'view cities',
            'show cities',
            'create cities',
            'edit cities',
            'delete cities',

            // States permissions
            'view states',
            'show states',
            'create states',
            'edit states',
            'delete states',

            // Countries permissions
            'view countries',
            'show countries',
            'create countries',
            'edit countries',
            'delete countries',

            // Sessions permissions
            'view sessions',
            'show sessions',
            'create sessions',
            'edit sessions',
            'delete sessions',

            );

        $moderator->givePermissionTo(

            // Attacks permissions
            'view attacks',
            'show attacks',
            'create attacks',
            'edit attacks',
            'delete attacks',

            // Live Tracker permissions
            'view livetracker',
            'show livetracker',
            'create livetracker',
            'edit livetracker',
            'delete livetracker',
        );

        $editor->givePermissionTo(

            // Attacks permissions
            'view attacks',
            'show attacks',
            'create attacks',
            'edit attacks',
            'delete attacks',
        );
    }
}
