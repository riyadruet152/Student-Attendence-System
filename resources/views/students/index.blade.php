@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded-lg">
    <h2 class="text-xl font-bold mb-4">Student List</h2>
    <table class="w-full border-collapse border border-gray-300">
        <tr class="bg-gray-200">
            <th class="border p-2">Name</th>
            <th class="border p-2">Roll</th>
            <th class="border p-2">Class</th>
            <th class="border p-2">Section</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td class="border p-2">{{ $student->name }}</td>
                <td class="border p-2">{{ $student->roll_number }}</td>
                <td class="border p-2">{{ $student->class }}</td>
                <td class="border p-2">{{ $student->section }}</td>
            </tr>
        @endforeach
    </table>
</div>
@endsection
