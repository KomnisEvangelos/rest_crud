<?php
namespace Tests\Feature;

use App\Models\Course;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CourseTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_get_all_courses()
    {
        Course::factory()->count(5)->create();

        $response = $this->getJson('/api/v1/courses');
        $response->assertStatus(200);
        $response->assertJsonCount(5, 'data');

        
    }

    public function test_can_get_single_course()
{
    $course = Course::factory()->create();

    $response = $this->getJson('/api/v1/courses/' . $course->id);

    $response->assertStatus(200)
             ->assertJson([
                 'data' => [
                     'id' => $course->id,
                 ]
             ]);
}


public function test_can_create_course()
{
    $data = [
        'title' => 'Test Course',
        'description' => 'Test Description',
        'status' => 'Published',
        'is_premium' => true,
    ];

    $response = $this->postJson('/api/v1/courses', $data);

    $this->assertDatabaseHas('courses', ['title' => 'Test Course']);
}


public function test_can_update_course()
{
    $course = Course::factory()->create();

    $data = [
        'title' => 'Updated Course',
        'description' => 'Updated Description',
        'status' => 'Pending',
        'is_premium' => false,
    ];

    $response = $this->putJson('/api/v1/courses/' . $course->id, $data);

    $response->assertStatus(200)
             ->assertJson([
                 'data' => [
                     'id' => $course->id,
                     'title' => $data['title'],
                     'description' => $data['description'],
                     'status' => $data['status'],
                     'is_premium' => $data['is_premium'],
                 ]
             ]);

    $this->assertDatabaseHas('courses', $data);
}


    public function test_can_delete_course()
    {
        $course = Course::factory()->create();

        $response = $this->deleteJson('/api/v1/courses/' . $course->id);

        $response->assertStatus(200);

        $this->assertSoftDeleted($course); 
    }
}