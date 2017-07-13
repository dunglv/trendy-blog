@extends('ui_back.index') @section('content')
<section class="a-index">
    <div class="table-agile-info">
        {{-- Begin Display message flash --}}
        @if(session()->has('status'))
            <div class="alert alert-{{session()->get('alert', 'warning')}}">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>{{session()->get('label', '')}}</strong> {{session()->get('message', '')}}
            </div>
        @endif
        {{-- End Display message flash --}}

        <div class="panel panel-default">
            <div class="panel-heading">
                Authoring for user
            </div>
            <div class="panel-body">
                <form action="{{ route('ad.u.auth_change', $user->id) }}" method="POST" role="form">
                    {{csrf_field()}}
                    <legend>Select auth user permission</legend>
                    <div class="form-group">
                        <select name="auth" id="input" class="form-control" required="required">
                            <option @if($user->auth === 0) selected="selected" @endif value="0">User normal</option>
                            <option @if($user->auth === 1) selected="selected" @endif value="1">Admin</option>
                            <option @if($user->auth === 2) selected="selected" @endif value="2">Distribute</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                    <a class="btn btn-danger" href="{{ route('ad.home') }}">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</section>
@stop
