<?php

namespace App\Console\Commands;
use App\Models\journal;
use Illuminate\Console\Command;

class fillJournal extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:fill-table {count}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $usersData = $this->argument('count');
        for ($i = 0; $i < $usersData; $i++) { 
            journal::create([
                'date' => "2023-10-12",
                'cource' => "{$i}",
                'idSubject' => "{$i}",
                'idGroup' => "{$i}",
                'lecture' => "{$i}",
                'practice' => "{$i}",
                'lab' => "{$i}",
                'module' => "{$i}",
                'consulSemester' => "{$i}",
                'consulExam' => "{$i}",
                'test' => "{$i}",
                'exam' => "{$i}",
                'coursework' => "{$i}",
                'wrcBachelor' => "{$i}",
                'wrcSpecialist' => "{$i}",
                'wrcMagister' => "{$i}",
                'guidePractice' => "{$i}",
                'gosExam' => "{$i}",
                'wrcReview' => "{$i}",
                'wrcDef' => "{$i}",
                'guideRraduate' => "{$i}",
                'another' => "{$i}",
            ]);
        }         
    }
}
