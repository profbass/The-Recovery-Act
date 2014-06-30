<?php

class ShowsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('shows')->delete();


        $users = array(
            array(
                'date'      => '2014-02-05 22:00:00',
                'venue'      => 'Fox Theatre',
                'address'   => '2509 Welton St, Denver Co',
                'content'   => '<p>Resource controllers make it easier to build RESTful controllers around resources. For example, you may wish to create a controller that manages photos stored by your application. Using the controller:make command via the Artisan CLI and the Route::resource method, we can quickly create such a controller.</p>',
                'web_link' => 'http://testlink.com',
                'facebook_link' => 'http://facebook.com',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
            array(
                'date'      => '2014-05-12 23:30:00',
                'venue'      => 'Marquee Theatre',
                'address'   => '123 Bryant St, Boulder Co',
                'content'   => '<p>Resource controllers make it easier to build RESTful controllers around resources. For example, you may wish to create a controller that manages photos stored by your application. Using the controller:make command via the Artisan CLI and the Route::resource method, we can quickly create such a controller.</p>',
                'web_link' => 'http://testlink.com',
                'facebook_link' => 'http://facebook.com',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            )
        );

        DB::table('shows')->insert( $shows );
    }

}
 