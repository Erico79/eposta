<?php

use Illuminate\Database\Seeder;

class EboxesSeeder extends Seeder
{
    private $boxes = [];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->setBoxes();

        foreach ($this->boxes as $box){
            $new_box = new \App\Ebox();
            $new_box->box = $box['box'];
            $new_box->postal_code = $box['postal_code'];
            $new_box->user_id = $box['user_id'];
            $new_box->identity_number = $box['identity_number'];
            $new_box->index = $box['index'];
            $new_box->date_added = $box['date_added'];
            $new_box->save();
        }
    }

    public function setBoxes(){
        $eboxes = array(
            array('id' => '1','box' => '327','postal_code' => '30700','user_id' => '16','identity_number' => '29242688','index' => '0','date_added' => '2017-01-20 08:43:02'),
            array('id' => '2','box' => '99','postal_code' => '30700','user_id' => '2','identity_number' => '29242699','index' => '0','date_added' => '2017-01-20 08:45:38'),
            array('id' => '3','box' => '275','postal_code' => '30500','user_id' => '16','identity_number' => '25287540','index' => '0','date_added' => '2017-01-20 08:45:50'),
            array('id' => '4','box' => '328','postal_code' => '30700','user_id' => '2','identity_number' => '29242699','index' => '0','date_added' => '2017-01-21 02:09:21'),
            array('id' => '5','box' => '345','postal_code' => '30700','user_id' => '2','identity_number' => '29242699','index' => '0','date_added' => '2017-01-21 02:11:00'),
            array('id' => '6','box' => '53111','postal_code' => '80400','user_id' => '2','identity_number' => '29242699','index' => '0','date_added' => '2017-01-21 18:29:44'),
            array('id' => '7','box' => '27199','postal_code' => '100','user_id' => '2','identity_number' => '29242699','index' => '0','date_added' => '2017-01-21 18:31:24'),
            array('id' => '8','box' => '34157','postal_code' => '30701','user_id' => '2','identity_number' => '29242699','index' => '0','date_added' => '2017-01-21 18:38:27'),
            array('id' => '9','box' => '56579','postal_code' => '517','user_id' => '16','identity_number' => '22288339','index' => '0','date_added' => '2017-01-23 03:24:30'),
            array('id' => '10','box' => '3952','postal_code' => '100','user_id' => '16','identity_number' => '13501669','index' => '0','date_added' => '2017-01-23 08:29:30'),
            array('id' => '11','box' => '50639','postal_code' => '90111','user_id' => '16','identity_number' => '11232475','index' => '0','date_added' => '2017-01-23 10:48:20'),
            array('id' => '12','box' => '30500','postal_code' => '277','user_id' => '2','identity_number' => '29242699','index' => '0','date_added' => '2017-01-23 14:57:17'),
            array('id' => '13','box' => '277','postal_code' => '30500','user_id' => '2','identity_number' => '29242699','index' => '0','date_added' => '2017-01-23 14:58:19'),
            array('id' => '14','box' => '177','postal_code' => '30500','user_id' => '2','identity_number' => '29242699','index' => '0','date_added' => '2017-01-23 16:40:02'),
            array('id' => '15','box' => '60014','postal_code' => '200','user_id' => '16','identity_number' => '28282829','index' => '0','date_added' => '2017-01-23 16:52:28'),
            array('id' => '16','box' => '1239','postal_code' => '600','user_id' => '16','identity_number' => '28282829','index' => '0','date_added' => '2017-01-23 16:57:09'),
            array('id' => '17','box' => '28084','postal_code' => '10209','user_id' => '2','identity_number' => '29242699','index' => '0','date_added' => '2017-01-23 17:14:32'),
            array('id' => '18','box' => '12345','postal_code' => '00100','user_id' => '27','identity_number' => '82828','index' => '0','date_added' => '2017-01-24 03:12:24'),
            array('id' => '19','box' => '123','postal_code' => '30700','user_id' => '32','identity_number' => '29292929','index' => '0','date_added' => '2017-01-24 04:25:36'),
            array('id' => '20','box' => '26725','postal_code' => '30500','user_id' => '32','identity_number' => '29292929','index' => '0','date_added' => '2017-01-24 05:55:39'),
            array('id' => '21','box' => '60020','postal_code' => '00300','user_id' => '16','identity_number' => '29114760','index' => '0','date_added' => '2017-01-24 07:47:57'),
            array('id' => '22','box' => '12946','postal_code' => '00520','user_id' => '16','identity_number' => '10979842','index' => '0','date_added' => '2017-01-25 01:08:32'),
            array('id' => '23','box' => '37235','postal_code' => '00100','user_id' => '16','identity_number' => '23606953','index' => '0','date_added' => '2017-01-25 03:12:22'),
            array('id' => '24','box' => '60023','postal_code' => NULL,'user_id' => '16','identity_number' => '28360397','index' => '0','date_added' => '2017-01-25 04:35:00'),
            array('id' => '25','box' => '60024','postal_code' => '00614','user_id' => '16','identity_number' => '27936426','index' => '0','date_added' => '2017-01-25 04:36:23'),
            array('id' => '26','box' => '26241','postal_code' => '00603','user_id' => '16','identity_number' => '13610162','index' => '0','date_added' => '2017-01-25 08:30:34'),
            array('id' => '27','box' => '706530','postal_code' => '00200','user_id' => '16','identity_number' => '10312999','index' => '0','date_added' => '2017-01-25 08:36:26'),
            array('id' => '28','box' => '13092','postal_code' => '40414','user_id' => '40','identity_number' => '200000','index' => '0','date_added' => '2017-01-25 14:42:22'),
            array('id' => '29','box' => '715366297','postal_code' => '00200','user_id' => '16','identity_number' => '24409125','index' => '0','date_added' => '2017-01-26 00:45:19'),
            array('id' => '30','box' => '327','postal_code' => '30500','user_id' => '42','identity_number' => '78787878','index' => '0','date_added' => '2017-01-26 02:39:22'),
            array('id' => '31','box' => '633','postal_code' => '20200','user_id' => '16','identity_number' => '29285443','index' => '0','date_added' => '2017-01-26 05:47:57'),
            array('id' => '32','box' => '6709','postal_code' => NULL,'user_id' => '16','identity_number' => '22512493','index' => '0','date_added' => '2017-01-26 07:39:03'),
            array('id' => '33','box' => '478','postal_code' => '01001','user_id' => '16','identity_number' => '22972188','index' => '0','date_added' => '2017-01-26 11:08:38'),
            array('id' => '34','box' => '60033','postal_code' => NULL,'user_id' => '16','identity_number' => '1502383','index' => '0','date_added' => '2017-01-26 13:16:15'),
            array('id' => '35','box' => '60034','postal_code' => NULL,'user_id' => '16','identity_number' => '22356765','index' => '0','date_added' => '2017-01-27 10:16:38'),
            array('id' => '36','box' => '34024','postal_code' => '00800','user_id' => '16','identity_number' => '23011284','index' => '0','date_added' => '2017-01-29 07:22:17'),
            array('id' => '37','box' => '60036','postal_code' => '20403','user_id' => '16','identity_number' => '29114760','index' => '0','date_added' => '2017-01-31 07:03:50'),
            array('id' => '38','box' => '60037','postal_code' => '20403','user_id' => '16','identity_number' => '29114760','index' => '0','date_added' => '2017-01-31 07:09:24'),
            array('id' => '39','box' => '60038','postal_code' => '20403','user_id' => '16','identity_number' => '29114760','index' => '0','date_added' => '2017-01-31 07:22:36'),
            array('id' => '40','box' => '60039','postal_code' => '20403','user_id' => '16','identity_number' => '29114760','index' => '0','date_added' => '2017-01-31 07:24:16'),
            array('id' => '41','box' => '21183','postal_code' => '00505','user_id' => '49','identity_number' => '25507033','index' => '0','date_added' => '2017-01-31 07:52:54'),
            array('id' => '42','box' => '21185','postal_code' => '00505','user_id' => '49','identity_number' => '25507033','index' => '0','date_added' => '2017-01-31 07:53:18'),
            array('id' => '43','box' => '2118301','postal_code' => '00505','user_id' => '49','identity_number' => '25507033','index' => '0','date_added' => '2017-01-31 07:53:42'),
            array('id' => '44','box' => '21183','postal_code' => '00603','user_id' => '16','identity_number' => '25507033','index' => '0','date_added' => '2017-01-31 08:21:00'),
            array('id' => '45','box' => '60044','postal_code' => '00603','user_id' => '16','identity_number' => '25507033','index' => '0','date_added' => '2017-01-31 08:22:47'),
            array('id' => '46','box' => '2118301','postal_code' => '00603','user_id' => '16','identity_number' => '25507033','index' => '0','date_added' => '2017-02-01 05:12:16'),
            array('id' => '47','box' => '99','postal_code' => '30500','user_id' => '50','identity_number' => '0717138276','index' => '0','date_added' => '2017-02-01 09:52:52'),
            array('id' => '48','box' => '60047','postal_code' => '20403','user_id' => '16','identity_number' => '29114760','index' => '0','date_added' => '2017-02-01 09:57:32'),
            array('id' => '49','box' => '60048','postal_code' => '20403','user_id' => '16','identity_number' => '29114761','index' => '0','date_added' => '2017-02-01 10:02:16'),
            array('id' => '50','box' => '19137','postal_code' => '00501','user_id' => '16','identity_number' => '4423233','index' => '0','date_added' => '2017-02-03 08:27:30'),
            array('id' => '51','box' => '55690','postal_code' => '80201','user_id' => '16','identity_number' => '29242699','index' => '0','date_added' => '2017-02-06 08:19:39'),
            array('id' => '52','box' => '60051','postal_code' => NULL,'user_id' => '16','identity_number' => '23403130','index' => '0','date_added' => '2017-02-10 00:53:14'),
            array('id' => '53','box' => '60052','postal_code' => '00100','user_id' => '16','identity_number' => '22728246','index' => '0','date_added' => '2017-02-10 07:57:28'),
            array('id' => '54','box' => '60053','postal_code' => '00200','user_id' => '16','identity_number' => '21728246','index' => '0','date_added' => '2017-02-10 08:28:31'),
            array('id' => '55','box' => '1544','postal_code' => '00606','user_id' => '16','identity_number' => '33172858','index' => '0','date_added' => '2017-02-21 11:13:56'),
            array('id' => '56','box' => '17542','postal_code' => '00606','user_id' => '16','identity_number' => '33172858','index' => '0','date_added' => '2017-02-21 11:16:25'),
            array('id' => '57','box' => '76530','postal_code' => '00601','user_id' => '16','identity_number' => '10312999','index' => '0','date_added' => '2017-02-22 10:18:17'),
            array('id' => '58','box' => '8','postal_code' => NULL,'user_id' => '16','identity_number' => '3939392@','index' => '0','date_added' => '2017-02-22 13:08:50'),
            array('id' => '59','box' => '60058','postal_code' => '00620','user_id' => '16','identity_number' => '10312999','index' => '0','date_added' => '2017-02-22 23:36:45'),
            array('id' => '60','box' => '290','postal_code' => '30500','user_id' => '16','identity_number' => '25287540','index' => '0','date_added' => '2017-02-23 05:33:39'),
            array('id' => '61','box' => '500','postal_code' => '30500','user_id' => '16','identity_number' => '26331164','index' => '0','date_added' => '2017-02-24 08:34:37'),
            array('id' => '62','box' => '60061','postal_code' => '00200','user_id' => '16','identity_number' => '12345678','index' => '0','date_added' => '2017-02-25 09:49:19'),
            array('id' => '63','box' => '60062','postal_code' => '00200','user_id' => '16','identity_number' => '87654321','index' => '0','date_added' => '2017-02-25 09:52:36'),
            array('id' => '64','box' => '60063','postal_code' => '00200','user_id' => '16','identity_number' => '21728246','index' => '0','date_added' => '2017-03-04 04:34:06'),
            array('id' => '65','box' => '24657','postal_code' => '00100','user_id' => '16','identity_number' => '30071755','index' => '0','date_added' => '2017-03-05 10:37:21'),
            array('id' => '66','box' => '60065','postal_code' => '00100','user_id' => '16','identity_number' => '11469146','index' => '0','date_added' => '2017-03-07 00:51:56'),
            array('id' => '67','box' => '58177','postal_code' => '00100','user_id' => '16','identity_number' => '23576611','index' => '0','date_added' => '2017-03-07 00:52:20'),
            array('id' => '68','box' => '60067','postal_code' => NULL,'user_id' => '16','identity_number' => '8823503','index' => '0','date_added' => '2017-03-07 00:53:02'),
            array('id' => '69','box' => '60068','postal_code' => '00517','user_id' => '16','identity_number' => '22873411','index' => '0','date_added' => '2017-03-07 00:53:46'),
            array('id' => '70','box' => '60069','postal_code' => '00100','user_id' => '16','identity_number' => '5507232 ','index' => '0','date_added' => '2017-03-07 00:54:55'),
            array('id' => '71','box' => '60070','postal_code' => '00100','user_id' => '16','identity_number' => '22873411','index' => '0','date_added' => '2017-03-07 00:56:24'),
            array('id' => '72','box' => '60071','postal_code' => '00100','user_id' => '16','identity_number' => '24410862','index' => '0','date_added' => '2017-03-07 00:56:44'),
            array('id' => '73','box' => '60072','postal_code' => '00800','user_id' => '16','identity_number' => '3004447','index' => '0','date_added' => '2017-03-07 00:56:45'),
            array('id' => '74','box' => '34567','postal_code' => '00100','user_id' => '16','identity_number' => '0273751','index' => '0','date_added' => '2017-03-07 00:57:24'),
            array('id' => '75','box' => '7706','postal_code' => '00200','user_id' => '16','identity_number' => '29045260','index' => '0','date_added' => '2017-03-07 00:57:49'),
            array('id' => '76','box' => '60075','postal_code' => '00200','user_id' => '16','identity_number' => '24410862','index' => '0','date_added' => '2017-03-07 00:58:58'),
            array('id' => '77','box' => '60076','postal_code' => '00603','user_id' => '16','identity_number' => '8823503','index' => '0','date_added' => '2017-03-07 00:59:27'),
            array('id' => '78','box' => '22229','postal_code' => '00100','user_id' => '2','identity_number' => '29242699','index' => '0','date_added' => '2017-03-07 08:12:17'),
            array('id' => '79','box' => '60078','postal_code' => '00100','user_id' => '16','identity_number' => '2)))','index' => '0','date_added' => '2017-03-07 09:09:50'),
            array('id' => '80','box' => '68431','postal_code' => '40414','user_id' => '2','identity_number' => '29242699','index' => '0','date_added' => '2017-03-14 14:01:58'),
            array('id' => '81','box' => '13344','postal_code' => '00800','user_id' => '77','identity_number' => '11447788','index' => '0','date_added' => '2017-03-17 08:53:27'),
            array('id' => '82','box' => '16113','postal_code' => '40606','user_id' => '77','identity_number' => '11447788','index' => '0','date_added' => '2017-03-17 08:54:05'),
            array('id' => '83','box' => '20785','postal_code' => '40414','user_id' => '2','identity_number' => '29242699','index' => '0','date_added' => '2017-03-19 07:41:03'),
            array('id' => '84','box' => '66417','postal_code' => '40414','user_id' => '2','identity_number' => '29242699','index' => '0','date_added' => '2017-03-19 07:41:18'),
            array('id' => '85','box' => '62608','postal_code' => '40414','user_id' => '2','identity_number' => '29242699','index' => '0','date_added' => '2017-03-19 07:47:34'),
            array('id' => '86','box' => '69757','postal_code' => '40414','user_id' => '78','identity_number' => '29282726','index' => '0','date_added' => '2017-03-19 08:12:47'),
            array('id' => '87','box' => '61632','postal_code' => '40414','user_id' => '2','identity_number' => '29242699','index' => '0','date_added' => '2017-03-19 14:49:52'),
            array('id' => '88','box' => '60087','postal_code' => '00101','user_id' => '16','identity_number' => '11111111','index' => '0','date_added' => '2017-03-19 15:24:38'),
            array('id' => '89','box' => '45571','postal_code' => '40414','user_id' => '80','identity_number' => '11111111','index' => '0','date_added' => '2017-03-20 02:19:25'),
            array('id' => '90','box' => '301','postal_code' => '30100','user_id' => '81','identity_number' => '123456789','index' => '0','date_added' => '2017-03-20 04:44:59'),
            array('id' => '91','box' => '60090','postal_code' => '20225','user_id' => '16','identity_number' => '29115690','index' => '0','date_added' => '2017-03-21 02:00:19'),
            array('id' => '92','box' => '67838','postal_code' => '00200','user_id' => '16','identity_number' => '11248220','index' => '0','date_added' => '2017-03-21 02:18:42'),
            array('id' => '93','box' => '60092','postal_code' => '00101','user_id' => '16','identity_number' => '7960793','index' => '0','date_added' => '2017-03-21 02:21:17'),
            array('id' => '94','box' => '60093','postal_code' => '00200','user_id' => '16','identity_number' => '201029','index' => '0','date_added' => '2017-03-23 04:32:00'),
            array('id' => '95','box' => '14448','postal_code' => '00800','user_id' => '86','identity_number' => '9122607','index' => '0','date_added' => '2017-03-29 11:06:56'),
            array('id' => '96','box' => '29999','postal_code' => '00100','user_id' => '87','identity_number' => '24846622','index' => '0','date_added' => '2017-04-02 12:31:44'),
            array('id' => '97','box' => '1','postal_code' => NULL,'user_id' => '16','identity_number' => '29242699','index' => '0','date_added' => '2017-04-12 03:25:27'),
            array('id' => '98','box' => '706530','postal_code' => '40332','user_id' => '16','identity_number' => '10312999','index' => '0','date_added' => '2017-04-18 04:02:21'),
            array('id' => '99','box' => '4','postal_code' => NULL,'user_id' => '16','identity_number' => '29242699','index' => '0','date_added' => '2017-04-18 11:49:26'),
            array('id' => '100','box' => '224','postal_code' => '01100','user_id' => '16','identity_number' => '10403269','index' => '0','date_added' => '2017-04-18 13:03:08')
        );

        $this->boxes = $eboxes;
    }
}
