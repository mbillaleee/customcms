@extends('layouts.master', ['title' => 'Chat - Applications', 'footer' => false, 'workspaceClasses' => 'pb-32'])

@section('workspace') 

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>Service</h1>
        <ul>
            <li><a href="#no-link">Service</a></li>
            <li class="divider la la-arrow-right"></li>
            <li><a href="#no-link">List</a></li>
        </ul>
    </section>

    <div class="grid grid-rows-1 grid-flow-col gap-4">
        <!-- Striped -->
        <div class="flex flex-col gap-y-5">
            <div class="card p-5">
            <a class="btn btn_primary float-end" href="{{ route('service.create') }}"> Add Service</a>
                <table class="table table_striped w-full mt-3">
                    <thead>
                        <tr>
                            <th class="ltr:text-left rtl:text-right uppercase">#</th>
                            <th class="ltr:text-left rtl:text-right uppercase">Title</th>
                            <th class="ltr:text-left rtl:text-right uppercase">Description</th>
                            <th class="ltr:text-left rtl:text-right uppercase">Image</th>
                            <th class="ltr:text-left rtl:text-right uppercase">Status</th>
                            <th class="ltr:text-left rtl:text-right uppercase">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($service as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->description }}</td>
                            <td>@if($item->image != null)<img src="{{asset('uploads/service/'.$item->image)}}" width="80" alt="$item->name">@endif</td>
                            <td>{!! !!$item->status ? '<span class="badge bg-success">Active</span>': '<span
                                                class="badge bg-danger">Inactive</span>' !!}</td>
                            <td class="flex">
                            <a class="bg-blue-500 text-white hover:text-white font-bold py-1 px-4 rounded-full" href="{{ route('service.edit',$item->id) }}">Edit</a>
                                <form class="" method="POST" action="{{route('service.destroy', $item->id)}}">

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