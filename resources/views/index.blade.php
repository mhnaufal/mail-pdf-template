<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF Template</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-3">List of Employees</h2>
        <div class="d-flex justify-content-end mb-4">
            <a class="btn btn-primary" href="{{ URL::to('/employee/pdf') }}">Export to PDF</a>
        </div>
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-danger">
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">DOB</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees ?? '' as $employee)
                    <tr>
                        <th scope="row">{{ $employee->id }}</th>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->phone_number }}</td>
                        <td>{{ $employee->dob }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>

</html>
