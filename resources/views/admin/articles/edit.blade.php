@extends('template.admin')

@section('admin-content')

<div class="row">
    <div class="col">
        <h2>Edit Article</h2>
    </div>
</div>
<hr>

<div class="row">
	<div class="col-lg-6">

        <form method="POST" action="{{ route('article.update', [$article->id]) }}" enctype="multipart/form-data" class="row">
            {{-- {!! csrf_field() !!} --}}   <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group col-lg-3">
                <label for="details">Add Image</label>
                <input type="file" class="form-control" name="image">
            </div>

            <div class="form-group col-lg-3">
                <label for="date">Date</label>
                <input type="date" class="form-control" name="date"  value="{{ $article->date }}">
                <span style="color: #FC1838">{{$errors->first('date')}}</span>
            </div>

            <div class="form-group col-lg-6">
                <label for="author">Author Name</label>
                <input type="text" class="form-control" name="author"  value="{{ $article->author }}">
                <span style="color: #FC1838">{{$errors->first('author')}}</span>
            </div>


            <div class="form-group col-lg-6">
                <label for="tag">Article Tag</label>
                <input type="text" class="form-control" name="tag" placeholder="Enter Custom Tag" value="{{ $article->tag }}">
                <span style="color: #FC1838">{{$errors->first('tag')}}</span>
            </div>

            <div class="form-group col-lg-6">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Enter Title" value="{{ $article->title }}">
                <span style="color: #FC1838">{{$errors->first('title')}}</span>
            </div>



			<div class="form-group col-lg-12">
				<label for="description">Content</label>
				<textarea name="description" class="form-control" id="description">{!! $article->description !!}</textarea>
			</div>

            <div class="col-lg-4"> 
                <input type="submit" class="btn btn-dark form-control" onclick="this.disabled=true;this.value='Submitted, please wait...';this.form.submit();" />
            </div>

        </form>
	</div>
</div>


@endsection