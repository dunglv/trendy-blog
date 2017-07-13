@extends('ui_back.index')
@section('title', 'Pending article')
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
                @if(isset($articles) && $articles->count() > 0)
                <table class="table table-striped b-t b-light">
                    <thead>
                        <tr>
                            <th width="1%" ">
                                <label class="i-checks m-b-none">
                                    <input type="checkbox"><i></i>
                                </label>
                            </th>
                            <th width="40%">Title</th>
                            <th width="2%">Author</th>
                            <th width="3%">Category</th>
                            <th width="3%">Date create</th>
                            <th width="3%">Active</th>
                            <th width="10%">Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $a)
                        <tr>
                            <td>
                                <label class="i-checks m-b-none">
                                    <input type="checkbox" name="post[]"><i></i></label>
                            </td>
                            <td><a href="#">{{$a->title}}</a></td>
                            <td><a href="#">{{$a->user->name}}</a></td>
                            <td><a href="#">{{$a->category[0]->title}}</a></td>
                            <td>{{$a->created_at}}</td>
                            <td>@if($a->status===1) active @elseif($a->status==2) locked @else Pending @endif</td>
                            <td>
                                <a href="{{ route('ad.a.active', $a->id) }}" class="active" ui-toggle-class=""><i class="fa fa-check text-success text-active"></i></a>
                                <a href="{{ route('ad.a.delete', $a->id) }}" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
                            </td>
                        </tr>
                         @endforeach
                    </tbody>
                </table>
                @else
                    <div class="col-md-12">
                        <div class="alert alert-warning">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Whoops!</strong> No article in site. Add new article at <a href="{{ route('ad.a.create') }}">here</a>
                        </div>
                    </div>
                @endif
            </div>
            <footer class="panel-footer">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                    </div>
                    <div class="col-sm-7 text-right text-center-xs">
                        {{$articles->links()}}
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
        </div>
    </div>
</section>
@stop
