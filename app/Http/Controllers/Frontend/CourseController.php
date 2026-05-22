<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\CourseService;

class CourseController extends Controller
{
    protected $courseService;

    /**
     * Inject the CourseService.
     */
    public function __construct(CourseService $courseService)
    {
        $this->courseService = $courseService;
    }

    public function courseDetails($slug, $formId)
    {
        // Fetch all courses
        $courses = $this->courseService->getCourses();

        // Find course by slug
        $course = $courses->firstWhere('slug', $slug);

        // If not found
        if (!$course) {
            abort(404);
        }

        // View path
        $view = 'frontend.pages.courses.' . $slug;

        // Check view exists
        if (!view()->exists($view)) {
            abort(404, 'Course page template not found');
        }

        return view($view, [
            'course' => $course,
            'title' => $course['title'],
            'formId' => $formId, // IMPORTANT
        ]);
    }
}
