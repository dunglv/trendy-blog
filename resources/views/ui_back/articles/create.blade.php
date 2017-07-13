@extends('ui_back.index') 
@section('script.top')
{!!Html::script('/public/js/handle.js')!!}
@stop
@section('title', 'Create new article')
@section('content')
<div id="article" class="create">
    {!!Form::open([ 'method' => 'POST', 'route' => 'ad.a.store', 'class' => 'form-horizontal bucket-form', 'files' => true ])!!}
    <div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Create new article
                    </header>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control" placeholder="Input title new article..." value="{{old('title')}}"  required="required"> 
                                @if(!$errors->has('title'))
                                    <span class="help-block">Title of article is min 10 and max 200 characters</span> 
                                @else
                                    <span class="error-block">{{$errors->first('title')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Slug</label>
                            <div class="col-sm-10">
                                <input type="text" name="slug" class="form-control" placeholder="Slug of article display in browser" value="{{old('slug')}}" required="required" readonly="readonly">
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Description</label>
                            <div class="col-sm-10">
                                <textarea name="description" id="input" rows="3"  class="form-control" placeholder="Short description about this article">{{old('description')}}</textarea>
                                @if(!$errors->has('description'))
                                    <span class="help-block">This article is perfect if you give a short description. The description is minimum 20 and maximum 200 characters</span> 
                                @else
                                    <span class="error-block">{{$errors->first('description')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Content</label>
                            <div class="col-sm-10">
                                <textarea name="content"  id="content" class="form-control" rows="20">{{old('content')}}</textarea>
                                @if(!$errors->has('content'))
                                    <span class="help-block">Content was required and is clearly. Not contain adult content, violent or about goverment. Read more policy in <a href="#">here</a></span> 
                                @else
                                    <span class="error-block">{{$errors->first('content')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Tag</label>
                            <div class="col-sm-10">
                                <div class="td-bl-tag">
                                    <div class="td-l-tag">
                                        <span class="td-tag">tag1<span class="td-close">x</span></span>
                                        <span class="td-tag">tag2<span class="td-close">x</span></span>
                                    </div>
                                    <input type="text" class="td-in-tag">
                                </div>
                                <input name="tag" type="hidden" value="{{old('tag')}}">
                                @if(!$errors->has('tag'))
                                    <span class="help-block">A tag is not too long and related to article. Input minimum 1 tag and maximum 6 tags</span> 
                                @else
                                    <span class="error-block">{{$errors->first('tag')}}</span>
                                @endif
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
                        Related article
                    </header>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Category</label>
                            <div class="col-sm-7">
                                <select name="category" id="input" class="form-control" required="required">
                                    <option value="0">--- Select category ---</option>
                                    @if (isset($cates) && $cates->count() > 0) @foreach ($cates as $c)
                                    <option value="{{$c->id}}">{{$c->title}}</option>
                                    @endforeach @endif
                                </select>
                                @if(!$errors->has('category'))
                                    <span class="help-block">Select a category that this article contain content related.</span> 
                                @else
                                    <span class="error-block">{{$errors->first('category')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Thumbnail</label>
                            <div class="col-sm-7">
                                <input type="file" name="thumbnail" id="input" class="form-control" value="" pattern="" title="">
                                @if(!$errors->has('thumbnail'))
                                    <span class="help-block">Give a thumbnail for this article to user able imagine to content</span> 
                                @else
                                    <span class="error-block">{{$errors->first('thumbnail')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Status</label>
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
                    <header class="panel-heading">
                        User action
                    </header>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Open Comment</label>
                            <div class="col-sm-7">
                                <div class="radio switch_yn">
                                    <input type="radio" name="opencomment" data-label="on" value="1" checked="checked">
                                    <input type="radio" name="opencomment" data-label="off" value="0">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Send me email when update this</label>
                            <div class="col-sm-7">
                                <div class="radio switch_yn">
                                    <input type="radio" name="notify" data-label="on" value="1">
                                    <input type="radio" name="notify" data-label="off" value="0"  checked="checked">
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
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>
// tinymce.init({
//     selector: '#content'
// });

$(function(){
    $('input[name="title"]').on('change', function(e){
        $('input[name="slug"]').val(slug($(this).val()));
    });

    var lt_source;
    $.ajax({
        async: false,
        type: 'GET',
        url: '{{ route('ad.a.handle-request') }}',
        data: {'r':'req-l-t'},
        success: function(data){
            lt_source = data.source;
            // console.log(data);
        },
        error: function(errors){

        }

    })
    // console.log(lt_source);
    $('.td-in-tag').autocomplete({
        source: lt_source,
        select: function(e, ui){
            var ct = $('input[name="tag"]').val();
            var id = ui.item.id;
            // console.log(id);
            var ref = new RegExp(","+id+"|,"+id+",|"+id+",|^"+id+"$");
            if (ct.match(ref) != null) {
                alert('Tag already Exists');
                return false;
            }
            $(this).parent('.td-bl-tag').children('.td-l-tag').append('<span class="td-tag">'+ui.item.value+'<span class="td-close" id="tag_'+ui.item.id+'">x</span></span>');
            ct += ','+ui.item.id;
            $('input[name="tag"]').val(ct.replace(/^\,+/g, ''));
        }
    });
});
</script>
@stop
