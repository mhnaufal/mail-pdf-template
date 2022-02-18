<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF Template</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
  <h2 class="text-center mb-3">List of Employees</h2>
    <table class="table table-bordered">
        <thead>
            <tr class="table-danger">
                <td>Name</td>
                <td>Email</td>
                <td>Phone Number</td>
                <td>DOB</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->phone_number }}</td>
                    <td>{{ $employee->dob }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
