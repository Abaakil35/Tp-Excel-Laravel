<!DOCTYPE html>
<html lang="en">
    <style>
        h1 {
            text-align: center;
        }
        form {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>
    <h1>Upload Excel File</h1>
    <form action="/import" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" accept=".xlsx">
        <button type="submit">Upload</button>
    </form>
</body>
</html>