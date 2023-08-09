<?php

namespace Database\Seeders;

use App\Models\Attachment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $user_default  = [
            'name' => 'Jenner',
            'email' => 'dev@jenner.codes',
            'password' => bcrypt('123456'),
        ];

        $profile_default = [
            'name' => 'Jenner',
            'lastname' => 'Acosta Díaz',
            'job_position' => 'Full Stack Developer',
            'phone' => '123456789',
            'bio' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'github' => 'https://github.com/jenneracostadiaz',
            'linkedin' => 'https://www.linkedin.com/in/jenneracostadiaz/',
            'instagram' => 'https://www.instagram.com/jenneracostadiaz/',
            'youtube' => 'https://www.youtube.com/channel/UCQ6Zr5tNDh0J2jzSjJb4q5w',
            'facebook' => 'https://www.facebook.com/jenneracostadiaz',
            'twitter' => 'https://twitter.com/jenneracostadiaz',
            'tiktok' => 'https://www.tiktok.com/@jenneracostadiaz',
        ];

        $company_default = [
            'name' => 'Jenner Codes',
            'ruc' => '10480788911',
            'country' => 'Perú',
            'city' => 'Lima',
            'address' => 'Av. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'phone' => '123456789',
            'url' => 'https://jenner.codes',
            'bio' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        ];

        $expertices = [
            [
                'charge' => 'Full Stack Developer',
                'location' => 'Lima, Perú',
                'start_date' => '2019-01-01',
                'end_date' => '2021-01-01',
                'sector' => 'Tecnología',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
                'profile_holder' => 'Jenner Acosta Díaz',
                'company_id' => 1,


            ],
            [
                'charge' => 'Frontend Developer',
                'location' => 'Lima, Perú',
                'start_date' => '2017-01-01',
                'end_date' => '2019-01-01',
                'sector' => 'Tecnología',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
                'profile_holder' => 'Jenner Acosta Díaz',
                'company_id' => 1,
            ],
            [
                'charge' => 'Backend Developer',
                'location' => 'Lima, Perú',
                'start_date' => '2015-01-01',
                'end_date' => '2017-01-01',
                'sector' => 'Tecnología',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
                'profile_holder' => 'Jenner Acosta Díaz',
                'company_id' => 1,
            ]
        ];

        $user = User::create([
            'name' => $user_default['name'],
            'email' => $user_default['email'],
            'password' => $user_default['password'],
        ]);

        $user->profile()->create($profile_default);
        $user->companies()->create($company_default);
        
        foreach ($expertices as $expertice) {
            $user->expertise()->create($expertice);
        }
        
    }
}
