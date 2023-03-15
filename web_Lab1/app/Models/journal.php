<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class journal extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'cource',
        'idSubject',
        'idGroup',
        'lecture',
        'practice',
        'lab',
        'module',
        'consulSemester',
        'consulExam',
        'test',
        'exam',
        'coursework',
        'wrcBachelor',
        'wrcSpecialist',
        'wrcMagister',
        'guidePractice',
        'gosExam',
        'wrcReview',
        'wrcDef',
        'guideRraduate',
        'another',
    ];
}
