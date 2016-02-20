//database/migrations/seeds/ownerTableSeeder.php

<?php
 
use Illuminate\Database\Seeder;
 
class ownerTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('owners')->delete();
 
        $owners = array(
            ['id' => 1, 'owner_name' => 'Ernesto Hernandez', 'updated_at' => new DateTime],
               ['id' => 2, 'owner_name' => 'Tech Support', 'updated_at' => new DateTime],
                  ['id' => 3, 'owner_name' => 'Intern ', 'updated_at' => new DateTime],
                     ['id' => 4, 'owner_name' => 'Other', 'updated_at' => new DateTime],
           
        );
 
        // Uncomment the below to run the seeder
        DB::table('owners')->insert($owners);
    }
 
}
 