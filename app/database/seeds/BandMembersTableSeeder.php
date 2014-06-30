<?php

class BandMembersTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('band_members')->truncate();

		$band_members = array(
			 array(
                'first_name'   	=> 'Tyler',
                'last_name'      	=> 'Olmsted',
                'bio'   	=> 'Some Shity Caption',
                'avatar'      	=> '/assets/img/bg-wood.jpg',
                'instrument'   	=> 'Bass',
                'email'      	=> 'profbass@gmail.com',
                'facebook_url'   	=> 'http://www.faceboook.com/tyler.olmsted',
                'twitter_handel'      	=> '@profbass',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
			array(
                'first_name'   	=> 'Adam',
                'last_name'      	=> 'Williamson',
                'bio'   	=> 'Some Shity Caption',
                'avatar'      	=> '/assets/img/bg-wood.jpg',
                'instrument'   	=> 'Keys',
                'email'      	=> 'jawilliamson@gmail.com',
                'facebook_url'   	=> 'http://www.faceboook.com/willy.williamson',
                'twitter_handel'      	=> '@willy',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            )
		);

		// Uncomment the below to run the seeder
		DB::table('band_members')->insert($band_members);
	}

}
