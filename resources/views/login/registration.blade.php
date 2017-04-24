@extends('layouts.external-form-layout')
@section('title', 'Sign Up')
@section('page-title', 'Sign Up')
@section('page-widget-title', 'Sign Up')

@push('js')
    <script src="{{ URL::asset('src_js/users/reg.js') }}"></script>
@endpush

@section('breadcrumbs')
    <li>
        <i class="icon-signin"></i>
        <a href="{{ url('/login') }}">Login</a>
        <span class="icon-angle-right"></span>
    </li>
    <li><span>Sign Up</span></li>
@endsection

@section('content')
    @include('common.success')
    @include('common.errors')
    <form action="{{ url('store-user') }}" method="post" class="horizontal-form">
        {{ csrf_field() }}
        <h3>Bio-Data</h3>
        <div class="row-fluid">
            <div class="span6">
                <div class="control-group">
                    <label class="control-label">First Name</label>
                    <div class="controls">
                        <div class="input-icon left">
                            <i class="icon-user"></i>
                            <input type="text" name="fname" placeholder="First Name" class="span12" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="span6">
                <div class="control-group">
                    <label class="control-label">Middle Name</label>
                    <div class="controls">
                        <div class="input-icon left">
                            <i class="icon-user"></i>
                            <input type="text" name="mname" placeholder="Middle Name" class="span12">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span6">
                <div class="control-group">
                    <label class="control-label">Last Name</label>
                    <div class="controls">
                        <div class="input-icon left">
                            <i class="icon-user"></i>
                            <input type="text" name="lname" placeholder="Last Name" class="span12" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="span6">
                <div class="control-group">
                    <label class="control-label">Email Address</label>
                    <div class="controls">
                        <div class="input-icon left">
                            <i class="icon-envelope"></i>
                            <input class="m-wrap span12" name="email" type="email" placeholder="Email Address">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span6">
                <div class="control-group">
                    <label class="control-label">Password</label>
                    <div class="controls">
                        <div class="input-icon left">
                            <i class="icon-key"></i>
                            <input type="password" name="password" class="span12" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="span6">
                <div class="control-group">
                    <label class="control-label">Repeat Password</label>
                    <div class="controls">
                        <div class="input-icon left">
                            <i class="icon-key"></i>
                            <input type="password" name="password_confirmation" class="span12" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row-fluid">
            <div class="span6">
                <div class="control-group">
                    <label class="control-label">ID Number</label>
                    <div class="controls">
                        <div class="input-icon left">
                            <i class="icon-user"></i>
                            <input type="text" name="identity_number" class="span12" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="span6">
                <div class="control-group">
                    <label class="control-label">Mobile Number</label>
                    <div class="controls">
                        <div class="input-icon left">
                            <i class="icon-mobile-phone"></i>
                            <input type="text" name="mobile_number" placeholder="Mobile Phone Number" class="span12" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h3>Select/Create Box</h3>
        <div class="row-fluid">
            <div class="span6">
                <div class="control-group">
                    <label class="control-label">Do you have a Box Number(Box Code) like 22229 - 00100?</label>
                    <div class="controls">
                        <select name="have_box_no" id="have_box_no" class="span12" required>
                            <option value="">--Answer--</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="span6">
                <div class="control-group">
                    <label class="control-label">Postal Code</label>
                    <div class="controls">
                        <input type="hidden" name="postal_code" id="live_box_no" class="span12 select2" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span6" id="location_code">
                <div class="control-group">
                    <label class="control-label">Box Number</label>
                    <div class="controls">
                        <input type="text" id="box_no" name="box_no" class="span12" required/>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-actions">
            <button class="btn btn-primary" id="register-btn"> Register</button>
        </div>
    </form>
@endsection