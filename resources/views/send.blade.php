<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multiple Database</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <!-- Database 1 -->
    <form class="mt-5" action="{{route('info.store')}}" method="POST">
        @csrf
        <input name="how" type="hidden" value="1">
        <div class=" w-25">
            <div class="form-group form-lg-8">
                <label for="exampleInputEmail1">Edit 1</label>
                <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Wirte anything">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Edit 2</label>
                <input name="surname" type="text" class="form-control sm-5" id="exampleInputPassword1" placeholder="Wirte anything">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit Database 1</button>
    </form>

    <!-- Database 2 -->

    <form class="mt-5" action="{{route('info.store')}}" method="POST">
        @csrf
        <input name="how" type="hidden" value="2">
        <div class=" w-25">
            <div class="form-group form-lg-8">
                <label for="exampleInputEmail1">Edit 1</label>
                <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Wirte anything">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Edit 2</label>
                <input name="surname" type="text" class="form-control sm-5" id="exampleInputPassword1" placeholder="Wirte anything">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit Database 2</button>
    </form>
<!-- script -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>




