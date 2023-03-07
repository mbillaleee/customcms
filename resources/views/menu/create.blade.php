@extends('layouts.master', ['title' => 'Chat - Applications', 'footer' => false, 'workspaceClasses' => 'pb-32'])



@section('workspace')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>Menu</h1>
        <ul>
            <li><a href="#no-link">Menu</a></li>
            <li class="divider la la-arrow-right"></li>
            <li><a href="#no-link">Create</a></li>
        </ul>
    </section>

    <div class="grid gap-5">
        <div class="flex flex-col gap-y-5">
            <form action="{{route('menu.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="card p-5">
                    <div class="mt-5">
                        <label class="label block mb-2">Title</label>
                        <input type="text" id="input" class="form-control" name="title" placeholder="Enter text here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Order</label>
                        <input type="text" id="input" class="form-control" name="order" placeholder="Enter text here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Target</label>
                        <input type="text" id="input" class="form-control" name="target" placeholder="Enter target here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Url</label>
                        <input type="text" id="input" class="form-control" name="url" placeholder="Enter url here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Menu</label>
                        <select class="form-control" name="parent_id" id="parent_id">
                            <option value="">Select one</option>
                            @foreach($menu as $item)
                            <option value="{{$item->id}}">{{$item->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Template </label>
                        <select class="form-control" name="template_id" id="template_id">
                            <option value="">Select one</option>
                            @foreach($Template1 as $item)
                            <option value="{{$item->id}}">{{$item->title}}</option>
                            @endforeach
                        </select>
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