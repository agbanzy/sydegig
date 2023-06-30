<?php
/*
 * File name: UsersTableSeeder.php
 * Last modified: 2023.03.01 at 01:38:30
 * Author: Daniel Odeh
 * Copyright (c) 2023
 */

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('users')->delete();

        DB::table('users')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => 'Super Administrator',
                    'email' => 'super@sydegig.co',
                    'phone_number' => NULL,
                    'phone_verified_at' => NULL,
                    'email_verified_at' => date("Y-m-d H:i:s"),
                    'password' => Hash::make('rhino123#'),
                    'api_token' => NULL,
                    'device_token' => '',
                    'stripe_id' => NULL,
                    'card_brand' => NULL,
                    'card_last_four' => NULL,
                    'trial_ends_at' => NULL,
                    'paypal_email' => NULL,
                    'remember_token' => NULL,
                    'created_at' => NULL,
                    'updated_at' => date("Y-m-d H:i:s"),
                ),
            1 =>
                array(
                    'id' => 2,
                    'name' => 'Provider',
                    'email' => 'provider@sydegig.co',
                    'phone_number' => NULL,
                    'phone_verified_at' => NULL,
                    'email_verified_at' => date("Y-m-d H:i:s"),
                    'password' => Hash::make('rhino123#'),
                    'api_token' => NULL,
                    'device_token' => '',
                    'stripe_id' => NULL,
                    'card_brand' => NULL,
                    'card_last_four' => NULL,
                    'trial_ends_at' => NULL,
                    'paypal_email' => NULL,
                    'remember_token' => NULL,
                    'created_at' => NULL,
                    'updated_at' => date("Y-m-d H:i:s"),
                ),
            2 =>
                array(
                    'id' => 3,
                    'name' => 'Customer',
                    'email' => 'customer@sydegig.co',
                    'phone_number' => NULL,
                    'phone_verified_at' => NULL,
                    'email_verified_at' => date("Y-m-d H:i:s"),
                    'password' => Hash::make('rhino123#'),
                    'api_token' => NULL,
                    'device_token' => '',
                    'stripe_id' => NULL,
                    'card_brand' => NULL,
                    'card_last_four' => NULL,
                    'trial_ends_at' => NULL,
                    'paypal_email' => NULL,
                    'remember_token' => NULL,
                    'created_at' => NULL,
                    'updated_at' => date("Y-m-d H:i:s"),
                ),
            3 =>
                array(
                    'id' => 4,
                    'name' => 'Provider One',
                    'email' => 'provider1@sydegig.co',
                    'phone_number' => NULL,
                    'phone_verified_at' => NULL,
                    'email_verified_at' => date("Y-m-d H:i:s"),
                    'password' => Hash::make('rhino123#'),
                    'api_token' => NULL,
                    'device_token' => '',
                    'stripe_id' => NULL,
                    'card_brand' => NULL,
                    'card_last_four' => NULL,
                    'trial_ends_at' => NULL,
                    'paypal_email' => NULL,
                    'remember_token' => NULL,
                    'created_at' => NULL,
                    'updated_at' => date("Y-m-d H:i:s"),
                ),
            4 =>
                array(
                    'id' => 5,
                    'name' => 'Customer One',
                    'email' => 'customer1@sydegig.co',
                    'phone_number' => NULL,
                    'phone_verified_at' => NULL,
                    'email_verified_at' => NULL,
                    'password' => Hash::make('rhino123#'),
                    'api_token' => NULL,
                    'device_token' => NULL,
                    'stripe_id' => NULL,
                    'card_brand' => NULL,
                    'card_last_four' => NULL,
                    'trial_ends_at' => NULL,
                    'paypal_email' => NULL,
                    'remember_token' => NULL,
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s"),
                ),
            5 =>
                array(
                    'id' => 6,
                    'name' => 'Provider Two',
                    'email' => 'provider2@sydegig.co',
                    'phone_number' => NULL,
                    'phone_verified_at' => NULL,
                    'email_verified_at' => date("Y-m-d H:i:s"),
                    'password' => Hash::make('rhino123#'),
                    'api_token' => NULL,
                    'device_token' => NULL,
                    'stripe_id' => NULL,
                    'card_brand' => NULL,
                    'card_last_four' => NULL,
                    'trial_ends_at' => NULL,
                    'paypal_email' => NULL,
                    'remember_token' => NULL,
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s"),
                ),
            6 =>
                array(
                    'id' => 7,
                    'name' => 'Customer Two',
                    'email' => 'customer2@sydegig.co',
                    'phone_number' => NULL,
                    'phone_verified_at' => NULL,
                    'email_verified_at' => NULL,
                    'password' => Hash::make('rhino123#'),
                    'api_token' => NULL,
                    'device_token' => '',
                    'stripe_id' => NULL,
                    'card_brand' => NULL,
                    'card_last_four' => NULL,
                    'trial_ends_at' => NULL,
                    'paypal_email' => NULL,
                    'remember_token' => NULL,
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s"),
                ),
        ));
    }
}
