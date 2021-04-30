@extends('layouts.admin')

@section('content')
<div id="create" >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit user') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.clients.update', $user->id) }}">
                            @method('PATCH')
                            @include('admin.clients.partials.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
