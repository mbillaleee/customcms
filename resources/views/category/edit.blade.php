@extends('layouts.master', ['title' => 'Chat - Applications', 'footer' => false, 'workspaceClasses' => 'pb-32'])



@section('workspace')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>Category</h1>
        <ul>
            <li><a href="#no-link">Category</a></li>
            <li class="divider la la-arrow-right"></li>
            <li><a href="#no-link">Update</a></li>
        </ul>
    </section>

    <div class="grid gap-5">
        <div class="flex flex-col gap-y-5">
            <form action="{{route('category.update', $category->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="card p-5">
                    <div class="mt-5">
                        <label class="label block mb-2">Name</label>
                        <input type="text" id="input" class="form-control" name="name" value="{{ $category->name }}" placeholder="Enter text here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Category Type</label>
                        <select class="form-control" id="category_type" name="category_type">
                            <option value="" disabled>Please Select</option>
                            <option value="1">Blog</option>
                            <option value="2">Photo Gallery</option>
                        </select>
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Image</label>
                        <input type="file" id="input" class="form-control" name="image">
                        @if($category->image != null)<img src="{{asset('uploads/category/'.$category->image)}}" width="80" alt="{{$category->name}}">@endif
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Descrition</label>
                        <textarea type="text" class="form-control" rows="5" name="desc" value="">{{ $category->desc }}</textarea>
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Status</label>
                        <input type="radio" name="status" value="1" {{ $category ? $category->status == 1 ? "checked" : "": ""   }}><span>Active</span>
                        <input type="radio" name="status" value="0" {{ $category ? $category->status == 0 ? "checked" : "": ""   }}><span>Inactive</span>
                    </div>
                    <div class="mt-5">
                        <button type="submit" class="bg-blue-500 text-white hover:text-white font-bold py-1 px-4 rounded-full">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection