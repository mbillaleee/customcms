@extends('layouts.master', ['title' => 'Chat - Applications', 'footer' => false, 'workspaceClasses' => 'pb-32'])



@section('workspace')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>Product</h1>
        <ul>
            <li><a href="#no-link">Product</a></li>
            <li class="divider la la-arrow-right"></li>
            <li><a href="#no-link">Update</a></li>
        </ul>
    </section>

    <div class="grid gap-5">
        <div class="flex flex-col gap-y-5">
            <form action="{{route('template1.update', $template1->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="card p-5">
                    <div class="mt-5">
                        <label class="label block mb-2">Title</label>
                        <input type="text" id="input" class="form-control" name="title" value="{{ $template1->title }}" placeholder="Enter text here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Thumbnail</label>
                        <input type="file" id="input" class="form-control" name="thumb">
                        @if($template1->thumb != null)<img src="{{asset('uploads/template1/'.$template1->thumb)}}" width="80" alt="{{$template1->title}}">@endif
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Content</label>
                        <textarea type="text" class="form-control" rows="5" name="content">{{ $template1->content }}</textarea>
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Status</label>
                        <input type="radio" name="status" value="1" {{ $template1 ? $template1->status == 1 ? "checked" : "": ""   }}><span>Active</span>
                        <input type="radio" name="status" value="0" {{ $template1 ? $template1->status == 0 ? "checked" : "": ""   }}><span>Inactive</span>
                    </div>
                    <div class="mt-5">
                        <button type="submit" class="bg-blue-500 text-white hover:text-white font-bold py-1 px-4 rounded-full">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection