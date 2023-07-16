# EXAMINATIONS
Submit Exam

Setup Steps in Back-end
1. Please set up the database copy the .env file and set db credentials (I use php Mysql version: 8.2.4).
2. Please run seeder on the Back-end (ex. php artisan db:seed)
3. (Users with different roles) => [
                'name' => 'Manager',
                'username' => 'manager',
                'password' => 'password',
                'role' => 'manager'
            ],
            [
                'name' => 'Web Developer',
                'username' => 'developer',
                'password' => 'password',
                'role' => 'web_developer'
            ],
            [
                'name' => 'Web Designer',
                'username' => 'designer',
                'password' => 'password',
                'role' => 'web_designer'
            ]
