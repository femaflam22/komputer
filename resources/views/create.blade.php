@extends('layout')

@section('content')
<div class="container">
    <form method="POST" action="{{route('store')}}" class="row">
        @csrf
        <div class="col-md-4">
            <p class="logo">Lab. Computer<br><span>SMK Wikrama Bogor</span></p>
            <div class="image">
                <i class="fa-solid fa-computer" style="font-size: 5rem"></i>
            </div>
            <h6 class="mt-3 text-center">Laboratory Computer</h6>
            <p>SMK Wikrama management laboratory computer center.</p>
        </div>
        <div class="col-md-8">
            <div class="d-flex pt-3 pr-2">
                <p class="ml-auto mb-0">need help?</p>
            </div>	
            <div class="d-flex pr-2">
                <p class="ml-auto"><strong><i class="fas fa-phone-volume"></i>08588665****</strong></p>
            </div>	
            <form class="information">
                <h4 class="form-heading">New Computer</h4>
                <p class="form-para">
                    Please fill all the input form with the right value!
                </p>
                <div class="form-group"> 
                    <input type="text" class="form-control" id="metk" name="merk" placeholder="Merk">
                </div>

                <div class="form-group"> 
                    <input type="text" class="form-control" id="type" name="type" placeholder="Type">
                </div>

                <div class="form-group"> 
                    <select name="lab" id="lab" class="form-control">
                        <option hidden selected disabled>--select lab--</option>
                        <option value="206">206</option>
                        <option value="207">207</option>
                        <option value="210">210</option>
                    </select>
                    <label class="form-control-placeholder" for="number">Lab.</label> 
                </div>

                 <div class="form-group mt-3"><button type="submit" class="btn btn-block btn-primary"><span>Create<i class="fas fa-arrow-right ml-2"></i></span></button></div>
            </form>
        </div>
    </form>
</div>
@endsection