@extends('template.ngo.include.master')

@section('content')
@php
$setting = App\Models\Setting::where('status', 1)->get();
@endphp
<!-- Header Close -->
<section class="page-title bg-1">
   <div class="container">
      <div class="columns">
         <div class="column is-12">
            <div class="block has-text-centered">
               <span class="text-white">Donation confirmation</span>
               <h1 class="is-capitalize text-lg">Donation details</h1>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="section donation">
	<div class="container">
		<div class="columns is-multiline is-desktop">
			<div class="column is-8-desktop">
				<div class="donation-wrap">
					<h2 class="text-md mb-5">I want to support you</h2>
					<p class="mb-6 is-size-5">Soluta odit consequuntur adipisci consectetur culpa sequi exercitationem molestias dolores saepe, aut, ratione quam recusandae nulla. Beatae eius, voluptas.</p>

					<form class="donation-form">
						<fieldset>
							<div class="columns is-multiline">
								<label class="column is-3 has-text-weight-bold h3">Donation</label>
								<div class="column is-9">
									<div class="form-check">
										<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
										<label class="form-check-label" for="gridRadios1">
											$10 একটি সেমিস্টারের জন্য একটি শিশুর জন্য স্কুল সরবরাহ করতে পারে
										</label>
									</div>

									<div class="form-check">
										<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
											value="option2">
										<label class="form-check-label" for="gridRadios2">
											$25 একটি পরিবারকে মৌলিক স্বাস্থ্যসেবা পরিষেবা প্রদান করতে পারে
										</label>
									</div>

									<div class="form-check">
										<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3"
											value="option3">
										<label class="form-check-label" for="gridRadios3">
											$50 একটি দক্ষতা প্রশিক্ষণ প্রোগ্রামে একজন মহিলাকে সহায়তা করতে পারে
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3"
											value="option3">
										<label class="form-check-label" for="gridRadios3">
										$100 প্রাকৃতিক দুর্যোগে ক্ষতিগ্রস্ত পরিবারগুলোকে ত্রাণ দিতে সাহায্য করতে পারে
										</label>
									</div>
									<div class="columns is-align-items-center">
										<label class="column has-text-weight-bold is-4">Other amount: </label>
										<div class="column is-8">
											<input type="number" class="input" id="inputamount" placeholder="25000">
										</div>
									</div>
								</div>
							</div>

							<div class="mt-6">
								<label class="mb-4 h3 is-block">Select Payment Method</label>
								<ul class="list-inline has-background-white is-inline-block has-text-centered is-rounded">
									<li class="list-inline-item"><a class="is-inline-block px-5 py-3" href="#"><i class="icofont-mastercard-alt mr-2"></i>Credit Card</a></li>
									<li class="list-inline-item border-left"><a class="is-inline-block px-5 py-3" href="#"><i class="icofont-bank-transfer-alt mr-2"></i>Bank Transfer</a></li>
									<li class="list-inline-item border-left"><a class="is-inline-block px-5 py-3" href="#"><i class="icofont-payoneer-alt mr-2"></i>Payoneer</a>
									</li>
								</ul>
							</div>

							<div class="mt-6">
								<h3 class="mb-4 border-bottom">Your account Credential</h3>
								<div class="mb-4">
									<label class="has-text-weight-bold is-inline-block mb-1">Name on card</label>
									<input type="text" class="input" id="paycardname" placeholder="Your Name">
								</div>
								<div class="mb-4">
									<label class="has-text-weight-bold is-inline-block mb-1">Card Number</label>
									<input type="text" class="input" id="paycardnumber" placeholder="0000-0000-0000-0000">
								</div>
							</div>

							<div class="columns is-multiline">
								<div class="column is-4-desktop is-6-tablet">
									<label class="has-text-weight-bold is-inline-block mb-1">Month</label>
									<select id="inputmonth" class="input">
										<option selected>Choose...</option>
										<option>2019</option>
										<option>2018</option>
									</select>
								</div>

								<div class="column is-4-desktop is-6-tablet">
									<label class="has-text-weight-bold is-inline-block mb-1">Year</label>
									<select id="inputyear" class="input">
										<option selected>Choose...</option>
										<option>2019</option>
										<option>2018</option>
									</select>
								</div>
								<div class="column is-4-desktop is-12-tablet">
									<label class="has-text-weight-bold is-inline-block mb-1">CVV</label>
									<input type="text" class="input" id="inputZip">
								</div>
							</div>

						</fieldset>


						<h2 class="mb-5 mt-6 border-bottom pb-3">Donor Details</h2>

						<div class="columns is-gapless is-align-items-center is-multiline">
							<label class="column is-3-desktop has-text-weight-bold">Your Name</label>
							<div class="column is-9-desktop">
								<input type="text" class="input" id="inputname" placeholder="Your Name">
							</div>
						</div>

						<div class="columns is-gapless is-align-items-center is-multiline">
							<label class="column is-3-desktop has-text-weight-bold">Email</label>
							<div class="column is-9-desktop">
								<input type="email" class="input" id="inputEmail3" placeholder="Email">
							</div>
						</div>


						<div class="columns is-gapless is-align-items-center is-multiline">
							<label class="column is-3-desktop has-text-weight-bold">Phone</label>
							<div class="column is-9-desktop">
								<input type="number" class="input" id="inputphone" placeholder="Phone">
							</div>
						</div>

						<div class="columns is-gapless is-align-items-center is-multiline">
							<label class="column is-3-desktop has-text-weight-bold">Country</label>
							<div class="column is-9-desktop">
								<select id="inputState" class="input">
									<option selected>Choose Country</option>
									<option>USA</option>
									<option>Italy</option>
									<option>BD</option>
									<option>India</option>
									<option>Pakistan</option>
									<option>Japan</option>
									<option>Nethdarland</option>
									<option>China</option>
								</select>
							</div>
						</div>
						<div class="columns is-gapless is-align-items-center is-multiline">
							<label class="column is-3-desktop has-text-weight-bold">Address</label>
							<div class="column is-9-desktop">
								<input type="text" class="input" id="inputname2" placeholder="Your Name">
							</div>
						</div>

						<div class="columns is-gapless is-align-items-center is-multiline">
							<label class="column is-3-desktop has-text-weight-bold">City</label>
							<div class="column is-9-desktop">
								<input type="text" class="input" id="inputname3" placeholder="Your Name">
							</div>
						</div>

						<div class="columns is-gapless is-align-items-center is-multiline">
							<div class="column is-3-desktop has-text-weight-bold">
								<strong>Anonymous donation?</strong>
							</div>
							<div class="column is-9-desktop">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" id="gridCheck135">
									<label class="form-check-label" for="gridCheck135">
										Hide my personal info from donators list
									</label>
								</div>
							</div>
						</div>
						<div class="columns is-gapless is-align-items-center is-multiline">
							<div class="column sm-12">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" id="gridCheck232">
									<label class="form-check-label" for="gridCheck232">
										I give my <span class="has-text-weight-bold">consent for authorized representatives</span>
										of Smile Foundation to contact me occasionally by mobile and email for informing on the
										latest developments and updated offerings.
									</label>
								</div>
							</div>
						</div>

						<div class="columns is-gapless is-multiline mt-4">
							<div class="column sm-10">
								<a href="confirmation.html" class="btn btn-main-2 is-rounded">Donate Now</a>
							</div>
						</div>
					</form>
				</div>
			</div>

			<div class="column is-4-desktop">
				<div class="offline-donation">
					<h4 class="mb-5">In order to make an offline donation we ask that you please follow these instructions:
					</h4>

					<ul class="list-unstyled">
						<li>1. Make a check payable to <span>"Charite"</span></li>
						<li>2. On the memo line of the check, please indicate that the donation is for <span>"Charite"</span>
						</li>
						<li>3. Please mail your check to:

							<address>
								Chariti
								111 Not A Real St.
								Anytown, CA 12345
							</address>
						</li>
						<li>4. Email us in detials : <span>{{ $setting[0]->email }}</span></li>
						<li>5. Contact us at Phone: <span>{{ $setting[0]->mobile }}</span></li>
					</ul>

					<p>All contributions will be gratefully acknowledged and are tax deductible.</p>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection