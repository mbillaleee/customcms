@extends('layouts.master', ['title' => 'Chat - Applications', 'footer' => false, 'workspaceClasses' => 'pb-32'])



@section('workspace')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>Event</h1>
        <ul>
            <li><a href="#no-link">Event</a></li>
            <li class="divider la la-arrow-right"></li>
            <li><a href="#no-link">Create</a></li>
        </ul>
    </section>

    <div class="grid gap-5">
        <div class="flex flex-col gap-y-5">
            <form action="{{route('event.update', $event->id )}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="card p-5">
                    <div class="mt-5">
                        <label class="label block mb-2">Title</label>
                        <input type="text" id="input" class="form-control" name="title" value="{{ $event->title }}" placeholder="Enter text here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Image</label>
                        <input type="file" id="input" class="form-control" name="image">
                        @if($event->image != null)<img src="{{asset('uploads/eventimage/'.$event->image)}}" width="80" alt="{{$event->title}}">@endif
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Document</label>
                        <input type="file" id="input" class="form-control" name="document">
                        @if($event->document != null)<a href="{{asset('uploads/eventdocument/'.$event->document)}}" download="PDF"><i class="fa fa-file-pdf-o" style="font-size:30px;color:red"></i></a>@endif
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Date and Time</label>
                        <input type="datetime-local" id="input" class="form-control" name="date_time" value="{{ $event->date_time }}">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Descrition</label>
                        <textarea type="text" class="form-control" rows="5" name="desc">{{ $event->desc }}</textarea>
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Status</label>
                        <input type="radio" name="status" value="1" {{ $event ? $event->status == 1 ? "checked" : "": ""   }}><span>Active</span>
                        <input type="radio" name="status" value="0" {{ $event ? $event->status == 0 ? "checked" : "": ""   }}><span>Inactive</span>
                    </div>
                    <div class="mt-5">
                        <button type="submit" class="bg-blue-500 text-white hover:text-white font-bold py-1 px-4 rounded-full">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection