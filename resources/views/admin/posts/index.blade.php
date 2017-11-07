@extends('admin.layouts.master')
@section('head.title', 'Admin Dashboard')
@section('content')
<div class="col-md-9">
  <!-- Website Overview -->
  <div class="panel panel-default">
    <div class="panel-heading main-color-bg">
      <h3 class="panel-title">Posts (Total: {!! $posts->count() !!} posts)</h3>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-12">
         {{--   <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
            <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
            <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
            <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
          </ul>

          <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
              <h3>Show</h3>
              <ul>
                <li><input type="checkbox" name="title">Title</li>
                <li><input type="checkbox" name="slug">Slug</li>
                <li><input type="checkbox" name="body">Body</li>
                <li><input type="checkbox" name="image">Image</li>
                <li><input type="checkbox" name="is_published">Published</li>
                <li><input type="checkbox" name="category">Category</li>
                <li><input type="checkbox" name="created_at">Created At</li>
                <li><input type="checkbox" name="updated_at">Updated At</li>
              </ul>
            </div>
            <div id="menu1" class="tab-pane fade">
              <h3>Menu 1</h3>
              <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div id="menu2" class="tab-pane fade">
              <h3>Menu 2</h3>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
            </div>
            <div id="menu3" class="tab-pane fade">
              <h3>Menu 3</h3>
              <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            </div>
          </div> --}}    
          <div class="clearfix"></div>
          {{-- <hr> --}}
          <form id="search_frm">
            <div class="form-group">
              <input type="text" class="form-control"  placeholder="Filter Posts..." id="search_post">
            </div>
          </form>
        </div>
      </div>
      <br>
      <table class="table table-striped table-hover">
        <thead>
          <th><input type="checkbox"></th>
          <th>#</th>
          <th>Title</th>
          <th>Published</th>
          <th>Created</th>
          <th>Action</th>
        </thead>
        <tbody>
          @foreach($posts as $post)
            <tr>
              <td><input type="checkbox" class="check_posts[]"></td>
              <td>{!! $post->id !!}</td>
              <td>{!! substr($post->title, 0, 20) !!}{!! strlen($post->title) > 20 ? '...' : '' !!}</td>
              <td>
                @if($post->is_published == 1)
                <span class="label label-success">Published</span>
                @else 
                <span class="label label-warning">Draft</span>
                @endif
              </td>
              <td>Dec 14, 2016</td>
              <td>
                <a class="btn btn-info btn-xs" href="#"><i class="fa fa-pencil"></i> Edit</a> 
                <a class="btn btn-danger btn-xs" href="#"><i class="fa fa-trash-o"></i> Delete</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@stop
@section('body.js')
{{-- <script>
  $(document).ready(function() {
    $("#search_post").keyup(function() {
      var search_post = $(this).val();
        if(search_post == '') {
            $("#result_posts").css('display', 'block');
        } else {
            $.ajax({
              url: 'search_posts',
              type: 'POST',
              dataType: 'JSON',
              data: {'search_post': search_post},
              success: function(data) {
                $("#result_posts").html(data);
              }
            });
        }

    });
  });
</script> --}}
@stop