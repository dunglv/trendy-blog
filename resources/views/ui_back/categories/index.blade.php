@extends('ui_back.index')
@section('title', 'Avaliable categories')
@section('content')
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
                Responsive Table
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
                @if(isset($categories) && $categories->count() > 0)
                <table class="table table-striped b-t b-light">
                    <thead>
                        <tr>
                            <th width="1%" ">
                                <label class="i-checks m-b-none">
                                    <input type="checkbox"><i></i>
                                </label>
                            </th>
                            <th width="40%">Title</th>
                            <th width="10%">Date create</th>
                            <th width="3%">Active</th>
                            <th width="10%">Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $c)
                        <tr>
                            <td>
                                <label class="i-checks m-b-none">
                                    <input type="checkbox" name="post[]"><i></i></label>
                            </td>
                            <td><a href="#">{{$c->title}}</a></td>
                            <td>{{$c->created_at}}</td>
                            <td>@if($c->status===1) active @elseif($c->status==2) locked @else Pending @endif</td>
                            <td>
                                <a href="{{ route('ad.c.active', $c->id) }}" class="active" ui-toggle-class=""><i class="fa fa-check text-success text-active"></i></a>
                                <a href="{{ route('ad.c.delete', $c->id) }}" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
                            </td>
                        </tr>
                         @endforeach
                    </tbody>
                </table>
                @else
                <p>No category in here. Create new category at <a href="{{ route('ad.c.create') }}">here</a></p>
            @endif
            </div>
            @if($categories->lastPage() > 1)
            <footer class="panel-footer">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                    </div>
                    <div class="col-sm-7 text-right text-center-xs">
                        {{$categories->links()}}
                    </div>
                </div>
            </footer>
            @endif
        </div>
    </div>
</section>
@stop
