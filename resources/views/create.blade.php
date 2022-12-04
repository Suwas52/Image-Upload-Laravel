@extends('dashboard')
@section('content')
<form action="{{route('store')}}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="container m-5">
        <div class="row border ">
            <div class="form-group">
                <label for="name" class="mb-2 fs-2">Name</label>
                <input class="form-control py-3" name="name" placeholder="Enter the player name">
                @error('name')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group ">
                <label for="country" class="mb-2 fs-2">Country</label>
                <input class="form-control py-3" name="country" placeholder="Country">
                @error('name')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
            @enderror
            </div>
            <div class="form-group ">
                <label for="game" class="mb-2 fs-2">Total Game</label>
                <input class="form-control py-3" name="total_games" placeholder="Total Game">
                @error('name')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
            @enderror
            </div>
            <div class="form-group ">
                <label for="goal" class="mb-2 fs-2">Total Goal</label>
                <input class="form-control py-3 mb-3" name="total_goals" placeholder="Total goal">
                @error('name')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
            @enderror
            </div>
            <div class="form-group ">
                <label for="image" class="mb-2 fs-2">Player Image</label>
                <input type="file" class="form-control py-3 mb-3" name="image" placeholder="Player Image">
                @error('name')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
            @enderror
            </div>
            <div class="form-group ">
                <button type="submit " class="btn btn-primary mb-2">Submit</button>
            </div>
        </div>
    </div>
</form>

@endsection