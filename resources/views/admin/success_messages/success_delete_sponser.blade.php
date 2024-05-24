@extends('layouts.app')

@section('content')
<div class="body flex-grow-1 px-3 test mt-4">
    <div class="container-lg ">
        <div class="container mb-3">
            <div class="row justify-content-center">
                <div class="card p-5">
                    <div class="container-fluid border my-3  ">
                        <div class="row justify-content-center">
                            <div class="card-create-project pt-4 my-3 mx-5 px-5">
                                <h2 id="heading">Deleting Sponser</h2>
                                <p id="pcreateProject">success message</p>
                                <form id="msform" action='{{ route("admin.sponsers.update", $sponser) }}' method="POST">
                                    @csrf
                                    <!-- fieldsets -->
                                    <!--stage four-->
                                    <fieldset class="active">
                                        <div class="form-card">
                                            <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2>
                                            <br>
                                            <div class="row justify-content-center">
                                                <div class="col-3">
                                                    <img src="{{ asset('assets/images/success.png') }}" class="fit-image">
                                                </div>
                                            </div>
                                            <br><br>
                                            <div class="row justify-content-center">
                                                <div class="col-7 text-center">
                                                    <h5 class="purple-text text-center">Sponser <strong>{{ $sponser }}</strong> has been deleted successfully</h5>
                                                    <h5 class="purple-text text-center">Now <strong>{{ucfirst(auth()->user()->name)}}</strong>, What is your next step? go <a href="{{route('admin.sponsers.index')}}">home?</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection