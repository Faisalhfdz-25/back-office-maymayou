@extends('layouts.master')
@section('title','Inventory List')
@section('content')
<div class="main">

    <!-- BOF Breadcrumb -->
    <div class="row">
        <div class="col">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="ti-home"></i> Daster Data</a></li>
                <li class="breadcrumb-item active">Inventory List</li>
            </ol>
        </div>
    </div>
    <!-- EOF Breadcrumb -->
    <!-- BOF Basic Datatable -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-3">
                <div class="card-header">
                    <div class="caption uppercase">
                        <i class="ti-file"></i> Inventory List
                    </div>
                    <div class="tools">
                        <a href="javascript:;" class="btn btn-sm btn-success exampleModalSize" data-size="lg"><i class="ti-plus"></i> Tambah Data</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover init-datatable" id="">
                            <thead class="thead-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModalSize" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Tambah Data Inventory</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="card mb-3">
                <form role="form">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Full Name</label>
                                <div class="col">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="First Name">
                                        <input type="text" class="form-control" placeholder="Last Name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Email</label>
                                <div class="input-group col">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ti-email"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Username</label>
                                <div class="input-group col">
                                    <input type="text" class="form-control" placeholder="Username">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-danger"><span
                                                class="text-light">Required</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Password</label>
                                <div class="input-group col">
                                    <input type="password" class="form-control" placeholder="Password">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-danger"><i
                                                class="fa fa-asterisk text-light"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Plain Text</label>
                                <div class="col">
                                    <span class="form-control-plaintext"><a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="9df8f0fcf4f1ddf8e5fcf0edf1f8b3fef2f0">[email&#160;protected]</a></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Address</label>
                                <div class="input-group col">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Street</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="12345 My Street">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="input-group col offset-md-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">City</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="City Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="input-group col offset-md-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">State</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="NY">
                                </div>
                                <div class="input-group col">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Zip</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="00000">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="input-group col offset-md-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Country</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="United States">
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <label class="col-md-3 col-form-label">Checkboxes</label>
                                <div class="col">
                                    <div class="form-checkbox">
                                        <label>
                                            <input type="checkbox" name="checkbox7">
                                            <span class="checkmark"><i class="fa fa-check"></i></span>
                                            Checkbox 7
                                        </label>
                                    </div>
                                    <div class="form-checkbox">
                                        <label>
                                            <input type="checkbox" name="checkbox8" checked>
                                            <span class="checkmark"><i class="fa fa-check"></i></span>
                                            Checkbox 8
                                        </label>
                                    </div>
                                    <div class="form-checkbox">
                                        <label>
                                            <input type="checkbox" name="checkbox9">
                                            <span class="checkmark"><i class="fa fa-check"></i></span>
                                            Checkbox 9
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <label class="col-md-3 col-form-label">Inline Check</label>
                                <div class="col">
                                    <div class="form-checkbox">
                                        <label class="mr-3">
                                            <input type="checkbox" name="checkbox10">
                                            <span class="checkmark"><i class="fa fa-check"></i></span>
                                            Check 10
                                        </label>
                                        <label class="mr-3">
                                            <input type="checkbox" name="checkbox11">
                                            <span class="checkmark"><i class="fa fa-check"></i></span>
                                            Check 11
                                        </label>
                                        <label class="mr-3">
                                            <input type="checkbox" name="checkbox12" checked>
                                            <span class="checkmark"><i class="fa fa-check"></i></span>
                                            Check 12
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">Inline Radios</label>
                                <div class="col">
                                    <div class="form-radio">
                                        <label class="mr-3">
                                            <input type="radio" name="radio4">
                                            <span class="radiomark"><i class="fa fa-circle"></i></span> Radio 1
                                        </label>
                                        <label class="mr-3">
                                            <input type="radio" name="radio4" checked>
                                            <span class="radiomark"><i class="fa fa-circle"></i></span> Radio 2
                                        </label>
                                        <label class="mr-3">
                                            <input type="radio" name="radio4">
                                            <span class="radiomark"><i class="fa fa-circle"></i></span> Radio 3
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">BS-Select</label>
                                <div class="col">
                                    <select class="form-control selectpicker">
                                        <option>Bootstrap-Select Plugin</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Multi-Select</label>
                                <div class="col">
                                    <select multiple class="form-control">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                        <option>Option 5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Textarea</label>
                                <div class="col">
                                    <textarea class="form-control" placeholder="Hello World!"></textarea>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Agreement</label>
                                <div class="col">
                                    <span class="form-control-plaintext">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                        minim veniam.</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="input-group col offset-md-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" name="">
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Type your name to sign">
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col offset-md-3 pl-3">
                                <a href="#" class="btn btn-flat btn-primary"><i class="ti-face-smile"></i> Submit</a>
                                <a href="#" class="btn btn-flat btn-secondary"><i class="ti-face-sad"></i> Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </div>
</div>
</div>
@endsection