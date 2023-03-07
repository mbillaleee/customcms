@extends('layouts.master', ['title' => 'Chat - Applications', 'footer' => false, 'workspaceClasses' => 'pb-32'])

@section('workspace')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>menu</h1>
        <ul>
            <li><a href="#no-link">menu</a></li>
            <li class="divider la la-arrow-right"></li>
            <li><a href="#no-link">List</a></li>
        </ul>
    </section>

    <div class="grid grid-rows-1 grid-flow-col gap-4">
        <!-- Striped -->
        <div class="flex flex-col gap-y-5">
            <div class="card p-5">
            <a class="btn btn_primary float-end" href="{{ route('menu.create') }}"> Add menu</a>
                <table class="table table_striped w-full mt-3">
                    <thead>
                        <tr>
                            <th class="ltr:text-left rtl:text-right uppercase">#</th>
                            <th class="ltr:text-left rtl:text-right uppercase">Title</th>
                            <th class="ltr:text-left rtl:text-right uppercase">Menu</th>
                            <th class="ltr:text-left rtl:text-right uppercase">Target</th>
                            <th class="ltr:text-left rtl:text-right uppercase">Template</th>
                            <th class="ltr:text-left rtl:text-right uppercase">Url</th>
                            <th class="ltr:text-left rtl:text-right uppercase">Status</th>
                            <th class="ltr:text-left rtl:text-right uppercase">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($menus as $index => $menu)
                        <tr>
                            <td>{{$index +1}}</td>
                            <td>{{ $menu->title }}</td>
                            <td>{{ $menu->parent_id }}</td>
                            <td>{{ $menu->target }}</td>
                            <td>{{ $menu->template_id }}</td>
                            <td>{{ $menu->url }}</td>
                            <td>{!! !!$menu->status ? '<span class="badge bg-success">Active</span>': '<span class="badge bg-danger">Inactive</span>' !!}</td>
                            <td class="flex">
                            <a class="bg-blue-500 text-white hover:text-white font-bold py-1 px-4 rounded-full" href="{{ route('menu.edit',$menu->id) }}">Edit</a>
                                <form class="" method="POST" action="{{route('menu.destroy', $menu->id)}}">

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
    <div class="grid grid-rows-1 grid-flow-col gap-4">
        <!-- Striped -->
        <div class="dd">
           
            <ol class="dd-list">
                @foreach($menus as $men)
                <li class="dd-item" data-id="{{$men->id}}">
                    <div class="dd-handle">{{$men->title}}</div>
                    <ol class="dd-list">
                        @foreach($men->childs as $sub_men)
                        <li class="dd-item" data-id="{{ $sub_men->id }}">
                            <div class="dd-handle">{{ $sub_men->title }}</div>
                        </li>
                        @endforeach
                    </ol>
                </li>
                @endforeach
            </ol>
        </div>
        <!-- Striped End -->
    </div>
    

@endsection


@push('js')

<script>
    
    $(document).ready(function(){

    $('.dd').nestable({ /* config options */ });
       
    });
</script>


@endpush