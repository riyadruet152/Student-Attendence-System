<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Student;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class AttendanceController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('attendance.index', compact('students'));
    }

    public function store(Request $request)
    {
        foreach ($request->attendance as $student_id => $status) {
            Attendance::updateOrCreate(
                ['student_id' => $student_id, 'date' => now()->toDateString()],
                ['status' => $status]
            );
        }

        return redirect()->back()->with('success', 'Attendance marked successfully!');
    }

    public function report(Request $request)
    {
        $query = Attendance::with('student');

        if ($request->filled('student_id')) {
            $query->where('student_id', $request->student_id);
        }

        if ($request->filled('date')) {
            $query->where('date', $request->date);
        }

        $attendances = $query->get(); // Change variable name to 'attendances'

        return view('attendance.report', compact('attendances')); // Pass 'attendances'
    }
    public function exportPDF()
    {
        $attendance = Attendance::with('student')->get();
        $pdf = Pdf::loadView('attendance.pdf', compact('attendance'));
        return $pdf->download('attendance_report.pdf');
    }
}
