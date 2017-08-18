@extends('layouts.master')

@section('title')
	Employee Registration
@endsection

@section('content')
<div class="container">
<form>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmpId" class="col-form-label small small">Employee ID</label>
      <input type="text" class="form-control input-sm" id="inputEmpId">
    </div>
    <div class="form-group col-md-4">
      <label for="inputEmail" class="col-form-label small">Email ID</label>
      <input type="text" class="form-control input-sm" id="inputEmail">
    </div>
    <div class="form-group col-md-4">
      <label for="inputMobile" class="col-form-label small">Mobile</label>
      <input type="text" class="form-control input-sm" id="inputMobile">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputFname" class="col-form-label small">First Name</label>
      <input type="text" class="form-control input-sm" id="inputFname">
    </div>
    <div class="form-group col-md-4">
      <label for="inputMname" class="col-form-label small">Middle Name</label>
      <input type="text" class="form-control input-sm" id="inputMname">
    </div>
    <div class="form-group col-md-4">
      <label for="inputLname" class="col-form-label small">Last Name</label>
      <input type="text" class="form-control input-sm" id="inputLname">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPan" class="col-form-label small">PAN</label>
      <input type="text" class="form-control input-sm" id="inputPan">
    </div>
    <div class="form-group col-md-6">
      <label for="inputAdhar" class="col-form-label small">Adhar</label>
      <input type="text" class="form-control input-sm" id="inputAdhar">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputDob" class="col-form-label small">Date of Birth</label>
      <input type="text" class="form-control input-sm" id="inputDob">
    </div>
    <div class="form-group col-md-4">
      <label for="inputDoj" class="col-form-label small">Date of Joining</label>
      <input type="text" class="form-control input-sm" id="inputDoj">
    </div>
    <div class="form-group col-md-4">
      <label for="inputEdu" class="col-form-label small">Educational Qualification</label>
      <select class="form-control input-sm">
        <option value="hslc">HSLC</option>
        <option value="hs">HS</option>
        <option value="grad">Graduate</option>
        <option value="pg">Post Graduate</option>
      </select>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputGender" class="col-form-label small">Gender</label>
      <select class="form-control input-sm">
          <option value="hslc">Male</option>
          <option value="hs">Female</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputBgroup" class="col-form-label small">Blood group</label>
      <input type="text" class="form-control input-sm" id="inputBgroup">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPresentAdd" class="col-form-label small">Present Address</label>
      <textarea class="form-control input-sm" name="present_add" rows="10" cols="25" id="inputPresentAdd" placeholder="Present Address"></textarea>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPermanentAdd" class="col-form-label small">Permanent Address</label>
      <textarea class="form-control input-sm" name="permanent_add" rows="10" cols="25" id="inputPermanentAdd" placeholder="Permanent Address"></textarea>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCourt" class="col-form-label small">Court</label>
      <select class="form-control input-sm">
      	@foreach ($establishments as $establishment)
      		<option value="{{$establishment->est_code}}">{{$establishment->establishment}}</option>
      	@endforeach
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputPost" class="col-form-label small">Post</label>
      <select class="form-control input-sm">
          <option value="hslc">District & Session Judge</option>
          <option value="hs">Addl. District & Session Judge</option>
          <option value="grad">Munsiff Court</option>
          <option value="pg">Munsiff Court No.1</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputLocation" class="col-form-label small">Location</label>
      <select class="form-control input-sm">
          <option value="hslc">District & Session Judge</option>
          <option value="hs">Addl. District & Session Judge</option>
          <option value="grad">Munsiff Court</option>
          <option value="pg">Munsiff Court No.1</option>
      </select>
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</div>
@endsection