@extends('layouts.master', ['title' => 'Chat - Applications', 'footer' => false, 'workspaceClasses' => 'pb-32'])



@section('workspace')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>News Letter</h1>
        <ul>
            <li><a href="#no-link">News Letter</a></li>
            <li class="divider la la-arrow-right"></li>
            <li><a href="#no-link">Update</a></li>
        </ul>
    </section>

    <div class="grid gap-5">
        <div class="flex flex-col gap-y-5">
            <form action="{{route('newsletter.update', $newsletter->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="card p-5">
                    <div class="mt-5">
                        <label class="label block mb-2">Name</label>
                        <input type="text" id="input" class="form-control" name="title" value="{{ $newsletter->title }}" placeholder="Enter text here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Image</label>
                        <input type="file" id="input" class="form-control" name="image">
                        @if($newsletter->image != null)<img src="{{asset('uploads/newsletter/'.$newsletter->image)}}" width="80" alt="{{$newsletter->name}}">@endif
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Publish Date</label>
                        <input type="text" id="input" class="form-control" name="pub_date" value="{{ $newsletter->pub_date }}" placeholder="Enter text here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Content</label>
                        <textarea type="text" class="form-control" rows="5" name="content" value="">{{ $newsletter->content }}</textarea>
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Status</label>
                        <input type="radio" name="status" value="1" {{ $newsletter ? $newsletter->status == 1 ? "checked" : "": ""   }}><span>Active</span>
                        <input type="radio" name="status" value="0" {{ $newsletter ? $newsletter->status == 0 ? "checked" : "": ""   }}><span>Inactive</span>
                    </div>
                    <div class="mt-5">
                        <button type="submit" class="bg-blue-500 text-white hover:text-white font-bold py-1 px-4 rounded-full">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection