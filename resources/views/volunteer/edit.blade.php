@extends('layouts.master', ['title' => 'Chat - Applications', 'footer' => false, 'workspaceClasses' => 'pb-32'])



@section('workspace')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>Volunteer</h1>
        <ul>
            <li><a href="#no-link">Volunteer</a></li>
            <li class="divider la la-arrow-right"></li>
            <li><a href="#no-link">Update</a></li>
        </ul>
    </section>

    <div class="grid gap-5">
        <div class="flex flex-col gap-y-5">
            <form action="{{route('volunteer.update', $volunteer->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="card p-5">
                    <div class="mt-5">
                        <label class="label block mb-2">name</label>
                        <input type="text" id="input" class="form-control" name="name" value="{{ $volunteer->name }}" placeholder="Enter name">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">email</label>
                        <input type="text" id="input" class="form-control" name="email" value="{{ $volunteer->email }}" placeholder="Enter email">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">phone</label>
                        <input type="text" id="input" class="form-control" name="phone" value="{{ $volunteer->phone }}" placeholder="Enter phone">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Date of birth</label>
                        <input type="date" id="input" class="form-control" name="date_of_birth" value="{{ $volunteer->date_of_birth }}">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">address</label>
                        <input type="text" id="input" class="form-control" name="address" value="{{ $volunteer->address }}" placeholder="Enter address">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">occupation</label>
                        <input type="text" id="input" class="form-control" name="occupation" value="{{ $volunteer->occupation }}" placeholder="Enter occupation">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Area of work</label>
                        <input type="text" id="input" class="form-control" name="area_of_work" value="{{ $volunteer->area_of_work }}" placeholder="Enter text here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Image</label>
                        <input type="file" id="input" class="form-control" name="image">
                        @if($volunteer->image != null)<img src="{{asset('uploads/volunteer/'.$volunteer->image)}}" width="80" alt="{{$volunteer->title}}">@endif
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Message</label>
                        <textarea type="text" class="form-control" rows="5" name="message">{{ $volunteer->message }}</textarea>
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Status</label>
                        <input type="radio" name="status" value="1" {{ $volunteer ? $volunteer->status == 1 ? "checked" : "": ""   }}><span>Approved</span>
                        <input type="radio" name="status" value="0" {{ $volunteer ? $volunteer->status == 0 ? "checked" : "": ""   }}><span>Pending</span>
                    </div>
                    <div class="mt-5">
                        <button type="submit" class="bg-blue-500 text-white hover:text-white font-bold py-1 px-4 rounded-full">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection