@extends("admin.layouts.app")
@push('admin-styles')
<link rel="stylesheet" href="{{ asset('admin/choosen-select/docsupport/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/choosen-select/docsupport/prism.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/choosen-select/chosen.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/slides.css') }}">
@endpush
@section('admin-content')
    <section>
        <div class="row">
            <div class="col-12">
                <h4 class="content-heading ">
                    Auction Settings
                </h4>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <form action="{{ url('update-auction-setting') }}" method="post">
                        <input type="hidden" name="id" value="{{$auctionsetting->id}}">
                        @csrf
                            <div>
                                @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                                @endif
                            </div>
                        <table class="table">
                            <tbody>
                                <tr class="light-background">
                                    <td>Enabled</td>
                                    <td>
                                        <label class="switch switch-green">
                                            @if($auctionsetting && $auctionsetting->enable_status == "on")
                                            <input type="checkbox" name="enable_status" class="switch-input" checked>
                                            @else
                                            <input type="checkbox" name="enable_status" class="switch-input">
                                            @endif
                                            <span class="switch-label" data-on="On" data-off="Off"></span>
                                            <span class="switch-handle"></span>
                                        </label>
                                    </td>
                                </tr>
                                <tr class="light-background">
                                    <td>Listing duration options</td>
                                    <td>
                                        <select class="form-select" name="duration_options" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr class="light-background">
                                    <td>Duration Days List</td>
                                    <td>
                                        <select class="chosen-select" name="duration_days[]" id="categories" multiple>
                                            <option @if(in_array(7,$auctionsetting->duration_days)) selected @endif value="7">7</option>
                                            <option @if(in_array(14,$auctionsetting->duration_days)) selected @endif value="14">14</option>
                                            <option @if(in_array(21,$auctionsetting->duration_days)) selected @endif value="21">21</option>
                                            <option @if(in_array(30,$auctionsetting->duration_days)) selected @endif value="30">30</option>
                                        </select>
                                        </td>
                                </tr>
                                <tr class="light-background">
                                    <td>
                                        Allow Changes to Listings End Date / Duration
                                    </td>
                                    <td>
                                        <label class="switch switch-green">
                                            @if($auctionsetting && $auctionsetting->change_duration_status == "on")
                                            <input type="checkbox" name="change_duration_status" class="switch-input" checked>
                                            @else
                                            <input type="checkbox" name="change_duration_status" class="switch-input">
                                            @endif
                                            <span class="switch-label" data-on="On" data-off="Off"></span>
                                            <span class="switch-handle"></span>
                                        </label>
                                    </td>
                                </tr>
                                <tr class="light-background">
                                    <td>Allow Edit of Start Date for Scheduled Listings</td>
                                    <td>
                                        <label class="switch switch-green">
                                            @if($auctionsetting && $auctionsetting->edit_schedule_status == "on")
                                            <input type="checkbox" name="edit_schedule_status" class="switch-input" checked>
                                            @else
                                            <input type="checkbox" name="edit_schedule_status" class="switch-input">
                                            @endif
                                            <span class="switch-label" data-on="On" data-off="Off"></span>
                                            <span class="switch-handle"></span>
                                        </label>
                                    </td>
                                </tr>
                                <tr class="light-background">
                                    <td>Max Auto Relists</td>
                                    <td><input type="number" value="{{ $auctionsetting->max_auto_relists }}" name="max_auto_relists" class="form-control" id="exampleInputPassword1"
                                            placeholder="0"></td>
                                </tr>
                                <tr class="light-background">
                                    <td>Snper Protection Seconds</td>
                                    <td><input type="number" value="{{ $auctionsetting->snper_protection_seconds }}" name="snper_protection_seconds" class="form-control" id="exampleInputPassword1"
                                            placeholder="0"></td>
                                </tr>
                                <tr class="light-background">
                                    <td>Enable Reserve</td>
                                    <td>
                                        <label class="switch switch-green">
                                            @if($auctionsetting && $auctionsetting->reserve_status == "on")
                                            <input type="checkbox" name="reserve_status" class="switch-input" checked>
                                            @else
                                            <input type="checkbox" name="reserve_status" class="switch-input">
                                            @endif
                                            <span class="switch-label" data-on="On" data-off="Off"></span>
                                            <span class="switch-handle"></span>
                                        </label>
                                    </td>
                                </tr>
                                <tr class="light-background">
                                    <td>Enable Quick Bid</td>
                                    <td>
                                        <label class="switch switch-green">
                                            @if($auctionsetting && $auctionsetting->quick_bid_status == "on")
                                            <input type="checkbox" name="quick_bid_status" class="switch-input" checked>
                                            @else
                                            <input type="checkbox" name="quick_bid_status" class="switch-input">
                                            @endif
                                            <span class="switch-label" data-on="On" data-off="Off"></span>
                                            <span class="switch-handle"></span>
                                        </label>
                                    </td>
                                </tr>
                                <tr class="light-background">
                                    <td>Enable Auto Bidding</td>
                                    <td>
                                        <label class="switch switch-green">
                                            @if($auctionsetting && $auctionsetting->auto_bid_status == "on")
                                            <input type="checkbox" name="auto_bid_status" class="switch-input" checked>
                                            @else
                                            <input type="checkbox" name="auto_bid_status" class="switch-input">
                                            @endif
                                            <span class="switch-label" data-on="On" data-off="Off"></span>
                                            <span class="switch-handle"></span>
                                        </label>
                                    </td>
                                </tr>
                                <tr class="light-background">
                                    <td>Enable Large Bid Confirmation</td>
                                    <td>
                                        <label class="switch switch-green">
                                            @if($auctionsetting && $auctionsetting->bid_confirm_status == "on")
                                            <input type="checkbox" name="bid_confirm_status" class="switch-input" checked>
                                            @else
                                            <input type="checkbox" name="bid_confirm_status" class="switch-input" checked>
                                            @endif
                                            <span class="switch-label" data-on="On" data-off="Off"></span>
                                            <span class="switch-handle"></span>
                                        </label>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="submit" class="btn success-button">Save Auction Configuration</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-8 mt-3">
                    <h6 class="light-background p-2">Auction Bid Increments</h6>
                    <form action="{{ url('update-bid-setting') }}" method="post">
                        <input type="hidden" name="id" value="{{$bidsetting->id}}">
                        @csrf
                            <div>
                                @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                                @endif
                            </div>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-5">
                                        For prices at or above...
                                    </div>
                                    <div class="col-md-5">
                                        Increment
                                    </div>
                                    <div class="col-md-2">
                                        Delete?
                                    </div>
                                </div>
                            </li>
                            <div class="bid_icremdent_wrapper">
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <input type="text" name="prices" value="{{ $bidsetting->prices }}" class="form-control" id="exampleInputPassword1"
                                                placeholder="0.00">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" value="{{ $bidsetting->Increments }}" name="Increments" class="form-control" id="exampleInputPassword1"
                                                placeholder="0.25">
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($bidsetting && $bidsetting->delete_status == 'yes')
                                                <input class="form-check-input" name="delete_status" type="checkbox" value="yes"
                                                    id="flexCheckDefault" checked>
                                                    @else
                                                    <input class="form-check-input" name="delete_status" type="checkbox" value="yes"
                                                    id="flexCheckDefault">
                                                    @endif
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-5">
                                        <input type="text" class="form-control" id="exampleInputPassword1"
                                            placeholder="Price Level" disabled>
                                    </div>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control" id="exampleInputPassword1"
                                            placeholder="Enter New Increment" disabled>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="javascript:void(0);" class="add_button" title="Add field">New</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <button type="submit" class="btn success-button mt-2">Save Bid Icrements</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('admin/choosen-select/docsupport/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/choosen-select/chosen.jquery.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/choosen-select/docsupport/prism.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ asset('admin/choosen-select/docsupport/init.js') }}" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var maxField = 10; //Input fields increment limitation
            var addButton = $('.add_button'); //Add button selector
            var wrapper = $('.bid_icremdent_wrapper'); //Input field wrapper
            var fieldHTML =
                '<li class="list-group-item"><div class="row"><div class="col-md-5"><input type="text" class="form-control" id="exampleInputPassword1"></div><div class = "col-md-5" > <input type= "text" class= "form-control" id= "exampleInputPassword1"></div> <div class="col-md-2"> <a href="javascript:void(0);" class="remove_button">Remove</a> </div></div></li>';
            // var fieldHTML =
            //     '<div><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button"><img src="remove-icon.png"/></a></div>'; //New input field html
            var x = 1; //Initial field counter is 1

            //Once add button is clicked
            $(addButton).click(function() {
                //Check maximum number of input fields
                if (x < maxField) {
                    x++; //Increment field counter
                    $(wrapper).append(fieldHTML); //Add field html
                }
            });

            //Once remove button is clicked
            $(wrapper).on('click', '.remove_button', function(e) {
                e.preventDefault();
                console.log($(this).parent('div').parent('div').parent('li'));
                $(this).parent('div').parent('div').parent('li').remove(); //Remove field html
                x--; //Decrement field counter
            });
        });
    </script>
@endsection
