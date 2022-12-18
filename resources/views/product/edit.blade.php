@extends('layouts.master', ['title' => 'Chat - Applications', 'footer' => false, 'workspaceClasses' => 'pb-32'])



@section('workspace')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>Product</h1>
        <ul>
            <li><a href="#no-link">Product</a></li>
            <li class="divider la la-arrow-right"></li>
            <li><a href="#no-link">Create</a></li>
        </ul>
    </section>

    <div class="grid gap-5">
        <div class="flex flex-col gap-y-5">
            <form action="{{route('product.update', $product->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="card p-5">
                    <div class="mt-5">
                        <label class="label block mb-2">Name</label>
                        <input type="text" id="input" class="form-control" name="name" value="{{ $product->name }}" placeholder="Enter text here">
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Image</label>
                        <input type="file" id="input" class="form-control" name="image">
                        @if($product->image != null)<img src="{{asset('uploads/product/'.$product->image)}}" width="80" alt="{{$product->name}}">@endif
                    </div>
                    <div class="row-span-full mt-5">
                        <label class="label block mb-2">Multi Image</label>
                        <input type="file" id="input" class="form-control" name="multi_image[]" multiple>
                        <div class="grid grid-flow-col">
                        @foreach($multiimages as $multiimage)
                        @if($multiimage->multi_image != null)
                        <div class="img-gallery" >
                        <!-- <a href="#">x</a> -->
                        <!-- <button class="deleteRecord" data-id="{{ $multiimage->id }}" >Delete Record</button> -->
                        <!-- <button class="deleteProduct" data-id="{{ $multiimage->id }}" data-token="{{ csrf_token() }}" >Delete Task</button> -->
                        <!-- <td>
                        <a class="deleteRecord" data_id="{{$multiimage->id}}"> X </a>
                        </td> -->
                        <!-- <button class="deleteRecord" data-id="{{$multiimage->id}}"><i class="icon-bin"></i>delete</button> -->
                        <!-- <a class="deleteRecord" data_id="{{$multiimage->id}}"><i class="icon-bin"></i>delete</a> -->
                        <!-- <a href="{{ $multiimage->id }}" class="delete text-danger">
                                        <span class="fa fa-remove"></span>
                                    </a> -->
                                    <!-- <a href="" class="delete_mil_img" data-id="{{$multiimage->id}}">delete</a> -->
                                    <!-- <a href="javascript:void(0)" id="mid{{$multiimage->id}}" onclick="multiDestroy({{$multiimage->id}})" class="">Delete</a> -->
                                    <a href="{{ $multiimage->id }}" class="delete">
                                        DEL
                                    </a>
                        <img src="{{asset('uploads/productsmultiimage/'.$multiimage->multi_image )}}" width="80" alt="{{$multiimage->multi_image}}">
                        </div>
                        @endif
                        @endforeach
                        </div>
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Product Specification</label>
                        <input type="text" id="input" class="form-control" name="specification" value="{{ $product->specification }}" placeholder="Enter text here">
                        
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Short Descrition</label>
                        <textarea type="text" class="form-control" rows="5" name="desc">{{ $product->desc }}</textarea>
                    </div>
                    
                    <div class="mt-5">
                        <label class="label block mb-2">Descrition</label>
                        <textarea type="text" class="form-control" rows="5" name="short_desc">{{ $product->short_desc }}</textarea>
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Category</label>
                        <select class="form-control" id="category_id" name="category_id">
                            <option value="">Please Select</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id}}" {{($category->id==$product->category_id) ? 'selected':''}}>{{ $category->name}}</option>
                            @endforeach  
                        </select>
                    </div>
                    <div class="mt-5">
                        <label class="label block mb-2">Status</label>
                        <input type="radio" name="status" value="1" {{ $product ? $product->status == 1 ? "checked" : "": ""   }}><span>Active</span>
                        <input type="radio" name="status" value="0" {{ $product ? $product->status == 0 ? "checked" : "": ""   }}><span>Inactive</span>
                    </div>
                    <div class="mt-5">
                        <button type="submit" class="bg-blue-500 text-white hover:text-white font-bold py-1 px-4 rounded-full">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
