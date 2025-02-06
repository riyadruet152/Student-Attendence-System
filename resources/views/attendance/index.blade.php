@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded-lg">
    <h2 class="text-xl font-bold mb-4">Mark Attendance</h2>

    <form method="POST" action="{{ route('attendance.store') }}">
        @csrf
        <table class="w-full border-collapse border border-gray-300">
            <tr class="bg-gray-200">
                <th class="border p-2">Name</th>
                <th class="border p-2">Roll</th>
                <th class="border p-2">Class</th>
                <th class="border p-2">Section</th>
                <th class="border p-2">Status</th>
            </tr>
            @foreach ($students as $student)
                <tr>
                    <td class="border p-2">{{ $student->name }}</td>
                    <td class="border p-2">{{ $student->roll_number }}</td>
                    <td class="border p-2">{{ $student->class }}</td>
                    <td class="border p-2">{{ $student->section }}</td>
                    <td class="border p-2">
                        <select name="attendance[{{ $student->id }}]" class="border p-1 rounded">
                            <option value="Present">Present</option>
                            <option value="Absent">Absent</option>
                        </select>
                    </td>
                </tr>
            @endforeach
        </table>
        <button type="submit" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded">Submit</button>
    </form>
</div>
@endsection
