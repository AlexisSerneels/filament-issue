<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\Product::factory(10)->create();

         DB::table('products')->update([
             'builder' => '{"en":[{"type":"heading","data":{"content":"Try inserting a block in FRENCH below it."}},{"type":"paragraph","data":{"content":"Try inserting a block in FRENCH above it."}}],"fr":[{"type":"heading","data":{"content":"Try inserting a block in FRENCH below it."}},{"type":"paragraph","data":{"content":"Try inserting a block in FRENCH above it."}}]}'
         ]);

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@filamentphp.com',
        ]);
    }
}
