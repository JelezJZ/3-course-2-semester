<?php

namespace App\Imports;

use App\Models\journal;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Row;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class journal_import implements OnEachRow
{
    public function onRow(Row $row)
    {
        $rowIndex = $row->getIndex();
        $row = $row->toArray();

        if ($rowIndex < 4 || is_null($row[0])) {
            return;
        }

        journal::query()->create([
            'date' => Date::excelToDateTimeObject($row[0])->format('Y-m-d'),
            'cource' => $row[1],
            'idSubject' => $row[2],
            'idGroup' => $row[3],
            'lecture' => $row[4] ?? 0,
            'practice' => $row[5] ?? 0,
            'lab' => $row[6] ?? 0,
            'module' => $row[7] ?? 0,
            'consulSemester' => $row[8] ?? 0,
            'consulExam' => $row[9] ?? 0,
            'test' => $row[10] ?? 0,
            'exam' => $row[11] ?? 0,
            'coursework' => $row[12] ?? 0,
            'wrcBachelor' => $row[13] ?? 0,
            'wrcSpecialist' => $row[14] ?? 0,
            'wrcMagister' => $row[15] ?? 0,
            'guidePractice' => $row[16] ?? 0,
            'gosExam' => $row[17] ?? 0,
            'wrcReview' => $row[18] ?? 0,
            'wrcDef' => $row[19] ?? 0,
            'guideRraduate' => $row[20] ?? 0,
            'another' => $row[21] ?? 0,
        ]);
    }
}
