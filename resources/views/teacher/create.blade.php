@extends('layouts.master', ['title' => 'Chat - Applications', 'footer' => false, 'workspaceClasses' => 'pb-32'])



@section('workspace')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>Slider</h1>
        <ul>
            <li><a href="#no-link">Slider</a></li>
            <li class="divider la la-arrow-right"></li>
            <li><a href="#no-link">Create</a></li>
        </ul>
    </section>

    <div class="grid gap-5">
        <div class="flex flex-col gap-y-5">
            <form action="{{route('teacher.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="card p-5">
                    <div class="mt-5">
                        <label class="label block mb-2">Name</label>
                        <input type="text" id="input" class="form-control" name="name" placeholder="Enter name here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Subject</label>
                        <input type="text" id="input" class="form-control" name="subject" placeholder="Enter subject name here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Phone</label>
                        <input type="text" id="input" class="form-control" name="phone" placeholder="Enter phone number here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Email</label>
                        <input type="email" id="input" class="form-control" name="email" placeholder="Enter email address here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Skype</label>
                        <input type="text" id="input" class="form-control" name="skype" placeholder="Enter skype address here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Degree</label>
                        <input type="text" id="input" class="form-control" name="degree" placeholder="Enter qualification here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Experience</label>
                        <input type="text" id="input" class="form-control" name="experience" placeholder="Enter experience here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Hobbies</label>
                        <input type="text" id="input" class="form-control" name="hobbies" placeholder="Enter hobbies here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">My Course</label>
                        <input type="text" id="input" class="form-control" name="my_courses" placeholder="Enter courses here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Project</label>
                        <input type="text" id="input" class="form-control" name="projects" placeholder="Enter projects here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Facebook Address</label>
                        <input type="text" id="input" class="form-control" name="social_link1" placeholder="Enter Facebook Address here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Instagram</label>
                        <input type="text" id="input" class="form-control" name="social_link2" placeholder="Enter instagram link here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Twitter</label>
                        <input type="text" id="input" class="form-control" name="social_link3" placeholder="Enter twitter address here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Linked IN</label>
                        <input type="text" id="input" class="form-control" name="social_link4" placeholder="Enter Linked IN here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Image</label>
                        <input type="file" id="image" class="form-control" name="image">
                    </div>
                    <div class="mt-5">
                    <label class="label block mb-2">Description</label>
                        <textarea type="text" class="form-control" rows="5" name="description"></textarea>
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