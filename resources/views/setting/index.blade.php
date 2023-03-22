@extends('layouts.master', ['title' => 'Chat - Applications', 'footer' => false, 'workspaceClasses' => 'pb-32'])



@section('workspace')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>Setting</h1>
        <ul>
            <li><a href="#no-link">Setting</a></li>
            <li class="divider la la-arrow-right"></li>
            <li><a href="#no-link">Update</a></li>
        </ul>
    </section>

    <div class="grid gap-5">
        <div class="flex flex-col gap-y-5">
            <form action="{{route('setting.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="card p-5">
                <div class="mt-5">
                        <label class="label block mb-2">Title</label>
                        <input type="text" id="input" class="form-control" name="title" value="{{ $setting[0]->title ?? '' }}" placeholder="Enter title here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Domain</label>
                        <input type="text" id="input" class="form-control" name="domain" value="{{ $setting[0]->domain }}" placeholder="Enter domain here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Address</label>
                        <input type="text" id="input" class="form-control" name="address" value="{{ $setting[0]->address ?? '' }}" placeholder="Enter address here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">mobile</label>
                        <input type="text" id="input" class="form-control" name="mobile" value="{{ $setting[0]->mobile ?? '' }}" placeholder="Enter mobile here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">email</label>
                        <input type="text" id="input" class="form-control" name="email" value="{{ $setting[0]->email ?? '' }}" placeholder="Enter email here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Facebook </label>
                        <input type="text" id="input" class="form-control" name="facebook_url" value="{{ $setting[0]->facebook_url ?? '' }}" placeholder="Enter address here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Twitter </label>
                        <input type="text" id="input" class="form-control" name="twitter_url" value="{{ $setting[0]->twitter_url ?? '' }}" placeholder="Enter address here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Youtube</label>
                        <input type="text" id="input" class="form-control" name="youtube_url" value="{{ $setting[0]->youtube_url ?? '' }}" placeholder="Enter address here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">copy right</label>
                        <input type="text" id="input" class="form-control" name="copy_right" value="{{ $setting[0]->copy_right ?? '' }}" placeholder="Enter copy right here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Our mission</label>
                        <textarea name="mission" id="mission" class="form-control" cols="30" rows="10">{{ $setting[0]->mission ?? '' }}</textarea>
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Our vission</label>
                        <textarea name="vission" id="ckeditor" class="form-control" cols="30" rows="10">{{ $setting[0]->vission ?? '' }}</textarea>
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Values</label>
                        <textarea name="values" id="values" class="form-control" cols="30" rows="10">{{ $setting[0]->values ?? '' }}</textarea>
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Donation Content</label>
                        <textarea name="donation" class="form-control editor" cols="30" rows="10">{{ $setting[0]->donation ?? '' }}</textarea>
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Blog show</label>
                        <select class="form-control" name="blog_show" id="">
                            <option value="0" {{ $setting[0] ? $setting[0]->blog_show == 0 ? "selected" : "": ""   }}>Inactive</option>
                            <option value="1" {{ $setting[0] ? $setting[0]->blog_show == 1 ? "selected" : "": ""   }}>Grid View</option>
                            <option value="2"  {{ $setting[0] ? $setting[0]->blog_show == 2 ? "selected" : "": ""   }}>List View</option>
                        </select>
                    </div>
                    <div class="mt-5">
                        <button type="submit" class="bg-blue-500 text-white hover:text-white font-bold py-1 px-4 rounded-full">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection