<?php

namespace App\Services\CourseService;

use Illuminate\Http\Request;

/**
 * Interface CourseServiceInterface
 *
 * This interface defines the contract for the CourseService.
 * It specifies the methods that any CourseService implementation must provide.
 */
interface CourseServiceInterface
{
    /**
     * Retrieve all courses.
     *
     * @return mixed
     */
    public function getAll();

    /**
     * Retrieve a course by its ID.
     *
     * @param int $id
     * @return mixed
     */
    public function getCourseById($id);

    /**
     * Create a new course.
     *
     * @param array $data
     * @return mixed
     */
    public function createCourse(array $data);

    /**
     * Update an existing course.
     *
     * @param Request $request
     * @param int $id
     * @return mixed
     */
    public function updateCourse(Request $request, $id);

    /**
     * Delete a course by its ID.
     *
     * @param int $id
     * @return mixed
     */
    public function deleteCourse($id);
}
