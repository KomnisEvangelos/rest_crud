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
        $course - new $this->course;

        $course->title = $data['title'];
        $course->description = $data['description'];
        $course->status = $data['status'];
        $course->is_premium = $data['is_premium'];

        $course->save();
        
        return $course->fresh();
    }

    public function getAllCourses(){
       // return $this->course->get();
        return Course::all();
    }

    public function getById($id){
        return $this->course->where('id',$id)->get();
    }

    public function update($data,$id){
        $course = $this->course->find($id);

        $course->title = $data['title'];
        $course->description = $data['description'];
        $course->status = $data['status'];
        $course->is_premium = $data['is_premium'];
        
        $course->update();

        return $course;
    }

    public function delete($id){
        
        $course = $this->course->find($id);
        $course->delete();

        return $course;
    }
}