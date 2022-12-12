@extends('layouts.master', ['title' => 'Chat - Applications', 'footer' => false, 'workspaceClasses' => 'pb-32'])

@section('workspace')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>Category</h1>
        <ul>
            <li><a href="#no-link">Category</a></li>
            <li class="divider la la-arrow-right"></li>
            <li><a href="#no-link">List</a></li>
        </ul>
    </section>

    <div class="grid grid-rows-1 grid-flow-col gap-4">
        <!-- Striped -->
        <div class="flex flex-col gap-y-5">
            <div class="card p-5">
            <a class="btn btn_primary float-end" href="{{ route('category.create') }}"> Add Category</a>
                <table class="table table_striped w-full mt-3">
                    <thead>
                        <tr>
                            <th class="ltr:text-left rtl:text-right uppercase">#</th>
                            <th class="ltr:text-left rtl:text-right uppercase">Name</th>
<<<<<<< HEAD
                            <th class="ltr:text-left rtl:text-right uppercase">Image</th>
                            <th class="ltr:text-left rtl:text-right uppercase">Desc</th>
=======
                            <th class="ltr:text-left rtl:text-right uppercase">Desc</th>
                            <th class="ltr:text-left rtl:text-right uppercase">Image</th>
>>>>>>> c18ccb3533e89285fb6a3bc866c7d24062069254
                            <th class="ltr:text-left rtl:text-right uppercase">Status</th>
                            <th class="ltr:text-left rtl:text-right uppercase">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>1</td>
                            <td>{{ $category->name }}</td>
<<<<<<< HEAD
                            <td>@if($category->image != null)<img src="{{asset('uploads/category/'.$category->image)}}" width="80" alt="$category->name">@endif</td>
                            <td>{!! !!$category->status ? '<span class="badge bg-success">Active</span>': '<span
                                                class="badge bg-danger">Inactive</span>' !!}</td>
                            <td>{{ $category->desc }}</td>
=======
                            <td>{{ $category->desc }}</td>
                            <td>@if($category->image != null)<img src="{{asset('uploads/category/'.$category->image)}}" width="80" alt="$category->name">@endif</td>
                            <td>{!! !!$category->status ? '<span class="badge bg-success">Active</span>': '<span
                                                class="badge bg-danger">Inactive</span>' !!}</td>
>>>>>>> c18ccb3533e89285fb6a3bc866c7d24062069254
                            <td class="flex">
                            <a class="bg-blue-500 text-white hover:text-white font-bold py-1 px-4 rounded-full" href="{{ route('category.edit',$category->id) }}">Edit</a>
                                <form class="" method="POST" action="{{route('category.destroy', $category->id)}}">

                                    @method('delete')

                                    @csrf

                                    <button class="bg-red-500 text-white hover:text-white font-bold py-1 px-4 rounded-full" type="submit">Delete</button>

                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Striped End -->
    </div>

@endsection