@extends('layouts.master', ['title' => 'Chat - Applications', 'footer' => false, 'workspaceClasses' => 'pb-32'])



@section('workspace')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>Team</h1>
        <ul>
            <li><a href="#no-link">Team</a></li>
            <li class="divider la la-arrow-right"></li>
            <li><a href="#no-link">Create</a></li>
        </ul>
    </section>

    <div class="grid gap-5">
        <div class="flex flex-col gap-y-5">
            <form action="{{route('team.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="card p-5">
                    <div class="mt-5">
                        <label class="label block mb-2">Name</label>
                        <input type="text" id="input" class="form-control" name="name" value="{{ @old('name')}}" placeholder="Enter name here">
                        @error('name')
                            	<span class="error text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">designation</label>
                        <input type="text" id="input" class="form-control" name="designation" value="{{ @old('designation')}}" placeholder="Enter designation here">
                        @error('designation')
                            	<span class="error text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Email</label>
                        <input type="text" id="input" class="form-control" name="email" value="{{ @old('email')}}" placeholder="Enter email here">
                        @error('email')
                            	<span class="error text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Phone</label>
                        <input type="text" id="input" class="form-control" name="phone" value="{{ @old('phone')}}" placeholder="Enter phone here">
                        @error('phone')
                            	<span class="error text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Facebook url</label>
                        <input type="text" id="input" class="form-control" name="facebook" value="{{ @old('facebook')}}" placeholder="Enter facebook here">
                        
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Twitter url</label>
                        <input type="text" id="input" class="form-control" name="twitter" value="{{ @old('twitter')}}" placeholder="Enter twitter here">
                        
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Instagram url</label>
                        <input type="text" id="input" class="form-control" name="instagram" value="{{ @old('instagram')}}" placeholder="Enter instagram here">
                        
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Linkedin url</label>
                        <input type="text" id="input" class="form-control" name="linkedin" value="{{ @old('linkedin')}}" placeholder="Enter linkedin here">
                       
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Image</label>
                        <input type="file" id="image" class="form-control" name="image">
                        @error('image')
                            	<span class="error text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Description</label>
                        <textarea type="text" class="form-control" rows="5" name="description" value="">{{ @old('description')}}</textarea>
                        @error('description')
                            	<span class="error text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Status</label>
                        <input type="radio" name="status" value="1" checked><span>Active</span>
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