@extends('layouts.master', ['title' => 'Chat - Applications', 'footer' => false, 'workspaceClasses' => 'pb-32'])



@section('workspace')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>Service</h1>
        <ul>
            <li><a href="#no-link">Service</a></li>
            <li class="divider la la-arrow-right"></li>
            <li><a href="#no-link">Create</a></li>
        </ul>
    </section>

    <div class="grid gap-5">
        <div class="flex flex-col gap-y-5">
            <form action="{{route('service.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="card p-5">
                    <div class="mt-5">
                        <label class="label block mb-2">Title</label>
                        <input type="text" id="input" class="form-control" name="title" value="{{ @old('title')}}" placeholder="Enter title here">
                        @error('title')
                            	<span class="error text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Icon</label>
                        <input type="text" id="input" class="form-control" name="icon" value="{{ @old('icon')}}" placeholder="Enter button link here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Image</label>
                        <input type="file" id="image" class="form-control" name="image">
                        @error('image')
                            	<span class="error text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Description</label>
                        <textarea type="text" class="form-control" rows="5" name="description" value="">{{ @old('description')}}</textarea>
                        @error('description')
                            	<span class="error text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Status</label>
                        <input type="radio" name="status" value="1" checked><span>Active</span>
                        <input type="radio" name="status" value="0"><span>Inactive</span>
                    </div>
                    <div class="mt-5">
                        <button type="submit" class="bg-blue-500 text-white hover:text-white font-bold py-1 px-4 rounded-full">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection