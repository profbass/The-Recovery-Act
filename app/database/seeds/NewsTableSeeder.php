<?php

class NewsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('news')->truncate();

		$news = array(
			 array(
                'title'   		=> 'First News Title',
                'body'      	=> 'Retro exercitation fanny pack butcher 8-bit quis. Banjo aliqua mustache Terry Richardson, nisi kitsch fashion axe food truck fingerstache iPhone post-ironic. PBR&B direct trade disrupt, gastropub Banksy mustache aliqua messenger bag yr. Seitan tousled flannel, craft beer paleo bitters kitsch 3 wolf moon cray master cleanse. Gastropub ugh distillery, raw denim deep v church-key ethnic YOLO squid. Farm-to-table fanny pack Pinterest post-ironic, assumenda butcher sartorial sriracha ennui velit pork belly occaecat incididunt photo booth. Ethical anim duis, Tonx Etsy fugiat next level High Life sriracha cray.',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
			  array(
                'title'   	=> 'Second News Title',
                'body'      => 'Beard High Life fap, scenester ennui hella fugiat 90s mlkshk pariatur XOXO delectus retro deep v. Cupidatat chillwave yr vero, PBR eu fashion axe Thundercats Truffaut. Nisi irony 3 wolf moon, vinyl excepteur next level mixtape readymade consequat scenester Portland officia non eu. Mumblecore placeat plaid, paleo qui ullamco irony cardigan distillery. Nihil whatever YOLO occaecat. Dolore scenester voluptate street art you probably havent heard of them dreamcatcher. Meggings McSweeneys PBR leggings.',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),

		);

		// Uncomment the below to run the seeder
		 DB::table('news')->insert($news);
	}

}
