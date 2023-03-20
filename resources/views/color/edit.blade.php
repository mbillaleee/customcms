@extends('layouts.master', ['title' => 'Chat - Applications', 'footer' => false, 'workspaceClasses' => 'pb-32'])



@section('workspace')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>Color</h1>
        <ul>
            <li><a href="#no-link">Color</a></li>
            <li class="divider la la-arrow-right"></li>
            <li><a href="#no-link">Update</a></li>
        </ul>
    </section>

    <div class="grid gap-5">
        <div class="flex flex-col gap-y-5">
            <form action="{{ route('color.update', $color->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="card p-5">
                    <div class="mt-5">
                        <label class="label block mb-2">Section</label>
                        <input type="text" id="input" class="form-control" name="section_name" value="{{ $color->section_name }}" placeholder="Enter section_name here" readonly>
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Color</label>
                        <input type="text" id="input" class="form-control" name="color" value="{{ $color->color }}" placeholder="Enter color here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Background</label>
                        <input type="text" id="input" class="form-control" name="background_color" value="{{ $color->background_color }}" placeholder="Enter background color here">
                    </div>
                    <div class="mt-5">
                        <button type="submit" class="bg-blue-500 text-white hover:text-white font-bold py-1 px-4 rounded-full">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection