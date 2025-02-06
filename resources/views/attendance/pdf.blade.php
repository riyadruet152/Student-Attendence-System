<!DOCTYPE html>
<html>
<head>
    <title>Attendance Report</title>
</head>
<body>
    <h2>Attendance Report</h2>
    <table border="1">
        <tr>
            <th>Student</th>
            <th>Date</th>
            <th>Status</th>
        </tr>
        @foreach ($attendance as $record)
        <tr>
            <td>{{ $record->student->name }}</td>
            <td>{{ $record->date }}</td>
            <td>{{ $record->status }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
