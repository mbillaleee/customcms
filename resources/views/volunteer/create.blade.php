@extends('layouts.master', ['title' => 'Chat - Applications', 'footer' => false, 'workspaceClasses' => 'pb-32'])



@section('workspace')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>Blog</h1>
        <ul>
            <li><a href="#no-link">Blog</a></li>
            <li class="divider la la-arrow-right"></li>
            <li><a href="#no-link">Create</a></li>
        </ul>
    </section>

    <div class="grid gap-5">
        <div class="flex flex-col gap-y-5">
            <form action="{{route('volunteer.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="card p-5">
                    <div class="mt-5">
                        <label class="label block mb-2">name</label>
                        <input type="text" id="input" class="form-control" name="name" value="{{ @old('name')}}" placeholder="Enter name">
                        @error('name')
                            	<span class="error text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">email</label>
                        <input type="text" id="input" class="form-control" name="email" value="{{ @old('email')}}" placeholder="Enter email">
                        @error('email')
                            	<span class="error text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">phone</label>
                        <input type="text" id="input" class="form-control" name="phone" value="{{ @old('phone')}}" placeholder="Enter phone">
                        @error('phone')
                            	<span class="error text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Date of birth</label>
                        <input type="date" id="input" class="form-control" name="date_of_birth" value="{{ @old('addate_of_birthdress')}}">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">address</label>
                        <input type="text" id="input" class="form-control" name="address" value="{{ @old('address')}}" placeholder="Enter address">
                        @error('address')
                            	<span class="error text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">occupation</label>
                        <input type="text" id="input" class="form-control" name="occupation" value="{{ @old('occupation')}}" placeholder="Enter occupation">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Area of work</label>
                        <input type="text" id="input" class="form-control" name="area_of_work" value="{{ @old('area_of_work')}}" placeholder="Enter text here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Image</label>
                        <input type="file" id="input" class="form-control" name="image">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Message</label>
                        <textarea type="text" class="form-control" rows="5" name="message">{{ @old('message')}}</textarea>
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Status</label>
                        <input type="radio" name="status" value="1" checked><span>Approved</span>
                        <input type="radio" name="status" value="0"><span>Pending</span>
                    </div>
                    <div class="mt-5">
                        <button type="submit" class="bg-blue-500 text-white hover:text-white font-bold py-1 px-4 rounded-full">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    

@endsection