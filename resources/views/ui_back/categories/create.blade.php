@extends('ui_back.index') 

@section('title', 'Create new category')
@section('content')
<div id="category" class="create">
        {!!Form::open([
            'route' => 'ad.c.store',
            'method' => 'POST',
            'class' => 'form-horizontal bucket-form',
            'files' => 'true'
            ])!!}
        <div class="form-w3layouts">
            <!-- page start-->
            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    {{-- Begin Display message flash --}}
                    @if(session()->has('status'))
                        <div class="alert alert-{{session()->get('alert', 'warning')}}">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>{{session()->get('label', '')}}</strong> {{session()->get('message', '')}}
                        </div>
                    @endif
                    {{-- End Display message flash --}}
                    <section class="panel">
                        <header class="panel-heading">
                            Create new Category
                        </header>
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Title display</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" class="form-control">
                                    <span class="help-block">@if(isset($errors)){{$errors->first('title')}} @endif</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Short description</label>
                                <div class="col-sm-10">
                                    <textarea name="description" id="input" class="form-control" rows="3" ></textarea>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- page end-->
        </div>
        <div class="form-w3layouts">
            <!-- page start-->
            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Related category
                        </header>
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Thumbnail</label>
                                <div class="col-sm-7">
                                    <input type="file" name="thumbnail" id="input" class="form-control" value=""  pattern="" title="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Active</label>
                                <div class="col-sm-7">
                                    <div class="radio switch_yn">
                                        <input type="radio" name="status" data-label="on" value="1" checked="checked">
                                        <input type="radio" name="status" data-label="off" value="0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- page end-->
        </div>
        <div class="form-w3layouts">
            <!-- page start-->
            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-sm-12 text-right">
                                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
                                    <button type="button" class="btn btn-danger"><i class="fa fa-remove"></i> Cancel</button>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- page end-->
        </div>
    {!!Form::close()!!}
</div>
<script>
    
</script>
@stop
