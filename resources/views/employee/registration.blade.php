@extends('layouts.master')
    
@section('title')
Employee Registration
@endsection
    
@section('head')
 @if ($errors->any())
  <style>
    #{{ implode(", #", $errors->keys()) }}
    {
        border: solid 1px #ea4747;
    }
  </style>
 @endif
@endsection
    
@section('content') 
@if ($errors->any())
<div id="error-banner" class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
<center><span class="glyphicon glyphicon-eject show_error"></span></center>
@endif
    
<div class="container">
    <form action="/employee" method="POST">
        <!-- Personal details section -->
        <div class="panel panel-info">
            <div class="panel-heading"><span class="glyphicon glyphicon-user"></span> Personal details</div>
            <div class="panel-body">
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="emp_id" class="col-form-label small">Employee ID</label>
                        <input type="text" class="form-control input-sm" id="emp_id" name="emp_id" value="{{ old('emp_id') }}" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="dob" class="col-form-label small">Date of Birth</label>
                        <input type="text" class="form-control input-sm pick-date" id="dob" name="dob" value="{{ old('dob') }}" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="gender" class="col-form-label small">Gender</label>
                        <select class="form-control input-sm" name="gender" id="gender" required>
                            <option value="hslc">Male</option>
                            <option value="hs">Female</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="blood_group" class="col-form-label small">Blood group</label>
                        <input type="text" class="form-control input-sm" id="blood_group" name="blood_group" value="{{ old('blood_group') }}">
                    </div>
                </div>
                    
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="fname" class="col-form-label small">First Name</label>
                        <input type="text" class="form-control input-sm" id="fname" name="fname" value="{{ old('fname') }}" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="mname" class="col-form-label small">Middle Name</label>
                        <input type="text" class="form-control input-sm" id="mname" name="mname" value="{{ old('mname') }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="lname" class="col-form-label small">Last Name</label>
                        <input type="text" class="form-control input-sm" id="lname" name="lname" value="{{ old('lname') }}" required>
                    </div>
                </div>
                    
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="edu_qual" class="col-form-label small">Educational Qualification</label>
                        <select class="form-control input-sm" name="edu_qual" id="edu_qual">
                            <option value="hslc">HSLC</option>
                            <option value="hs">HS</option>
                            <option value="grad">Graduate</option>
                            <option value="pg">Post Graduate</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="pan" class="col-form-label small">PAN</label>
                        <input type="text" class="form-control input-sm" id="pan" name="pan" value="{{ old('pan') }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="adhar" class="col-form-label small">Adhar</label>
                        <input type="text" class="form-control input-sm" id="adhar" name="adhar" value="{{ old('adhar') }}">
                    </div>
                </div>
            </div>
        </div>
        <!-- Personal details section end -->
            
        <!-- Contact details section -->
        <div class="panel panel-info">
            <div class="panel-heading"><span class="glyphicon glyphicon-phone"></span> Contact details</div>
            <div class="panel-body">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="email" class="col-form-label small">Email ID</label>
                        <input type="text" class="form-control input-sm" id="email" name="email" value="{{ old('email') }}" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="phone" class="col-form-label small">Mobile</label>
                        <input type="text" class="form-control input-sm" id="phone" name="phone" value="{{ old('phone') }}" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label for="permanent_add" class="col-form-label small">Permanent Address</label>
                        <textarea class="form-control input-sm" name="permanent_add" rows="4" cols="20" id="permanent_add" placeholder="Permanent Address">{{ old('permanent_add') }}</textarea>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="same-add" class="col-form-label small">Same as Permanent</label><br>
                        <center><input type="checkbox" id="same"></center>    
                    </div>
                    <div class="form-group col-md-5">
                        <label for="present_add" class="col-form-label small">Present Address</label>
                        <textarea class="form-control input-sm" name="present_add" rows="4" cols="20" id="present_add" placeholder="Present Address">{{ old('present_add') }}</textarea>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact details section end -->
            
        <!-- Official details section -->
        <div class="panel panel-info">
            <div class="panel-heading"><span class="glyphicon glyphicon-home"></span> Official details</div>
            <div class="panel-body">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="court_id" class="col-form-label small">Court</label>
                        <select class="form-control input-sm" id="court_id" name="court_id" required>
                            @foreach ($establishments as $establishment)
                            <option value="{{$establishment->est_code}}">{{$establishment->establishment}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="post_id" class="col-form-label small">Post</label>
                        <select class="form-control input-sm" id="post_id" name="post_id" required>
                            @foreach ($establishments as $establishment)
                            <option value="{{$establishment->est_code}}">{{$establishment->establishment}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="loc_id" class="col-form-label small">Location</label>
                        <select class="form-control input-sm" id="loc_id" name="loc_id" required>
                            @foreach ($establishments as $establishment)
                            <option value="{{$establishment->est_code}}">{{$establishment->establishment}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="doj" class="col-form-label small">Date of Joining</label>
                        <input type="text" class="form-control input-sm pick-date" id="doj" name="doj">
                    </div>
                </div>
            </div>
        </div>
        <!-- Official details section end -->
        {{ csrf_field() }}
        <input type="submit" class="btn btn-success" value="Register">
    </form>
</div>
@endsection