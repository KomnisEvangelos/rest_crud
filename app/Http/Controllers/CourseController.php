<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\CourseService\CourseService;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    protected $courseService;

    public function __construct(CourseService $courseService)
    {
        $this->courseService = $courseService;
    }

    
    public function index()
    {
        $result = ['status' => 200];

        try{
            $result['data'] = $this->courseService->getAll();
        }catch(Exception $e){
            $result = [
                'status' => 500,
                'error' => 'Someting went wrong'
            ];
        }

       return response()->json($result, $result['status']);
       
    }
    

    public function show($id)
    {
        $result = ['status' => 200];

        try{
            $result['data'] = $this->courseService->getCourseById($id);
        }catch(Exception $e){
            $result = [
                'status' => 500,
                'error' => 'Someting went wrong'
            ];
        }

       return response()->json($result, $result['status']);
    }


    public function store(Request $request)
    {
        $data = $request->only([
            'title',
            'description',
            'status',
            'is_premium',
        ]);
        
        $result = ['status' => 200];

        try {
            $result['data'] = $this->courseService->createCourse($data);
        } catch (Exception $e) {
           
            $result = [
                'status' => 500,
                'error' => 'Something went wrong' 
            ];
        }
        return response()->json($result,$result['status']);
    }

    public function update(Request $request, $id)
    {
       
        
        $result = ['status' => 200];

        try {
            $result['data'] = $this->courseService->updateCourse($request, $id);
        } catch (Exception $e) {
            $result = [
                'status' => 500,
                'error' => 'Something went wrong' 
            ];
        }

        return response()->json($result,$result['status']);
    }

    public function destroy($id)
    {
        $result = ['status' => 200];

        try {
            $result['data'] = $this->courseService->deleteCourse($id);
        } catch (Exception $e) {
            $result = [
                'status' => 500,
                'error' => 'Something went wrong' 
            ];
        }

        return response()->json($result,$result['status']);
    }
}
