@extends('layouts.master', ['title' => 'Chat - Applications', 'footer' => false, 'workspaceClasses' => 'pb-32'])



@section('workspace')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>Widget</h1>
        <ul>
            <li><a href="#no-link">Widget</a></li>
            <li class="divider la la-arrow-right"></li>
            <li><a href="#no-link">Create</a></li>
        </ul>
    </section>

    <div class="grid gap-5">
        <div class="flex flex-col gap-y-5">
            <form action="{{route('widgets.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="card p-5">
                    <div class="mt-5">
                        <label class="label block mb-2">Title</label>
                        <input type="text" id="input" class="form-control" name="title" placeholder="Enter text here">
                    </div>
                    <!-- <div class="mt-5">
                        <label class="label block mb-2">Date and Time</label>
                        <input type="datetime-local" id="input" class="form-control" name="date_time">
                    </div> -->
                    <div class="mt-5">
                        <label class="label block mb-2">Position</label>
                        <div class="custom-select">
                            <select class="form-control" name="position">
                                <option>Select</option>
                                <option value="1">Position 1</option>
                                <option value="2">Position 2</option>
                                <option value="3">Position 3</option>
                                <option value="4">Position 4</option>
                                <option value="5">Position 5</option>
                                <option value="6">Position 6</option>
                                <option value="7">Position 7</option>
                                <option value="7">Position 8</option>
                                <option value="7">Position 9</option>
                                <option value="7">Position 10</option>
                            </select>
                        <div class="custom-select-icon la la-caret-down"></div>
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