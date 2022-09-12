<?php

namespace App\Exports;

use App\Models\Evaluation;
use App\Models\Category;
use App\Models\TopicEvaluation;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class HasilPenilaianExport implements FromCollection, WithHeadings, WithMapping
{

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Evaluation::select('id', 'topic_id', 'user_id', 'category_id', 'reason', 'star_evaluation', 'created_at')->get();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Topic Penilaian',
            'Nama',
            'Kategori',
            'Keterangan',
            'Rating',
            'Tanggal Menilai',
        ];
    }

    public function map($evaluation): array
    {
        return [
            $evaluation->id,
            $evaluation->topic->title,
            $evaluation->user->name,
            $evaluation->category->name,
            $evaluation->reason,
            $evaluation->star_evaluation,
            $evaluation->created_at,
        ];
    }
}
