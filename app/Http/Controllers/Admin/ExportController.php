<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Member;
use App\Models\Register;
use App\Models\Speaker;
use App\Models\Sponser;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use Spatie\SimpleExcel\SimpleExcelWriter;

class ExportController extends Controller
{
    public function exportEvents ()
    {
        $rows= [];
        Event::chunk(3, function($events) use (&$rows){
            foreach ($events->toArray() as $event){
                $rows[]= $event;
            }
        });

        SimpleExcelWriter::streamDownload('events.xlsx')
        ->noHeaderRow()
        ->addRows($rows);
    }

    public function exportSpeakers ()
    {
        $rows= [];
        Speaker::chunk(3, function($speakers) use (&$rows){
            foreach ($speakers->toArray() as $speaker){
                $rows[]= $speaker;
            }
        });

        SimpleExcelWriter::streamDownload('speakers.xlsx')
        ->noHeaderRow()
        ->addRows($rows);
    }

    public function exportSponsers ()
    {
        $rows= [];
        Sponser::chunk(3, function($sponsers) use (&$rows){
            foreach ($sponsers->toArray() as $sponser){
                $rows[]= $sponser;
            }
        });

        SimpleExcelWriter::streamDownload('sponsers.xlsx')
        ->noHeaderRow()
        ->addRows($rows);
    }

    public function exportRegisters ()
    {
        $rows= [];
        Register::chunk(3, function($registers) use (&$rows){
            foreach ($registers->toArray() as $register){
                $rows[]= $register;
            }
        });

        SimpleExcelWriter::streamDownload('registers.xlsx')
        ->noHeaderRow()
        ->addRows($rows);
    }

    public function exportVolunteers ()
    {
        $rows= [];
        Volunteer::chunk(3, function($volunteers) use (&$rows){
            foreach ($volunteers->toArray() as $volunteer){
                $rows[]= $volunteer;
            }
        });

        SimpleExcelWriter::streamDownload('volunteers.xlsx')
        ->noHeaderRow()
        ->addRows($rows);
    }

    public function exportMembers ()
    {
        $rows= [];
        Member::chunk(3, function($members) use (&$rows){
            foreach ($members->toArray() as $member){
                $rows[]= $member;
            }
        });

        SimpleExcelWriter::streamDownload('members.xlsx')
        ->noHeaderRow()
        ->addRows($rows);
    }
}
