<?php
namespace App\Repositories;

use App\Models\Course;

class CourseRepository
{
    protected $course;

    public function __construct(Course $course){
        $this->course = $course;
    }

    public function save($data){
        try {
            $course = $this->course->create($data);
            return $course->fresh();
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function getAllCourses(){
        return $this->course->all();
    }

    public function getById($id){
        try {
            return $this->course->findOrFail($id);
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function update($data, $id){
        try {
            $course = $this->course->findOrFail($id);
            $course->update($data);
            return $course;
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function delete($id){
        try {
            $course = $this->course->findOrFail($id);
            $course->delete();
            return $course;
        } catch (\Exception $e) {
            throw $e;
        }
    }
}
