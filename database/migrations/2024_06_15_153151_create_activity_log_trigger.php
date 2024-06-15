<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::dropIfExists('activity_logs');

        Schema::create('activity_logs', function (Blueprint $table) {
            $table->id();
            $table->string('activity_type');
            $table->unsignedBigInteger('course_id')->nullable();
            $table->json('old_values')->nullable();
            $table->json('new_values')->nullable();
            $table->timestamps();
        });

        DB::unprepared('
            CREATE TRIGGER after_course_update
            AFTER UPDATE ON courses
            FOR EACH ROW
            BEGIN
                INSERT INTO activity_logs (activity_type, course_id, old_values, new_values, created_at, updated_at)
                VALUES (
                    "update",
                    NEW.id,
                    JSON_OBJECT(
                        "title", OLD.title,
                        "description", OLD.description,
                        "status", OLD.status,
                        "is_premium",OLD.is_premium
                    ),
                    JSON_OBJECT(
                        "title", NEW.title,
                        "description", NEW.description,
                        "status", NEW.status,
                        "is_premium",NEW.is_premium
                    ),
                    NOW(),
                    NOW()
                );
            END
        ');

        DB::unprepared('
            CREATE TRIGGER after_course_insert
            AFTER INSERT ON courses
            FOR EACH ROW
            BEGIN
                INSERT INTO activity_logs (activity_type, course_id, new_values, created_at, updated_at)
                VALUES (
                    "insert",
                    NEW.id,
                    JSON_OBJECT(
                        "title", NEW.title,
                        "description", NEW.description,
                        "status", NEW.status,
                        "is_premium",NEW.is_premium
                    ),
                        NOW(),
                        NOW()
                    );
                END
        ');

        DB::unprepared('
            CREATE TRIGGER after_course_delete
            AFTER DELETE ON courses
            FOR EACH ROW
            BEGIN
                INSERT INTO activity_logs (activity_type, course_id, old_values, created_at, updated_at)
                VALUES (
                    "delete",
                    OLD.id,
                    JSON_OBJECT(
                        "title", OLD.title,
                        "description", OLD.description,
                        "status", OLD.status,
                        "is_premium",OLD.is_premium
                    ),
                    NOW(),
                    NOW()
                );
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP TRIGGER IF EXISTS after_course_update');
        DB::unprepared('DROP TRIGGER IF EXISTS after_course_insert');
        DB::unprepared('DROP TRIGGER IF EXISTS after_course_delete');

        Schema::dropIfExists('activity_logs');
    }
};