<!-- <script>
    // function multiDestroy($id){
    //     if(confirm("do you want delete")){
    //         $.ajax({
    //             url:'product/delete/'+id,
    //             type:'DELETE',
    //             data:{
    //                 _token: $("input[name=_token]").val()
    //             },
    //             success:function(response){
    //                 $("#mid"+id).remove();
    //             }
    //         })
    //     }
    // }

    $(document).on('click','.delete_mil_img', function(e){
        e.preventDefault();
        let id = $(this).data('id');

        $.ajax({
            url:{{ route('multiDestroy')}},
            method:'POST',
            data:
        })
    })
</script> -->
<script>



    // $(document).on('click', '.delete', function(e) {

    // e.preventDefault();
    // id = $(this).attr('href');
    // // alert(id);
    // var token = $("meta[name='csrf-token']").attr("content");
    // url = '{{ route('multiDestroy', ':id') }}';
    // url = url.replace(':id', id);
    // // alert(url);
    // $.ajax({
    //     url: "product/delete/"+id,
    //     type: 'POST',
    //     dataType: 'json',
    //     data: {
    //         _method: 'POST',
    //         submit: true,
    //         _token: token,
    //     },
    //     success: function(data) {
    //         console.log("it Works");
    //     }
    // });
    // });

// $(".deleteRecord").click(function(){
//     var id = $(this).data("id");
//     console.log(id);
//     var token = $("meta[name='csrf-token']").attr("content");

//     $.ajax({
//         url: "product/delete/"+id,
//         type: 'POST',
//         dataType: 'json',
//         data: {
//             _method: 'POST',
//             submit: true,
//             _token: token,
//         },
//         success: function (){
//             console.log("it Works");
//         }
//     });   
// });

// $(".deleteRecord").click(function(){
//     // $.ajaxSetup({
//     //     headers: {
//     //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     //     }
//     // });
//         var id = $(this).data("id");
//         // var token = $("meta[name='csrf-token']").attr("content");

//         $.ajax({
//             url: "product/delete/"+id
//             type: 'GET',
//             data: {
//                 "id": id,
//                 // "_token": token,
//             },
//             success: function (result){
//                 swal({
//                                     title: "multiimage deleted succesfuly",
//                                     icon: "success",
//                                     type: 'success',
//                                 })
//             }
//         });

//     });


    // $(".deleteRecord").each(function () {
    //         $(this).on("click", function () {
    //             var $tr = $(this).closest('tr');
    //             var id = $(this).attr("data_id");
    //             swal({
    //                 title: "Are you sure to Delete!",
    //                 text: "***",
    //                 icon: "warning",
    //                 buttons: [
    //                     'cansle!',
    //                     'yes'
    //                 ],
    //                 dangerMode: true,
    //             }).then(function(isConfirm) {
    //                 if (isConfirm) {
    //                     $.ajax({
    //                         url: '/product/delete',
    //                         type: 'post',
    //                         dataType: 'json',
    //                         data: {_token: "{{csrf_token()}}" , id:id},
    //                         success: function () {
    //                             swal({
    //                                 title: "multiimage deleted succesfuly",
    //                                 icon: "success",
    //                                 type: 'success',
    //                             })
    //                             $tr.find('td').fadeOut(1000,function(){
    //                                 $tr.remove();
    //                             });
    //                         }
    //                     })
    //                 }
    //             })
    //         });
    //     });




//     $(".deleteProduct").click(function(){
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });

//         var id = $(this).data("id");
//         // var token = $(this).data("token");
//         alert(id);
//     $.ajax(
//     {
//         url: "product/delete/"+id,
//         type: 'delete', // replaced from put
//         dataType: "JSON",
//         data: {
//             "id": id // method and token not needed in data
//         },
//         success: function (response)
//         {
//             console.log(response); // see the reponse sent
//         },
//         error: function(xhr) {
//          console.log(xhr.responseText); // this line will save you tons of hours while debugging
//         // do something here because of error
//        }
//     });
// });

    // $(".deleteRecord").click(function(){
    // var id = $(this).data("id");
    //  console.log(id);
    // // var token = $("meta[name='csrf-token']").attr("content");
   
    // $.ajax(
    // {
    //     url: "product/multiDestroy/"+id,
    //     type: 'DELETE',
    //     data: {
    //         "id": id,
    //         "_token": token,
    //     },
    //     success: function (){
    //         // console.log("it Works");
    //         alert('ok');
    //     }
    // });
   
    // });
</script>