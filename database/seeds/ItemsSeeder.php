<?php

use Illuminate\Database\Seeder;
use App\Item;

/**
 * Created by PhpStorm.
 * User: simon
 * Date: 2018-09-02
 * Time: 17:32
 */

class ItemsSeeder extends Seeder
{
    /**
     * Run the items database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item1 = Item::create([
            'name' => 'Contacts',
            'device_rating' => 2,
            'description' => 'The most recent display devices are worn directly on the eyes, They are nearly undetectable, but they offer a bit of space for enhancements.' .
                ' Contacts have to be wireless; they don\'t have room for a universal data connector',
            'availability' => 6,
            'cost' => 200.00,
            'capacity' => '1-3',
            'rating_max' => 3,
            'source' => 'core rulebook',
            'category' => 'Optical & Imaging Devices',
            'is_cost_dynamic' => true,
            'is_avail_dynamic' => true,
        ]);

        $item2 = Item::create([
            'name' => 'Medkit',
            'device_rating' => 2,
            'description' => 'The medkit includes drug supplies, bandages, tools, and a (talkative) doctor expert system that can 
            advise the user on techniques to handle most typical medical emergencies (including fractures, gunshot wounds, chemical wounds, and poisoning, 
            as well as offering advice for the treating of shock, handling blood loss, and of course performing resuscitations). 
            A medkit needs to be restocked after every (Rating) uses. Medkits provide a dice pool bonus equal to its rating to First Aid + Logic tests. 
            Wireless: The Medkit provides a dice pool bonus equal to its rating to Firstaid + logic tests, or can operate itself with a dice pool of Medkit Rating x2 and a limit equal to its Rating ',
            'availability' => 1,
            'cost' => 250.00,
            'capacity' =>   '5',
            'rating_max' => 6,
            'source' => 'core rulebook',
            'category' => 'Biotech',
            'is_cost_dynamic' => true,
            'is_avail_dynamic' => true,
        ]);
    }
}
