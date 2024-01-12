<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                [
                    "name" => "bungkai",
                    "email" => "bungkai@tsu.ac.th",
                    "address" => "tsu",
                    "telephone" => "0855554141",
                    "password" => md5("1234555"),
                ],
                [
                    "name" => "Aom",
                    "email" => "161@tsu.ac.th",
                    "address" => "tsu",
                    "telephone" => "084447741",
                    "password" => md5("124411155"),
                ],
                [
                    "name" => "bungsim",
                    "email" => "simming@tsu.ac.th",
                    "address" => "tsu",
                    "telephone" => "0855488941",
                    "password" => md5("1234585"),
                ],
            ]

        );
    }
}
