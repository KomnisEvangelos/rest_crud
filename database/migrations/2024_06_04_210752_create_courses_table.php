<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateActivityLogTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
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
                        "name", OLD.name,
                        "description", OLD.description,
                        "price", OLD.price
                    ),
                    JSON_OBJECT(
                        "name", NEW.name,
                        "description", NEW.description,
                        "price", NEW.price
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
                        "name", NEW.name,
                        "description", NEW.description,
                        "price", NEW.price
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
                        "name", OLD.name,
                        "description", OLD.description,
                        "price", OLD.price
                    ),
                    NOW(),
                    NOW()
                );
            END
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER IF EXISTS after_course_update');
        DB::unprepared('DROP TRIGGER IF EXISTS after_course_insert');
        DB::unprepared('DROP TRIGGER IF EXISTS after_course_delete');

        Schema::dropIfExists('activity_logs');
    }
}
