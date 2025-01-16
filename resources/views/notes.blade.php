<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
</head>
    <style>
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
            border: 1px solid #ccc;
            text-align: left;
        }
    </style>
<body>
    <h1>Notes</h1>
    <table border="1">
        <thead>
            <tr>
                @if(!empty($notes) && count($notes) > 0)
                    @foreach($notes[0] as $header)
                        <th>{{ $header }}</th>
                    @endforeach
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach($notes as $index => $note)
                @if($index > 0) <!-- Skip the header row -->
                    <tr>
                        @foreach($note as $cell)
                            <td>{{ $cell }}</td>
                        @endforeach
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
</body>
</html>