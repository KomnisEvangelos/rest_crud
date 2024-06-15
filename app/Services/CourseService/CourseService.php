<?php
namespace App\Services\CourseService;

use App\Repositories\CourseRepository;
use App\Models\ActivityLog;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
/**
 * Class CourseService
 *
 * This class implements the CourseServiceInterface.
 * It provides the actual functionality for managing courses.
 */
class CourseService implements CourseServiceInterface
{
    /**
     * @var CourseRepository
     */
    protected $courseRepository;

    /**
     * CourseService constructor.
     *
     * @param CourseRepository $courseRepository
     */
    public function __construct(CourseRepository $courseRepository) {
        $this->courseRepository = $courseRepository;
    }

     /**
     * Retrieve all courses.
     *
     * @return mixed
     */
    public function getAll()
    {
        return $this->courseRepository->getAllCourses();
    }

    /**
     * Retrieve a course by its ID.
     *
     * @param int $id
     * @return mixed
     */
    public function getCourseById($id)
    {
        return $this->courseRepository->getById($id);
    }

    /**
     * Create a new course.
     *
     * @param array $data
     * @return mixed
     * @throws InvalidArgumentException
     */
    public function createCourse($data)
    {
    
        $validator =Validator::make($data, [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|string|in:Published,Unpublished',
            'is_premium' => 'required|boolean',
        ]);
        
        if($validator->fails()){
            throw new InvalidArgumentException($validator->errors()->first());
        }

        $result = this->courseRepository->save($data);
      

        return $result; 
    }

     /**
     * Update an existing course.
     *
     * @param Request $request
     * @param int $id
     * @return mixed
     * @throws InvalidArgumentException
     */
    public function updateCourse(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string',
            'status' => 'sometimes|required|in:Published,Pending',
            'is_premium' => 'sometimes|required|boolean',
        ]);

        if ($validator->fails()) {
           throw new InvalidArgumentException($validator->errors()->first());
        }

        DB::beginTransaction();

        try {
            $course = $this->courseRepository->update($data,$id);
        }catch(Exception $e){
            DB::rollBack();
            Log::info($e->getMessage());
            throw new InvalidArgumentException('Unable to update resource');
        }

        DB::commit();
      


        return $course;
    }

     /**
     * Delete a course by its ID.
     *
     * @param int $id
     * @return mixed
     * @throws InvalidArgumentException
     */
    public function deleteCourse($id)
    {
        DB::beginTransaction();

        try {
            $course = $this->courseRepository->delete($id);
        }catch(Exception $e){
            DB::rollBack();
            Log::info($e->getMessage());
            throw new InvalidArgumentException('Unable to delete resource');
        }

        DB::commit();
       

        return $course;
    }

   
}
