@extends('ui_back.index') @section('content')
<section class="a-index">
    <div class="table-agile-info">
        @if(session()->has('status'))
            @if(session()->get('status')===1)
                <div class="alert alert-success">
                    <strong>Done!</strong> {{session()->get('action')}} successful.
                </div>
            @else
                <div class="alert alert-danger">
                    <strong>Fail!</strong> {{session()->get('action')}} failed.
                </div>
            @endif
        @endif
        <div class="panel panel-default">
            <div class="panel-heading">
                User in system
            </div>
            <div class="row w3-res-tb">
                <div class="col-sm-5 m-b-xs">
                    <select class="input-sm form-control w-sm inline v-middle">
                        <option value="0">Bulk action</option>
                        <option value="1">Delete selected</option>
                        <option value="2">Bulk edit</option>
                        <option value="3">Export</option>
                    </select>
                    <button class="btn btn-sm btn-default">Apply</button>
                </div>
                <div class="col-sm-4">
                </div>
                <div class="col-sm-3">
                    <div class="input-group">
                        <input type="text" class="input-sm form-control" placeholder="Search">
                        <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                @if(isset($users) && $users->count() > 0)
                <table class="table table-striped b-t b-light">
                    <thead>
                        <tr>
                            <th width="1%" ">
                                <label class="i-checks m-b-none">
                                    <input type="checkbox"><i></i>
                                </label>
                            </th>
                            <th width="10%">Name</th>
                            <th width="2%">Email</th>
                            <th width="3%">Auth</th>
                            <th width="5%">Phone</th>
                            <th width="5%">Fullname</th>
                            <th width="10%">Website</th>
                            <th width="10%">Gender</th>
                            <th width="10%">Avatar</th>
                            <th width="10%">Address</th>
                            <th width="15%">Birth</th>
                            <th width="14%">Join</th>
                            <th width="5%">Active</th>
                            <th width="10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $u)
                        <tr>
                            <td>
                                <label class="i-checks m-b-none">
                                    <input type="checkbox" name="post[]"><i></i></label>
                            </td>
                            <td><a href="#">{{$u->name}}</a></td>
                            <td>{{$u->email}}</td>
                            <td>{{$u->auth}}</td>
                            <td>{{$u->phone}}</td>
                            <td>{{$u->fullname}}</td>
                            <td>{{$u->website}}</td>
                            <td>{{$u->gender}}</td>
                            <td>{{$u->avatar}}</td>
                            <td>{{$u->address}}</td>
                            <td>{{$u->dateofbirth}}</td>
                            <td>{{$u->dateofjoin}}</td>
                            <td>@if($u->active===1) active @elseif($u->active==2) locked @else Pending @endif</td>
                            <td>
                                <a href="{{ route('ad.u.active', $u->id) }}" class="active" ui-toggle-class=""><i class="fa fa-check text-success text-active"></i></a>
                                <a href="{{ route('ad.u.lock', $u->id) }}" class="active" ui-toggle-class=""><i class="fa fa-lock text-danger text"></i></a>
                            </td>
                        </tr>
                         @endforeach
                    </tbody>
                </table>
                @else
                    <div class="col-md-12">
                        <div class="alert alert-warning">
                            <strong>Whoop!</strong> Nobody in here. Please manage user in here
                        </div>
                    </div>
                @endif
            </div>
            @if($users->lastPage() > 1)
            <footer class="panel-footer">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                    </div>
                    <div class="col-sm-7 text-right text-center-xs">
                        {{$users->links()}}
                        {{-- <ul class="pagination pagination-sm m-t-none m-b-none">
                            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                            <li><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">4</a></li>
                            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                        </ul> --}}
                    </div>
                </div>
            </footer>
            @endif
        </div>
    </div>
</section>
@stop
