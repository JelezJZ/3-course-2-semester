<?php

namespace App\Http\Controllers;

use App\Http\Resources\JournalResource;
use App\Imports\journal_import;
use App\Models\journal;
use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class JournalContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $journals = journal::query()->get();
        return JournalResource::collection($journals);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        session_start();
        $_SESSION['oldJournals'] = JournalResource::collection(journal::query()->get());
        session_write_close();

        journal::create([
            'date' => $request['p0'],
            'cource' => $request['p1'],
            'idSubject' => $request['p2'],
            'idGroup' => $request['p3'],
            'lecture' => $request['p4'],
            'practice' => $request['p5'],
            'lab' => $request['p6'],
            'module' => $request['p7'],
            'consulSemester' => $request['p8'],
            'consulExam' => $request['p9'],
            'test' => $request['p10'],
            'exam' => $request['p11'],
            'coursework' => $request['p12'],
            'wrcBachelor' => $request['p13'],
            'wrcSpecialist' => $request['p14'],
            'wrcMagister' => $request['p15'],
            'guidePractice' => $request['p16'],
            'gosExam' => $request['p17'],
            'wrcReview' => $request['p18'],
            'wrcDef' => $request['p19'],
            'guideRraduate' => $request['p20'],
            'another' => $request['p21'],
        ]);

        Log::create([
            'type' => 'create',
        ]);
    }

    public function excelUpload(Request $request)
    {
        Storage::disk('local')->put($request->file('file')->getClientOriginalName(),
            file_get_contents($request->file('file')));
        Excel::import(new journal_import(),
            storage_path("app\\{$request->file('file')->getClientOriginalName()}"));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    public function update(Request $request)
    {
        session_start();
        $_SESSION['oldJournals'] = JournalResource::collection(journal::query()->get());
        session_write_close();

        journal::where('id', $request['p0'])->update([
            'date' => $request['p1'],
            'cource' => $request['p2'],
            'idSubject' => $request['p3'],
            'idGroup' => $request['p4'],
            'lecture' => $request['p5'],
            'practice' => $request['p6'],
            'lab' => $request['p7'],
            'module' => $request['p8'],
            'consulSemester' => $request['p9'],
            'consulExam' => $request['p10'],
            'test' => $request['p11'],
            'exam' => $request['p12'],
            'coursework' => $request['p13'],
            'wrcBachelor' => $request['p14'],
            'wrcSpecialist' => $request['p15'],
            'wrcMagister' => $request['p16'],
            'guidePractice' => $request['p17'],
            'gosExam' => $request['p18'],
            'wrcReview' => $request['p19'],
            'wrcDef' => $request['p20'],
            'guideRraduate' => $request['p21'],
            'another' => $request['p22'],
        ]);

        Log::create([
            'type' => 'update',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        session_start();
        $_SESSION['oldJournals'] = JournalResource::collection(journal::query()->get());
        session_write_close();

        journal::query()->where('id', '=', $id)->delete();

        Log::create([
            'type' => 'delete',
        ]);
    }

    public function getOldJournals()
    {
        session_start();
        return $_SESSION['oldJournals'];
    }
}
