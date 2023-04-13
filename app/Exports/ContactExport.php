<?php

namespace App\Exports;

use App\Models\Contact;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithProperties;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ContactExport implements FromQuery, WithMapping, WithHeadings
{
    public function __construct($start, $end)
    {
        $this->start = $start.' 00:00:00';
        $this->end = $end.' 23:59:59';
    }

    public function query()
    {
        return Contact::query()->whereBetween('created_at',[$this->start, $this->end] );
    }

    public function headings(): array
    {
        return [
            'area_id'  => __('backend.contacts.area_id'),
            'question'  => __('backend.contacts.question'),
            'country'  => __('backend.contacts.country'),
            'name'  => __('backend.contacts.name'),
            'email'  => __('backend.contacts.email'),
            'phone'  => __('backend.contacts.phone'),
            'content'  => __('backend.contacts.content'),
            'remark'  => __('backend.contacts.remark'),
            'created_at'  => __('backend.contacts.created_at'),
        ];
    }

    public function map($item): array
    {
        return [
            $item->areas->name,
            $item->question,
            $item->country,
            $item->name,
            $item->email,
            $item->phone,
            $item->content,
            $item->remark,
            $item->created_at,
        ];
    }

}
