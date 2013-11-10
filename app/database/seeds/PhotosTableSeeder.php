<?php

class PhotosTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('photos')->truncate();

		$photos = array(
			 array(
                'caption'   	=> 'Some Shity Caption',
                'path'      	=> '/assets/img/bg-wood.jpg',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
			  array(
                'caption'   => 'Some Shity Caption',
                'path'      => '/assets/img/bg-wood2.jpg',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
		);

		// Uncomment the below to run the seeder
		DB::table('photos')->insert($photos);
	}

}
