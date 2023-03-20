@extends('template.ngo.include.master')


@section('content')
<div class="inner-banner">
    <section class="w3l-breadcrumb py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title">Religious Program</h2>
        </div>
    </section>
</div>

@if($setting[0]->blog_show == 1)
<section class="section intro">
	<div class="container">
		<div class="columns is-multiline is-justify-content-center">
			@foreach($blogs as $item)
			<div class="column is-3-desktop is-6-tablet fst_blog">
				<div class="intro-item mb-5 mb-lg-0"> 
					<img src="{{asset('uploads/blog/'.$item->image)}}" alt="" class=" w-100">
					
					<!-- <h4 class="mt-4 mb-3">Get inspired</h4> -->
					<p class="mt-4">{{ $item->title }}</p>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
<!--//team-sec-->
@elseif($setting[0]->blog_show == 2)

<section class="section intro">
	<div class="container">
	<div class="row">
		<div class="col-12 col-md-12 col-lg-12">
			<h6 class="text-muted">List Group with Images</h6> 
			<ul class="list-group">
				@foreach($blogs as $item)
				<a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center mt-4">
				<div class="flex-column">
					{{ $item->title }}
					<p><small>{{ $item->content }}</small></p>
				</div>
				<div class="image-parent">
					<!-- <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/don_quixote.jpg" class="img-fluid" alt="quixote"> -->
					<img src="{{asset('uploads/blog/'.$item->image)}}" class="img-fluid image-blog-list" alt="quixote">
				</div>
				</a>
				@endforeach
			</ul>
		</div>
	</div>
	</div>
</section>

@endif


<div class="container">
  <ul class="list-group">
    <li class="list-group-item clearfix">
      <img class="img-responsive img-rounded" src="http://placehold.it/256/163a63" alt=""/>
      <h3 class="list-group-item-heading">
        Amazing Item
        <span class="label label-danger pull-right">NEW !</span>
      </h3>
      <p class="list-group-item-text lead">
        Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio.
        <br />
        <a href="#"><small>Details&#8230;</small></a>
      </p>
      <div class="btn-toolbar pull-right" role="toolbar" aria-label="">
        <div class="btn-group">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-list"></i> <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Add to new list</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">A list</a></li>
            <li><a href="#">Another list</a></li>
            <li><a href="#">Third list</a></li>
          </ul>
        </div>
        <a href="#" class="btn btn-default">Add to cart</a>
        <a href="#" class="btn btn-primary">$29.99</a>
      </div>
    </li>
    <li class="list-group-item active clearfix">
      <img class="img-responsive img-rounded" src="http://placehold.it/256/163a63" alt=""/>
      <h3 class="list-group-item-heading">
        Current thing
      </h3>
      <p class="list-group-item-text lead">
        Etiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod.
        <br />
        <a href="#"><small>Details&#8230;</small></a>
      </p>
      <div class="btn-toolbar pull-right" role="toolbar" aria-label="">
        <div class="btn-group">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-list"></i> <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Add to new list</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">A list</a></li>
            <li><a href="#">Another list</a></li>
            <li><a href="#">Third list</a></li>
          </ul>
        </div>
        <a href="#" class="btn btn-default">Add to cart</a>
        <a href="#" class="btn btn-info">$9.95</a>
      </div>
    </li>
    <li class="list-group-item clearfix">
      <img class="img-responsive img-rounded" src="http://placehold.it/256/163a63" alt=""/>
      <h3 class="list-group-item-heading">
        Something great
      </h3>
      <p class="list-group-item-text lead">
        Donec sed odio dui. Donec id elit non mi porta gravida at eget metus. Donec sed odio dui. Donec id elit non mi porta gravida at eget metus.
        <br />
        <a href="#"><small>Details&#8230;</small></a>
      </p>
      <div class="btn-toolbar pull-right" role="toolbar" aria-label="">
        <div class="btn-group">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-list"></i> <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Add to new list</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">A list</a></li>
            <li><a href="#">Another list</a></li>
            <li><a href="#">Third list</a></li>
          </ul>
        </div>
        <a href="#" class="btn btn-default">Add to cart</a>
        <a href="#" class="btn btn-primary">$42.50</a>
      </div>
    </li>
    <li class="list-group-item clearfix">
      <img class="img-responsive img-rounded" src="http://placehold.it/256/163a63" alt=""/>
      <h3 class="list-group-item-heading">
        Another thing
        <span class="label label-default pull-right">SOLD OUT</span>
      </h3>
      <p class="list-group-item-text lead">
        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
        <br />
        <a href="#"><small>Details&#8230;</small></a>
      </p>
      <div class="btn-toolbar pull-right" role="toolbar" aria-label="">
        <div class="btn-group">
          <button type="button" class="btn disabled btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-list"></i> <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Add to new list</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">A list</a></li>
            <li><a href="#">Another list</a></li>
            <li><a href="#">Third list</a></li>
          </ul>
        </div>
        <a href="#" class="btn disabled btn-default">Add to cart</a>
        <a href="#" class="btn disabled btn-primary">$1.99</a>
      </div>
    </li>
    <li class="list-group-item clearfix">
      <img class="img-responsive img-rounded" src="http://placehold.it/256/163a63" alt=""/>
      <h3 class="list-group-item-heading">
        Yet another item
      </h3>
      <p class="list-group-item-text lead">
        Etiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod.
        <br />
        <a href="#"><small>Details&#8230;</small></a>
      </p>
      <div class="btn-toolbar pull-right" role="toolbar" aria-label="">
        <div class="btn-group">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-list"></i> <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Add to new list</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">A list</a></li>
            <li><a href="#">Another list</a></li>
            <li><a href="#">Third list</a></li>
          </ul>
        </div>
        <a href="#" class="btn btn-default">Add to cart</a>
        <a href="#" class="btn btn-primary">$16.00</a>
      </div>
    </li>
    <li class="list-group-item clearfix">
      <img class="img-responsive img-rounded" src="http://placehold.it/256/163a63" alt=""/>
      <h3 class="list-group-item-heading">
        Something else
      </h3>
      <p class="list-group-item-text lead">
        Etiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod.
        <br />
        <a href="#"><small>Details&#8230;</small></a>
      </p>
      <div class="btn-toolbar pull-right" role="toolbar" aria-label="">
        <div class="btn-group">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-list"></i> <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Add to new list</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">A list</a></li>
            <li><a href="#">Another list</a></li>
            <li><a href="#">Third list</a></li>
          </ul>
        </div>
        <a href="#" class="btn btn-default">Add to cart</a>
        <a href="#" class="btn btn-primary">$12.99</a>
      </div>
    </li>
    <li class="list-group-item clearfix">
      <img class="img-responsive img-rounded" src="http://placehold.it/256/163a63" alt=""/>
      <h3 class="list-group-item-heading">
        Last thing here
      </h3>
      <p class="list-group-item-text lead">
        Cras mattis consectetur purus sit amet fermentum. Maecenas faucibus mollis interdum. Cras mattis consectetur purus sit amet fermentum. Maecenas faucibus mollis interdum.
        <br />
        <a href="#"><small>Details&#8230;</small></a>
      </p>
      <div class="btn-toolbar pull-right" role="toolbar" aria-label="">
        <div class="btn-group">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-list"></i> <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Add to new list</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">A list</a></li>
            <li><a href="#">Another list</a></li>
            <li><a href="#">Third list</a></li>
          </ul>
        </div>
        <a href="#" class="btn btn-default">Add to cart</a>
        <a href="#" class="btn btn-success">Free!</a>
      </div>
    </li>
  </ul>
</div>
@endsection