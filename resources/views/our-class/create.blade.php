@extends('layouts.master', ['title' => 'Chat - Applications', 'footer' => false, 'workspaceClasses' => 'pb-32'])



@section('workspace')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>Slider</h1>
        <ul>
            <li><a href="#no-link">Slider</a></li>
            <li class="divider la la-arrow-right"></li>
            <li><a href="#no-link">Create</a></li>
        </ul>
    </section>

    <div class="grid gap-5">
        <div class="flex flex-col gap-y-5">
            <form action="{{route('ourclass.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="card p-5">
                    <div class="mt-5">
                        <label class="label block mb-2">Title</label>
                        <input type="text" id="input" class="form-control" name="title" placeholder="Enter text here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Teacher</label>
                        <select class="form-control" id="teacher_id" name="teacher_id">
                            <option value="">Please Select</option>
                            @foreach($teachers as $teacher)
                            <option value="{{ $teacher->id}}">{{ $teacher->name}}</option>
                            @endforeach  
                        </select>
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Class Duration</label>
                        <div class="custom-select">
                            <select class="form-control" name="class_duration">
                                <option>Select</option>
                                <option value="1">9AM - 3PM</option>
                                <option value="2">9AM - 3PM</option>
                                <option value="3">8AM - 2PM</option>
                            </select>
                        <div class="custom-select-icon la la-caret-down"></div>
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Transport</label>
                        <div class="custom-select">
                            <select class="form-control" name="transport">
                                <option>Select</option>
                                <option value="1">Available</option>
                                <option value="2">Unavailable</option>
                            </select>
                        <div class="custom-select-icon la la-caret-down"></div>
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Morning Food</label>
                        <div class="custom-select">
                            <select class="form-control" name="morning_food">
                                <option>Select</option>
                                <option value="1">Include</option>
                                <option value="2">Not Include</option>
                            </select>
                        <div class="custom-select-icon la la-caret-down"></div>
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Class Starff</label>
                        <input type="text" id="input" class="form-control" name="class_starff" placeholder="Enter class starff here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Class Size</label>
                        <input type="text" id="input" class="form-control" name="class_size" placeholder="Enter class size">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Years Old</label>
                        <input type="text" id="input" class="form-control" name="age_range" placeholder="Enter text here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Start Date</label>
                        <input type="date" id="input" class="form-control" name="class_date" placeholder="Enter text here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Image</label>
                        <input type="file" id="image" class="form-control" name="image">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Content</label>
                        <textarea type="text" class="form-control" rows="5" name="content"></textarea>
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Status</label>
                        <input type="radio" name="status" value="1"><span>Active</span>
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