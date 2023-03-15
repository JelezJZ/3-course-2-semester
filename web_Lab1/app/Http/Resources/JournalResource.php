<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class JournalResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,

            'date' => $this->date,
            'cource' => $this->cource,
            'idSubject' => $this->idSubject,
            'idGroup' => $this->idGroup,
            'lecture' => $this->lecture,
            'practice' => $this->practice,
            'lab' => $this->lab,
            'module' => $this->module,
            'consulSemester' => $this->consulSemester,
            'consulExam' => $this->consulExam,
            'test' => $this->test,
            'exam' => $this->exam,
            'coursework' => $this->coursework,
            'wrcBachelor' => $this->wrcBachelor,
            'wrcSpecialist' => $this->wrcSpecialist,
            'wrcMagister' => $this->wrcMagister,
            'guidePractice' => $this->guidePractice,
            'gosExam' => $this->gosExam,
            'wrcReview' => $this->wrcReview,
            'wrcDef' => $this->wrcDef,
            'guideRraduate' => $this->guideRraduate,
            'another' => $this->another,

            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
