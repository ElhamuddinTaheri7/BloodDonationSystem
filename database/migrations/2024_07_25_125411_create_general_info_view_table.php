<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('general_view', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        DB::statement("
        CREATE VIEW general_info_view AS 
        SELECT u.id as id,
        u.name as user_name,
        u.user_image as user_image,
        u.user_age as user_age,
        u.last_name as last_name,
        u.user_gender as user_gender,
        d.user_id as user_id,
        d.blood_group as blood_group,
        d.blood_cost as blood_cost,
        d.blood_amount as blood_amount,
        d.updated_at as date
        FROM users u
        JOIN donations d ON u.id = d.user_id");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_view');
    }
};
