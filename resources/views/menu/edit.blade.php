@extends('layouts.master', ['title' => 'Chat - Applications', 'footer' => false, 'workspaceClasses' => 'pb-32'])



@section('workspace')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>Menu</h1>
        <ul>
            <li><a href="#no-link">Menu</a></li>
            <li class="divider la la-arrow-right"></li>
            <li><a href="#no-link">Update</a></li>
        </ul>
    </section>

    <div class="grid gap-5">
        <div class="flex flex-col gap-y-5">
            <form action="{{route('menu.update', $menu->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="card p-5">
                    <div class="mt-5">
                        <label class="label block mb-2">Nmae</label>
                        <input type="text" id="input" class="form-control" name="name" value="{{ $menu->name }}" placeholder="Enter text here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Position</label>
                        <textarea type="text" class="form-control" rows="5" name="position" value="">{{ $menu->position }}</textarea>
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Status</label>
                        <input type="radio" name="status" value="1" {{ $menu ? $menu->status == 1 ? "checked" : "": ""   }}><span>Active</span>
                        <input type="radio" name="status" value="0" {{ $menu ? $menu->status == 0 ? "checked" : "": ""   }}><span>Inactive</span>
                    </div>
                    <div class="mt-5">
                        <button type="submit" class="bg-blue-500 text-white hover:text-white font-bold py-1 px-4 rounded-full">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection