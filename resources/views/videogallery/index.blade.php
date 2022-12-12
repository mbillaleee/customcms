@extends('layouts.master', ['title' => 'Chat - Applications', 'footer' => false, 'workspaceClasses' => 'pb-32'])

@section('workspace')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>videogallery</h1>
        <ul>
            <li><a href="#no-link">Video Gallery</a></li>
        </ul>
    </section>

    <div class="grid grid-rows-1 grid-flow-col gap-4">
        <!-- Striped -->
        <div class="flex flex-col gap-y-5">
            <div class="card p-5">
            <a class="btn btn_primary float-end" href="{{ route('videogallery.create') }}"> Add Video</a>
                <table class="table table_striped w-full mt-3">
                    <thead>
                        <tr>
                            <th class="ltr:text-left rtl:text-right uppercase">#</th>
                            <th class="ltr:text-left rtl:text-right uppercase">Code</th>
                            <th class="ltr:text-left rtl:text-right uppercase">Description</th>
                            <th class="ltr:text-left rtl:text-right uppercase">Image</th>
                            <th class="ltr:text-left rtl:text-right uppercase">Type</th>
                            <th class="ltr:text-left rtl:text-right uppercase">Status</th>
                            <th class="ltr:text-left rtl:text-right uppercase">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($video_galleries as $videoGallery)
                        <tr>
                            <td>1</td>
                            <td>{{ $videoGallery->code }}</td>
                            <td>{{ $videoGallery->desc }}</td>
                            <td>@if($videoGallery->image != null)<img src="{{asset('uploads/videogallery/'.$videoGallery->image)}}" width="80" alt="$videoGallery->title">@endif</td>
                            <td>{!! !!$videoGallery->type ? '<span class="badge bg-success">Youtube</span>': '<span class="badge bg-primary">Vimeo</span>' !!}</td>
                            <td>{!! !!$videoGallery->status ? '<span class="badge bg-success">Active</span>': '<span class="badge bg-danger">Inactive</span>' !!}</td>
                            <td class="flex">
                            <a class="bg-blue-500 text-white hover:text-white font-bold py-1 px-4 rounded-full" href="{{ route('videogallery.edit',$videoGallery->id) }}">Edit</a>
                                <form class="" method="POST" action="{{route('videogallery.destroy', $videoGallery->id)}}">

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