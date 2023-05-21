<!DOCTYPE html>
<html lang="en">
<style>
    .bg-secondary {
        padding-top: 35px !important;
        padding-bottom: 35px !important;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="bg-secondary">
            <div class="container">
                <div class="row">
                    <div class="col">
                        Search
                        <input type="text" class="form-control" placeholder="search name/designation/department" id="search">
                    </div>
                </div>
            </div>
            <div class="container mt-5" id="data">
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    @foreach($users as $user)
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{$user->name}}</h5>
                                <p class="card-text">{{$user->designation->name}}</p>
                                <p class="card-text">{{$user->department->name}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#search').on('input', function() {
            let keyword = $(this).val();
            var url = "{{ route('search') }}?search=" + keyword;

            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    $('#data').html(response.html);
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        });
    });
</script>

</html>