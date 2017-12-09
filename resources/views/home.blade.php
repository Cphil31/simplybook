@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">


                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="col-lg">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Exprime toi " aria-label="Search for...">
                          <span class="input-group-btn">
                            <button class="btn btn-secondary" type="button">Publier</button>
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
@endsection
