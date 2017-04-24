<?php

use Illuminate\Database\Seeder;
use App\NotificationType;

class NotificationTypesSeeder extends Seeder
{
    private $notification_types;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->setData();

        foreach ($this->notification_types as $notification_type){
            $nt = new NotificationType();
            $nt->code = $notification_type['code'];
            $nt->name = $notification_type['name'];
            $nt->save();
        }
    }

    public function setData(){
        $notification_types = array(
            array('id' => '1','code' => '1','name' => 'Alert'),
            array('id' => '2','code' => '2','name' => 'Bill'),
            array('id' => '3','code' => '3','name' => 'Statement'),
            array('id' => '4','code' => '4','name' => 'Surmon')
        );

        $this->notification_types = $notification_types;
    }
}
