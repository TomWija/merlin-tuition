<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        //
    }

    /**
     * Find the levels for a given subject encoded in Json
     *
     * @param string $name optional, if given, find by subject name instead of ID
     */
    public function getSubjectLevelsAsJson($subjectName = null)
    {
        $subjectName = urldecode($subjectName);
        $subject = Subject::where('name', $subjectName)->get()->first();
        $levels = $subject->getAttributes();
        unset($levels['id'], $levels['created_at'], $levels['updated_at'], $levels['name']);

        $parsedSubjects = array();
        foreach($levels as $level => $available) {
            if ($available) {
                $parsedSubjects[] = $this->parseSubject($level);
            }
        }
        return response()->json($parsedSubjects);
    }

    /**
     * Find the levels for a given subject encoded in Json
     *
     * @param int $subjectId
     */
    public function getSubjectsJson()
    {
        $subjects = Subject::all();
        return response()->json($subjects);
    }

    private function parseSubject($subject)
    {
        switch ($subject) {
            case "primary":
                return "Primary";
            case "secondary":
                return "Secondary";
            case "gcse":
                return "GCSE";
            case "alevel":
                return "A-Level";
            case "university_bachelors":
                return "University - Bachelor's";
            case "university_masters":
                return "University - Master's";
            case "adult_casual":
                return "Adult/Casual Learner";
            default:
                break;
        }
    }
}
