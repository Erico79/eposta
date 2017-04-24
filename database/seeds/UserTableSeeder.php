<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    private $users = [];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->setUsers();

        $individual = \App\CustomerType::where('customer_type_code', 'INDIVIDUAL')->first();
        foreach ($this->users as $user){
            // create default users
            $new_user = new User();
            $new_user->first_name = $user['first_name'];
            $new_user->middle_name = $user['middle_name'];
            $new_user->last_name = $user['last_name'];
            $new_user->pin = $user['pin'];
            $new_user->identity_number = $user['identity_number'];
            $new_user->email = str_random(10).'@gmail.com';
            $new_user->password = bcrypt('pass123');
            $new_user->date_added = $user['date_added'];
            $new_user->mobile_number = $user['mobile_number'];
            $new_user->customer_type_id = $individual->id;
            $new_user->save();
        }
    }

    public function setUsers(){
        $users = array(
            array('id' => '1','first_name' => 'Alex','middle_name' => 'O.','last_name' => 'Fares','pin' => '1234','identity_number' => '10001001','date_added' => '2017-01-20 08:42:06','mobile_number' => '254722756923'),
            array('id' => '2','first_name' => 'Titus','middle_name' => 'Kirui','last_name' => 'Kipruto','pin' => '4381','identity_number' => '29242699','date_added' => '2017-01-20 08:45:23','mobile_number' => '717138276'),
            array('id' => '3','first_name' => NULL,'middle_name' => NULL,'last_name' => NULL,'pin' => '9134','identity_number' => '25287540','date_added' => '2017-01-20 08:45:49','mobile_number' => NULL),
            array('id' => '4','first_name' => 'Mike','middle_name' => 'J','last_name' => 'Kimutai','pin' => '1234','identity_number' => '12341234','date_added' => '2017-01-21 18:21:33','mobile_number' => '767890'),
            array('id' => '5','first_name' => 'John','middle_name' => 'Munene','last_name' => 'Mburu','pin' => '2810','identity_number' => '29290751','date_added' => '2017-01-23 01:23:34','mobile_number' => '719370325'),
            array('id' => '6','first_name' => 'John','middle_name' => 'M','last_name' => 'Mburu','pin' => '2929','identity_number' => '2929075111','date_added' => '2017-01-23 02:23:06','mobile_number' => '7'),
            array('id' => '7','first_name' => 'John','middle_name' => 'm','last_name' => 'Mburu','pin' => '4381','identity_number' => '12345678','date_added' => '2017-01-23 02:49:58','mobile_number' => '1236474'),
            array('id' => '8','first_name' => NULL,'middle_name' => NULL,'last_name' => NULL,'pin' => '4833','identity_number' => '22288339','date_added' => '2017-01-23 03:24:29','mobile_number' => NULL),
            array('id' => '9','first_name' => NULL,'middle_name' => NULL,'last_name' => NULL,'pin' => '2908','identity_number' => '10842113','date_added' => '2017-01-23 07:04:15','mobile_number' => NULL),
            array('id' => '10','first_name' => NULL,'middle_name' => NULL,'last_name' => NULL,'pin' => '8167','identity_number' => '13501669','date_added' => '2017-01-23 08:29:30','mobile_number' => NULL),
            array('id' => '11','first_name' => NULL,'middle_name' => NULL,'last_name' => NULL,'pin' => '4986','identity_number' => '11232475','date_added' => '2017-01-23 10:46:24','mobile_number' => NULL),
            array('id' => '12','first_name' => 'Faith','middle_name' => 'Kossy','last_name' => 'Kogz','pin' => '1234','identity_number' => '4567890','date_added' => '2017-01-23 12:47:29','mobile_number' => '717138277'),
            array('id' => '13','first_name' => 'Elkana','middle_name' => 'Kiplem','last_name' => 'Rop','pin' => '18282','identity_number' => '3839393','date_added' => '2017-01-23 13:48:59','mobile_number' => '93939'),
            array('id' => '14','first_name' => 'James','middle_name' => 'K','last_name' => 'BATOTE','pin' => '2345','identity_number' => '3456789','date_added' => '2017-01-23 13:57:04','mobile_number' => '2020'),
            array('id' => '15','first_name' => 'Milly','middle_name' => 'K','last_name' => 'M','pin' => '1234','identity_number' => '83850373','date_added' => '2017-01-23 13:59:30','mobile_number' => '7683738'),
            array('id' => '16','first_name' => 'Test','middle_name' => 'Test','last_name' => 'Test','pin' => '4381','identity_number' => '9474838383','date_added' => '2017-01-23 14:06:54','mobile_number' => '765836474'),
            array('id' => '17','first_name' => 'Jane','middle_name' => 'Mary','last_name' => 'Mm','pin' => '63838','identity_number' => '2889282738','date_added' => '2017-01-23 14:09:26','mobile_number' => '0'),
            array('id' => '18','first_name' => 'Titus','middle_name' => 'Test','last_name' => 'Test','pin' => '1234','identity_number' => '654321','date_added' => '2017-01-23 14:10:01','mobile_number' => '7'),
            array('id' => '19','first_name' => 'Justus','middle_name' => 'E','last_name' => 'Amon','pin' => '1234','identity_number' => '87754321','date_added' => '2017-01-23 14:15:35','mobile_number' => '876372'),
            array('id' => '20','first_name' => 'james','middle_name' => 'j','last_name' => 'james','pin' => '88','identity_number' => '92992292','date_added' => '2017-01-23 15:38:24','mobile_number' => '91901'),
            array('id' => '21','first_name' => NULL,'middle_name' => NULL,'last_name' => NULL,'pin' => '1047','identity_number' => '28282829','date_added' => '2017-01-23 16:52:28','mobile_number' => NULL),
            array('id' => '22','first_name' => 'James','middle_name' => 'J','last_name' => 'J','pin' => '5737','identity_number' => '3728383','date_added' => '2017-01-24 02:27:00','mobile_number' => '828383838'),
            array('id' => '23','first_name' => 'Cynthia','middle_name' => 'C','last_name' => 'C','pin' => '8383','identity_number' => '8584849','date_added' => '2017-01-24 02:41:09','mobile_number' => '94949'),
            array('id' => '24','first_name' => 'Samson','middle_name' => 'J','last_name' => 'J','pin' => '1234','identity_number' => '09828282','date_added' => '2017-01-24 02:46:34','mobile_number' => '3839339'),
            array('id' => '25','first_name' => 'Ekiru','middle_name' => 'K','last_name' => 'T','pin' => '1234','identity_number' => '2929393','date_added' => '2017-01-24 02:52:32','mobile_number' => '273838'),
            array('id' => '26','first_name' => 'James','middle_name' => 'j','last_name' => 'James','pin' => '3833','identity_number' => '393939338','date_added' => '2017-01-24 03:08:49','mobile_number' => '939292'),
            array('id' => '27','first_name' => 'eheh','middle_name' => 'sjjd','last_name' => 'euue','pin' => '2888','identity_number' => '82828','date_added' => '2017-01-24 03:10:45','mobile_number' => '39393'),
            array('id' => '28','first_name' => 'shsjsh','middle_name' => 'shsh','last_name' => 'hsjsjs','pin' => '27282','identity_number' => '8282828','date_added' => '2017-01-24 03:25:16','mobile_number' => '383'),
            array('id' => '29','first_name' => 'fgg','middle_name' => 'ggy','last_name' => 'ygy','pin' => '555','identity_number' => '7788','date_added' => '2017-01-24 03:29:29','mobile_number' => '7888'),
            array('id' => '30','first_name' => 'shehh','middle_name' => 'djsj','last_name' => 'errj','pin' => '2889','identity_number' => '2828282828','date_added' => '2017-01-24 03:32:24','mobile_number' => '9392929'),
            array('id' => '31','first_name' => 'fggh','middle_name' => 'hjh','last_name' => 'hjjj','pin' => '6767','identity_number' => '68889','date_added' => '2017-01-24 03:37:02','mobile_number' => '9988'),
            array('id' => '32','first_name' => 'Titus','middle_name' => 'K','last_name' => 'Batson','pin' => '4381','identity_number' => '29292929','date_added' => '2017-01-24 04:25:07','mobile_number' => '717234567'),
            array('id' => '33','first_name' => NULL,'middle_name' => NULL,'last_name' => NULL,'pin' => '5671','identity_number' => '29114760','date_added' => '2017-01-24 07:47:57','mobile_number' => NULL),
            array('id' => '34','first_name' => NULL,'middle_name' => NULL,'last_name' => NULL,'pin' => '8035','identity_number' => '10979842','date_added' => '2017-01-25 01:08:31','mobile_number' => NULL),
            array('id' => '35','first_name' => NULL,'middle_name' => NULL,'last_name' => NULL,'pin' => '4177','identity_number' => '23606953','date_added' => '2017-01-25 03:12:11','mobile_number' => NULL),
            array('id' => '36','first_name' => NULL,'middle_name' => NULL,'last_name' => NULL,'pin' => '4212','identity_number' => '28360397','date_added' => '2017-01-25 04:34:56','mobile_number' => NULL),
            array('id' => '37','first_name' => NULL,'middle_name' => NULL,'last_name' => NULL,'pin' => '4325','identity_number' => '27936426','date_added' => '2017-01-25 04:36:22','mobile_number' => NULL),
            array('id' => '38','first_name' => NULL,'middle_name' => NULL,'last_name' => NULL,'pin' => '337','identity_number' => '13610162','date_added' => '2017-01-25 08:30:25','mobile_number' => NULL),
            array('id' => '39','first_name' => NULL,'middle_name' => NULL,'last_name' => NULL,'pin' => '2980','identity_number' => '10312999','date_added' => '2017-01-25 08:36:26','mobile_number' => NULL),
            array('id' => '40','first_name' => 'Linda','middle_name' => 'Jep','last_name' => 'Kiptoo','pin' => '4381','identity_number' => '200000','date_added' => '2017-01-25 14:42:17','mobile_number' => '76124356'),
            array('id' => '41','first_name' => NULL,'middle_name' => NULL,'last_name' => NULL,'pin' => '4118','identity_number' => '24409125','date_added' => '2017-01-26 00:45:18','mobile_number' => NULL),
            array('id' => '42','first_name' => 'Gedion','middle_name' => 'S','last_name' => 'Owour','pin' => '1234','identity_number' => '78787878','date_added' => '2017-01-26 02:38:51','mobile_number' => '717234123'),
            array('id' => '43','first_name' => NULL,'middle_name' => NULL,'last_name' => NULL,'pin' => '4943','identity_number' => '29285443','date_added' => '2017-01-26 05:47:56','mobile_number' => NULL),
            array('id' => '44','first_name' => NULL,'middle_name' => NULL,'last_name' => NULL,'pin' => '187','identity_number' => '22512493','date_added' => '2017-01-26 07:38:56','mobile_number' => NULL),
            array('id' => '45','first_name' => NULL,'middle_name' => NULL,'last_name' => NULL,'pin' => '1881','identity_number' => '22972188','date_added' => '2017-01-26 11:08:38','mobile_number' => NULL),
            array('id' => '46','first_name' => NULL,'middle_name' => NULL,'last_name' => NULL,'pin' => '1696','identity_number' => '1502383','date_added' => '2017-01-26 13:16:15','mobile_number' => NULL),
            array('id' => '47','first_name' => NULL,'middle_name' => NULL,'last_name' => NULL,'pin' => '1396','identity_number' => '22356765','date_added' => '2017-01-27 10:16:37','mobile_number' => NULL),
            array('id' => '48','first_name' => NULL,'middle_name' => NULL,'last_name' => NULL,'pin' => '8066','identity_number' => '23011284','date_added' => '2017-01-29 07:22:17','mobile_number' => NULL),
            array('id' => '49','first_name' => 'Dennis','middle_name' => 'Nakitare','last_name' => 'Wafula','pin' => 'A004590923Q','identity_number' => '25507033','date_added' => '2017-01-31 07:51:36','mobile_number' => '725711606'),
            array('id' => '50','first_name' => 'Anditi','middle_name' => 'O','last_name' => 'Joseph','pin' => '3761','identity_number' => '0717138276','date_added' => '2017-02-01 09:52:37','mobile_number' => '717138276'),
            array('id' => '51','first_name' => NULL,'middle_name' => NULL,'last_name' => NULL,'pin' => '2604','identity_number' => '29114761','date_added' => '2017-02-01 10:02:16','mobile_number' => NULL),
            array('id' => '52','first_name' => NULL,'middle_name' => NULL,'last_name' => NULL,'pin' => '7833','identity_number' => '4423233','date_added' => '2017-02-03 08:27:30','mobile_number' => NULL),
            array('id' => '53','first_name' => NULL,'middle_name' => NULL,'last_name' => NULL,'pin' => '873','identity_number' => '23403130','date_added' => '2017-02-10 00:52:57','mobile_number' => NULL),
            array('id' => '54','first_name' => NULL,'middle_name' => NULL,'last_name' => NULL,'pin' => '4260','identity_number' => '22728246','date_added' => '2017-02-10 07:57:28','mobile_number' => NULL),
            array('id' => '55','first_name' => NULL,'middle_name' => NULL,'last_name' => NULL,'pin' => '3154','identity_number' => '21728246','date_added' => '2017-02-10 08:28:31','mobile_number' => NULL),
            array('id' => '56','first_name' => NULL,'middle_name' => NULL,'last_name' => NULL,'pin' => '2594','identity_number' => '33172858','date_added' => '2017-02-21 11:13:50','mobile_number' => NULL),
            array('id' => '57','first_name' => NULL,'middle_name' => NULL,'last_name' => NULL,'pin' => '8199','identity_number' => '3939392@','date_added' => '2017-02-22 13:08:38','mobile_number' => NULL),
            array('id' => '58','first_name' => NULL,'middle_name' => NULL,'last_name' => NULL,'pin' => '1401','identity_number' => '26331164','date_added' => '2017-02-24 08:34:31','mobile_number' => NULL),
            array('id' => '59','first_name' => NULL,'middle_name' => NULL,'last_name' => NULL,'pin' => '2017','identity_number' => '87654321','date_added' => '2017-02-25 09:52:24','mobile_number' => NULL),
            array('id' => '60','first_name' => 'Jairus','middle_name' => 'Obuhatsa','last_name' => '','pin' => '8786','identity_number' => '23801377','date_added' => '2017-02-28 10:02:56','mobile_number' => '720810193'),
            array('id' => '61','first_name' => 'Jairus','middle_name' => 'Obuhatsa','last_name' => '','pin' => '8786','identity_number' => '22554411','date_added' => '2017-03-01 04:29:05','mobile_number' => '720810193'),
            array('id' => '62','first_name' => NULL,'middle_name' => NULL,'last_name' => NULL,'pin' => '9458','identity_number' => '6417432','date_added' => '2017-03-03 03:20:08','mobile_number' => NULL),
            array('id' => '63','first_name' => 'James','middle_name' => 'D','last_name' => 'Kamau','pin' => '4381','identity_number' => '29242628','date_added' => '2017-03-04 05:45:35','mobile_number' => '7'),
            array('id' => '64','first_name' => NULL,'middle_name' => NULL,'last_name' => NULL,'pin' => '6885','identity_number' => '30071755','date_added' => '2017-03-05 10:37:09','mobile_number' => NULL),
            array('id' => '65','first_name' => NULL,'middle_name' => NULL,'last_name' => NULL,'pin' => '1270','identity_number' => '11469146','date_added' => '2017-03-07 00:51:55','mobile_number' => NULL),
            array('id' => '66','first_name' => NULL,'middle_name' => NULL,'last_name' => NULL,'pin' => '217','identity_number' => '23576611','date_added' => '2017-03-07 00:52:14','mobile_number' => NULL),
            array('id' => '67','first_name' => NULL,'middle_name' => NULL,'last_name' => NULL,'pin' => '2190','identity_number' => '8823503','date_added' => '2017-03-07 00:53:00','mobile_number' => NULL),
            array('id' => '68','first_name' => 'abondo','middle_name' => 'ondijo','last_name' => 'anthony','pin' => 'mtujinga1986','identity_number' => '24410862','date_added' => '2017-03-07 00:53:39','mobile_number' => '722499278'),
            array('id' => '69','first_name' => NULL,'middle_name' => NULL,'last_name' => NULL,'pin' => '7348','identity_number' => '22873411','date_added' => '2017-03-07 00:53:40','mobile_number' => NULL),
            array('id' => '70','first_name' => NULL,'middle_name' => NULL,'last_name' => NULL,'pin' => '5333','identity_number' => '5507232 ','date_added' => '2017-03-07 00:54:48','mobile_number' => NULL),
            array('id' => '71','first_name' => NULL,'middle_name' => NULL,'last_name' => NULL,'pin' => '527','identity_number' => '3004447','date_added' => '2017-03-07 00:56:44','mobile_number' => NULL),
            array('id' => '72','first_name' => NULL,'middle_name' => NULL,'last_name' => NULL,'pin' => '6201','identity_number' => '0273751','date_added' => '2017-03-07 00:57:12','mobile_number' => NULL),
            array('id' => '73','first_name' => NULL,'middle_name' => NULL,'last_name' => NULL,'pin' => '5833','identity_number' => '29045260','date_added' => '2017-03-07 00:57:43','mobile_number' => NULL),
            array('id' => '74','first_name' => NULL,'middle_name' => NULL,'last_name' => NULL,'pin' => '9943','identity_number' => '2)))','date_added' => '2017-03-07 09:09:43','mobile_number' => NULL),
            array('id' => '75','first_name' => 'Mercy','middle_name' => 'Katela','last_name' => '','pin' => '1234','identity_number' => '25118316','date_added' => '2017-03-11 15:34:02','mobile_number' => '726992354'),
            array('id' => '76','first_name' => 'A','middle_name' => 'C','last_name' => 'B','pin' => '1234','identity_number' => '12345','date_added' => '2017-03-11 15:49:31','mobile_number' => '726992354'),
            array('id' => '77','first_name' => 'Jairus','middle_name' => 'Obuhatsa','last_name' => 'Ong\'ai','pin' => '8824','identity_number' => '11447788','date_added' => '2017-03-17 08:51:55','mobile_number' => '720810193'),
            array('id' => '78','first_name' => 'Titus','middle_name' => 'K','last_name' => 'Ruto','pin' => '4381','identity_number' => '29282726','date_added' => '2017-03-19 08:12:24','mobile_number' => '717138276'),
            array('id' => '79','first_name' => 'Hshe','middle_name' => 'Hshsjs','last_name' => 'Shhs','pin' => 'Jsjsj','identity_number' => 'Sjsjsjs','date_added' => '2017-03-19 08:51:37','mobile_number' => '56666366'),
            array('id' => '80','first_name' => NULL,'middle_name' => NULL,'last_name' => NULL,'pin' => '5516','identity_number' => '11111111','date_added' => '2017-03-19 15:24:38','mobile_number' => NULL),
            array('id' => '81','first_name' => 'Gedion','middle_name' => 'A','last_name' => 'Omodho','pin' => '1234','identity_number' => '123456789','date_added' => '2017-03-20 04:44:09','mobile_number' => '721345678'),
            array('id' => '82','first_name' => 'derrick@','middle_name' => NULL,'last_name' => NULL,'pin' => '9548','identity_number' => '29115690','date_added' => '2017-03-21 02:00:19','mobile_number' => NULL),
            array('id' => '83','first_name' => 'Grace','middle_name' => NULL,'last_name' => NULL,'pin' => '5786','identity_number' => '11248220','date_added' => '2017-03-21 02:18:41','mobile_number' => NULL),
            array('id' => '84','first_name' => 'selinah','middle_name' => NULL,'last_name' => NULL,'pin' => '8082','identity_number' => '7960793','date_added' => '2017-03-21 02:21:17','mobile_number' => NULL),
            array('id' => '85','first_name' => 'Daniela','middle_name' => NULL,'last_name' => NULL,'pin' => '967','identity_number' => '201029','date_added' => '2017-03-23 04:31:58','mobile_number' => NULL),
            array('id' => '86','first_name' => 'John','middle_name' => 'Omo','last_name' => '','pin' => '1967','identity_number' => '9122607','date_added' => '2017-03-29 11:06:18','mobile_number' => '722523348'),
            array('id' => '87','first_name' => 'Paul','middle_name' => 'Nderitu','last_name' => 'Wanjohi','pin' => '8675','identity_number' => '24846622','date_added' => '2017-04-02 12:31:14','mobile_number' => '722364075'),
            array('id' => '88','first_name' => 'Alex','middle_name' => 'O.','last_name' => 'Fares','pin' => '6468','identity_number' => '10001099','date_added' => '2017-04-04 08:13:59','mobile_number' => '259720777387'),
            array('id' => '89','first_name' => 'Alex','middle_name' => 'O.','last_name' => 'Fares','pin' => '8310','identity_number' => '10001099','date_added' => '2017-04-04 08:15:24','mobile_number' => '259720777387'),
            array('id' => '90','first_name' => 'Alex','middle_name' => 'O.','last_name' => 'Fares','pin' => '5618','identity_number' => '10001099','date_added' => '2017-04-04 08:15:38','mobile_number' => '259720777387'),
            array('id' => '91','first_name' => 'Alex','middle_name' => 'O.','last_name' => 'Fares','pin' => '1358','identity_number' => '10001099','date_added' => '2017-04-11 10:32:40','mobile_number' => '259720777387'),
            array('id' => '92','first_name' => 'Alex','middle_name' => 'O.','last_name' => 'Fares','pin' => '2352','identity_number' => '10001099','date_added' => '2017-04-11 10:32:46','mobile_number' => '259720777387'),
            array('id' => '93','first_name' => 'Alex','middle_name' => 'O.','last_name' => 'Fares','pin' => '2376','identity_number' => '10001099','date_added' => '2017-04-11 10:32:49','mobile_number' => '259720777387'),
            array('id' => '94','first_name' => 'James','middle_name' => NULL,'last_name' => NULL,'pin' => '4600','identity_number' => '10403269','date_added' => '2017-04-18 13:03:08','mobile_number' => NULL)
        );

        $this->users = $users;
    }
}
