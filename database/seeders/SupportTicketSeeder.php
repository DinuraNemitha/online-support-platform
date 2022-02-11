<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Modules\SupportTicketModule\Models\SupportTicket;

class SupportTicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        SupportTicket::insert([
            'ref_id' => 'sp_tck_'.substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 10),
            'customer_email' => 'nimesh112@gmail.com',
            'customer_name' => 'Nimesh Madusanka',
            'description' => 'may I know the update of my order?',
            'customer_contact_no'=>'077580569',
            'status'=>SupportTicket::STATUS_INITIAL,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        SupportTicket::insert([
            'ref_id' =>'sp_tck_'.substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 10),
            'customer_email' => 'dushan.d.gamage@gmail.com',
            'customer_name' => 'Dushan Fernando',
            'description' => 'I got a damaged package and need to return it',
            'customer_contact_no'=>'0718456963',
            'status'=>SupportTicket::STATUS_INITIAL,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        SupportTicket::insert([
            'ref_id' => 'sp_tck_'.substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 10),
            'customer_email' => 'mahesh.ds.jay@gmail.com',
            'customer_name' => 'Mahesh Balasooriya',
            'description' => 'are you providing the cash on delivery service?',
            'customer_contact_no'=>'0756020236',
            'status'=>SupportTicket::STATUS_INITIAL,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        SupportTicket::insert([
            'ref_id' => 'sp_tck_'.substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 10),
            'customer_email' => 'gimhana.df.jk@gmail.com',
            'customer_name' => 'Gimhana Wijesekara',
            'description' => 'Need to order a gift for my friend and location is Nugegoda. May I know the delivery cost?',
            'customer_contact_no'=>'0785620369',
            'status'=>SupportTicket::STATUS_INITIAL,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        SupportTicket::insert([
            'ref_id' =>'sp_tck_'.substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 10),
            'customer_email' => 'vihara123@gmail.com',
            'customer_name' => 'Vihara Rasangi',
            'description' => 'I need to cancel my order. What is the process that I should follow?',
            'customer_contact_no'=>'0112445896',
            'status'=>SupportTicket::STATUS_INITIAL,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

    }
}
