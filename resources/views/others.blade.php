<!-- other infos -->

<!-- database creation -> env change data base name and type php artisan migrate -->


<!-- \App\Models\User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin',
        ]);

(DatabaseSeeder) -->


<!-- return [
    'name' => fake()->name(),
    'username' => fake()->username(),
    'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
    'remember_token' => Str::random(10),
];

(UserFactory) -->


<!-- public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

(Create users migrations) -->