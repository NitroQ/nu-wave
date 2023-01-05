@extends('template.admin')

@section('admin-content')

<div class="row">
    <div class="col">
        <h2>Innovators</h2>
    </div>
</div>
<hr>
@if(Session::has('flash_message'))
<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
{{Session::get('flash_message')}}
</div>
@endif

<div class="row">
    <div class="col col-lg-3">
        <a href="{{ route('admin.innovator.create') }}"><button class="btn btn-primary w-100"><i class="fas fa-plus-circle"></i> Add an Innovator</button></a>
    </div>
</div>
<br>

<div class="row">
	<div class="col-lg-12">

        <table class="table table-sm">
            <thead class="thead-cust-dark">
                <tr>
                    <th></th>
                    <th scope="col">Name</th>
                    <th scope="col">Tag</th>
                    <th scope="col">Date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($innovator as $x)
                <tr class="border-bottom">
                    <td><img src="/uploads/innovators/{{ $x->image or 'placeholder.png' }}" width="30px" height="30px" style="object-fit: cover"></td>
                    <td>{{ $x->iname }}</td>
                    <td>{{ $x->tag }}</td>
                    <td>{{ $x->created_at->format('F j, Y') }} {{ $x->created_at->format('g:i A') }}</td>
                    <td>
                        @if ($x->active == 1)
                            <a href="{{ route('innovator.set-inactive' , [ $x->id ]) }}"><button type="button" class="btn btn-sm btn-primary">Set Inactive</button></a>&nbsp;
                        @else
                            <a href="{{ route('innovator.set-active' , [ $x->id ]) }}"><button type="button" class="btn btn-sm btn-outline-primary">Set Active</button></a>&nbsp;
                         @endif
                    </td>
                    <td>
                        <div class="btn-group" role="group" aria-label="">
                            <a href="{{ route('admin.innovator.edit' , [ $x->id ]) }}"><button type="button" class="btn btn-sm btn-secondary">Edit</button></a>&nbsp;
                            <a href="{{ route('innovator.delete' , [ $x->id ]) }}"><button type="button" class="btn btn-sm btn-danger">Remove</button></a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $innovator->links() }}
	</div>
</div>
@endsection