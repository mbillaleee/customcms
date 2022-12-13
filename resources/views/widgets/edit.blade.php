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
            <form action="{{route('widgets.update', $widgets->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="card p-5">
                    <div class="mt-5">
                        <label class="label block mb-2">Title</label>
                        <input type="text" id="input" class="form-control" name="title" value="{{ $widgets->title }}" placeholder="Enter text here">
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
                                <option value="1" {{ $widgets ? $widgets->position == 1 ? "selected" : "": ""   }}>Position 1</option>
                                <option value="2" {{ $widgets ? $widgets->position == 2 ? "selected" : "": ""   }}>Position 2</option>
                                <option value="3" {{ $widgets ? $widgets->position == 3 ? "selected" : "": ""   }}>Position 3</option>
                                <option value="4" {{ $widgets ? $widgets->position == 4 ? "selected" : "": ""   }}>Position 4</option>
                                <option value="5" {{ $widgets ? $widgets->position == 5 ? "selected" : "": ""   }}>Position 5</option>
                                <option value="6" {{ $widgets ? $widgets->position == 6 ? "selected" : "": ""   }}>Position 6</option>
                                <option value="7" {{ $widgets ? $widgets->position == 7 ? "selected" : "": ""   }}>Position 7</option>
                                <option value="8" {{ $widgets ? $widgets->position == 8 ? "selected" : "": ""   }}>Position 8</option>
                                <option value="9" {{ $widgets ? $widgets->position == 9 ? "selected" : "": ""   }}>Position 9</option>
                                <option value="10" {{ $widgets ? $widgets->position == 10 ? "selected" : "": ""   }}>Position 10</option>
                            </select>
                        <div class="custom-select-icon la la-caret-down"></div>
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Content</label>
                        <textarea type="text" class="form-control" rows="5" name="content">{{ $widgets->content }}</textarea>
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Status</label>
                        <input type="radio" name="status" value="1" {{ $widgets ? $widgets->status == 1 ? "checked" : "": ""   }}><span>Active</span>
                        <input type="radio" name="status" value="0" {{ $widgets ? $widgets->status == 0 ? "checked" : "": ""   }}><span>Inactive</span>
                    </div>
                    <div class="mt-5">
                        <button type="submit" class="bg-blue-500 text-white hover:text-white font-bold py-1 px-4 rounded-full">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection