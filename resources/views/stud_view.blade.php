<!DOCTYPE html>
<html lang="en">

<head>
    <title>View Records</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    body {
        background-image: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    }

    .btn {
        width: 100%;
        padding: 10px;
        margin-top: 20px;
        border-radius: 20px;
        border: none;
        background-color: dodgerblue;
        font-size: 16px;
        font-weight: 400;
        color: white;
    }

    .btn:hover {
        background-color: lightskyblue;
    }
</style>

<body>
    <div class="container">
        <h2 class="text-center">View Records</h2>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->phoneNum }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->msg }}</td>
                    <td><a href="\updateform?name={{ $user->name }}"><i class="fa fa-edit" style="font-size: 25px"></i></a></td>
                    <td><a href="\delete?name={{ $user->name }}"><i class="fa fa-trash" style="font-size: 25px"></i></a></td>
                </tr>
                @endforeach
                <button class=btn><a href="\insert" style="text-decoration: none; color: white">Add records</a></button>
            </tbody>
        </table>
    </div>
</body>

</html>