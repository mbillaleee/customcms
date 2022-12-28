@extends('layouts.master', ['title' => 'Chat - Applications', 'footer' => false, 'workspaceClasses' => 'pb-32'])



@section('workspace')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>Our Class</h1>
        <ul>
            <li><a href="#no-link">Our Class</a></li>
            <li class="divider la la-arrow-right"></li>
            <li><a href="#no-link">Update</a></li>
        </ul>
    </section>

    <div class="grid gap-5">
        <div class="flex flex-col gap-y-5">
            <form action="{{route('ourclass.update', $ourClass->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="card p-5">
                    <div class="mt-5">
                        <label class="label block mb-2">Title</label>
                        <input type="text" id="input" class="form-control" name="title" value="{{ $ourClass->title }}" placeholder="Enter text here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Class Size</label>
                        <input type="text" id="input" class="form-control" name="class_size" value="{{ $ourClass->class_size }}" placeholder="Enter text here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Age Range</label>
                        <input type="text" id="input" class="form-control" name="age_range" value="{{ $ourClass->age_range }}" placeholder="Enter text here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Class Date</label>
                        <input type="date" id="input" class="form-control" name="class_date" value="{{ $ourClass->class_date }}" placeholder="Enter text here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Image</label>
                        <input type="file" id="input" class="form-control" name="image">
                        @if($ourClass->image != null)<img src="{{asset('uploads/ourclass/'.$ourClass->image)}}" width="80" alt="{{$ourClass->name}}">@endif
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Content</label>
                        <textarea type="text" class="form-control" rows="5" name="content" value="">{{ $ourClass->content }}</textarea>
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Status</label>
                        <input type="radio" name="status" value="1" {{ $ourClass ? $ourClass->status == 1 ? "checked" : "": ""   }}><span>Active</span>
                        <input type="radio" name="status" value="0" {{ $ourClass ? $ourClass->status == 0 ? "checked" : "": ""   }}><span>Inactive</span>
                    </div>
                    <div class="mt-5">
                        <button type="submit" class="bg-blue-500 text-white hover:text-white font-bold py-1 px-4 rounded-full">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection