@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row"><h1>Edit Profile</h1></div>

                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label ">Title</label>

                        <input id="title" type="text"
                        class="form-control{{ $errors->has('title') ? 'is-invalid' : '' }}" 
                        name="title" 
                        value = "{{ old('title') ?? $user->profile->title }}" 
                        autocomplete="title" autofocus>       
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label ">Description</label>

                        <input id="description" type="text"
                        class="form-control{{ $errors->has('description') ? 'is-invalid' : '' }}" 
                        name="description" 
                        value = "{{ old('description') ?? $user->profile->description }}"
                        autocomplete="description" autofocus>       
                </div>

                <div class="form-group row">
                    <label for="url" class="col-md-4 col-form-label ">URL</label>

                        <input id="url" type="text"
                        class="form-control{{ $errors->has('url') ? 'is-invalid' : '' }}" 
                        name="url" 
                        value = "{{ old('url') ?? $user->profile->url }}" 
                        autocomplete="url" autofocus>       
                </div>
            

                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Profile Image</label>
                    <input type="file" class="form-control-file" id='image' name='image' >  
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary" type="submit">Update Profile</button>
                </div>
            </div>
        </div>
 
    </form>
</div>  
@endsection
