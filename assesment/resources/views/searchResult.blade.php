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