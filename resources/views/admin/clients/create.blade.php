@extends('layouts.admin')

@section('content')
<div id="create" >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('create new user') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.clients.store') }}">
                           @include('admin.clients.partials.form',['create'=> true])
                                
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
