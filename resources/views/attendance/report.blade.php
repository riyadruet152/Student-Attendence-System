@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h2 class="text-xl font-bold mb-4">Attendance Report</h2>

    @if ($attendances->isEmpty())
        <p class="text-red-500">No attendance records found.</p>
    @else
        <table class="w-full border-collapse border">
            <tr class="bg-gray-200">
                <th class="border p-2">Student</th>
                <th class="border p-2">Date</th>
                <th class="border p-2">Status</th>
            </tr>
            @foreach ($attendances as $record)
            <tr>
                <td class="border p-2">{{ $record->student->name }}</td>
                <td class="border p-2">{{ $record->date }}</td>
                <td class="border p-2">{{ $record->status }}</td>
            </tr>
            @endforeach
        </table>
    @endif
</div>
@endsection
<a href="{{ route('attendance.export.pdf') }}" class="bg-red-500 text-white px-4 py-2">Download PDF</a>
