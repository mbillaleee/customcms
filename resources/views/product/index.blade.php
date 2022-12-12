@extends('layouts.master', ['title' => 'Chat - Applications', 'footer' => false, 'workspaceClasses' => 'pb-32'])

@section('workspace')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>Product</h1>
        <ul>
            <li><a href="#no-link">Product</a></li>
            <li class="divider la la-arrow-right"></li>
            <li><a href="#no-link">List</a></li>
        </ul>
    </section>

    <div class="grid grid-rows-1 grid-flow-col gap-4">
        <!-- Striped -->
        <div class="flex flex-col gap-y-5">
            <div class="card p-5">
            <a class="btn btn_primary float-end" href="{{ route('product.create') }}"> Add Product</a>
                <table class="table table_striped w-full mt-3">
                    <thead>
                        <tr>
                            <th class="ltr:text-left rtl:text-right uppercase">#</th>
                            <th class="ltr:text-left rtl:text-right uppercase">Name</th>
                            <th class="ltr:text-left rtl:text-right uppercase">Category</th>
                            <th class="ltr:text-left rtl:text-right uppercase">Description</th>
                            <th class="ltr:text-left rtl:text-right uppercase">Short Description</th>
                            <th class="ltr:text-left rtl:text-right uppercase">Image</th>
                            <th class="ltr:text-left rtl:text-right uppercase">Status</th>
                            <th class="ltr:text-left rtl:text-right uppercase">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>1</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->categories->name }}</td>
                            <td>{{ $product->desc }}</td>
                            <td>{{ $product->short_desc }}</td>
                            <td>@if($product->image != null)<img src="{{asset('uploads/product/'.$product->image)}}" width="80" alt="$product->title">@endif</td>
                            <td>{!! !!$product->status ? '<span class="badge bg-success">Active</span>': '<span
                                                class="badge bg-danger">Inactive</span>' !!}</td>
                            <td class="flex">
                            <a class="bg-blue-500 text-white hover:text-white font-bold py-1 px-4 rounded-full" href="{{ route('product.edit',$product->id) }}">Edit</a>
                                <form class="" method="POST" action="{{route('product.destroy', $product->id)}}">

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