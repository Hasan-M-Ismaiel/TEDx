@extends('layouts.app')

@section('content')
<div class="body flex-grow-1 px-3 test mt-4">
  <div class="container-lg ">
    <div class="card p-5">
      <div class="row border">
        <!--header section-->
        <div class="col">
          <div class="container-fluid my-3  ">
            <div class="row justify-content-center">
              <div class="card-create-project pt-4 my-3 mx-5 px-5">
                <h2 id="heading">{{ $page }}</h2>
                <p id="pcreateProject">dashboard to manage all created speakers</p>
                <a type="button" class="rounded" href="{{ route('admin.speakers.create') }}" style="text-decoration: none;" role="button">
                  <div class="action-main-create-button px-5 text-center py-3 rounded">Create New Speaker</div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!--search button section-->
        <div class="col position-relative  ">
          <div class="col mx-auto position-absolute bottom-0 end-0">
            <div class="input-group mb-3 me-3">
              <input class="form-control border-end-0 border rounded-pill" type="search" placeholder="search" id="search-input">
              <span class="input-group-append">
                <button class="btn btn-outline-secondary bg-white border-bottom-0 border rounded-pill ms-n5" type="button" id="search_button">
                  <i class="bi bi-search"></i>
                </button>
              </span>
              <div class="btn" id="reset">reset</div>
              <a class="btn btn-primary me-2" href="{{ route('admin.exportSpeakers') }}" role="button">export as Excel</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    @if($speakers->count()>0)
    <!--users table section-->
    <x-speakers-table :speakers="$speakers" />
    @else
    <h5 class="text-center"> <span class="badge m-1" style="background: #673AB7;" id="no_notifications">There is no speakers now!</span> </h5>
    @endif
  </div>
</div>
@endsection