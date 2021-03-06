<article class="page-body">

    <!--Breadcrumb Section Start-->
    <section class="breadcrumb-bg-2">                
        <div class="container">
            <div class="site-breadcumb">                        
                <h1 class="title-1"> My Account </h1> 
                <ol class="breadcrumb breadcrumb-menubar">
                    <li> <a href="#"> Home </a> My Account </li>                             
                </ol>
            </div>  
        </div>
    </section>
    <!--Breadcrumb Section End-->

    <section class="wrapper sec-space my-account">                  
        <div class="container">
            <!-- My Account Starts -->
            <div class="row">  
                <!-- Product Details Starts--> 
                <aside class="col-md-9 col-sm-8">
                    <div class="account-wrap cart-box">
                        <form class="gray-control">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $user->nama ? $user->nama : Input::old('nama') }}" autocapitalize="words" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" value="{{ $user->email ? $user->email : Input::old('email') }}" placeholder="Email" autocorrect="off" autocapitalize="off" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="number" name="telp" class="form-control" placeholder="Phone Number" value="{{ $user->telp ? $user->telp : Input::old('telp') }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Your Old Password</label>
                                        <input type="password" name="oldpassword" class="form-control" placeholder="Password">
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label>Change New Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Re-Type Password">
                                    </div>
                                    <div class="form-group">
                                        <label>Re-Type New Password</label>
                                        <input type="password" name="password_confirmation" class="form-control" placeholder="Re-Type Password">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group selects-wrapper">
                                        <label>Country</label>
                                        <select class="form-control" id="negara" name="negara" data-rel="chosen" required>
                                            @foreach ($negara as $key=>$item)
                                                @if(strtolower($item)=='indonesia')
                                                <option value="1" {{ $user->negara==1 || Input::old("negara")==1 ? 'selected' : '' }}>{{ $item }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group selects-wrapper">
                                        <label>Province</label>
                                        {{ Form::select('provinsi',array('' => '-- Select Province --') + $provinsi, ($user ? $user->provinsi :(Input::old("provinsi")? Input::old("provinsi") :"")),array('required'=>'','id'=>'provinsi', 'class'=>'form-control')) }}
                                    </div>
                                    <div class="form-group selects-wrapper">
                                        <label>City</label>
                                        {{Form::select('kota',array('' => '-- Pilih Kota --') + $kota, ($user ? $user->kota :(Input::old("kota")? Input::old("kota") :"")),array('required'=>'','id'=>'kota', 'class'=>'form-control'))}}
                                    </div>
                                    <div class="form-group">
                                        <label>Postal Code</label>
                                        <input type="number" name="kodepos" class="form-control" placeholder="Postal Code" value="{{ $user->kodepos ? $user->kodepos : Input::old('kodepos') }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <textarea style="height:180px;" class="form-control autoheight" rows="7" name="alamat" required placeholder="Address">{{ $user->alamat ? $user->alamat : Input::old("alamat") }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </aside>
                <!-- Product Details Ends --> 

                <!-- Sidebar Starts --> 
                <aside class="col-md-3 col-sm-4 prod-sidebar">
                    <div class="widget-wrap">
                        <h2 class="widget-title"> My Account </h2>
                        
                        <div class="widget-content">
                        <ul class="category">
                            <li class="active"><a href="{{ url('member/profile/edit') }}"> Account Information </a></li>
                            <!-- <li><a href="my-account.html"> My Account</a></li>                                         -->
                            <!-- <li><a href="cng-pw.html"> Change Password</a></li> -->
                            <!-- <li><a href="address-book.html"> Address Books</a></li> -->
                            <li><a href="{{url('member')}}"> Order History</a></li>
                            <li><a href="{{url('testimonial')}}"> Reviews and Ratings</a></li>
                            <!-- <li><a href="return.html"> Returns Requests</a></li> -->
                            <!-- <li><a href="newsletter.html"> Newsletter</a></li> -->
                            <!-- <li><a href="myaccount-leftsidebar.html"> Left Sidebar</a></li> -->
                        </ul>
                        </div>
                            
                    </div>
                </aside>   
                <!-- Sidebar Ends --> 

            </div>
            <!-- / My Account Ends -->
        </div>

    </section>

</article>

<section id="pageContent">
    <div class="container">
        <div class="bingoAccountContainer">
            <div class="row">
                <div class="col-xs-12">
                    <div class="formAccount">
                        <h1 class="bingoAccountTitle">Edite Profile</h1>
                        <form method="put" action="{{ url('member/update') }}" accept-charset="UTF-8">
                            <div class="formContent">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $user->nama ? $user->nama : Input::old('nama') }}" autocapitalize="words" autofocus required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control" value="{{ $user->email ? $user->email : Input::old('email') }}" placeholder="Email" autocorrect="off" autocapitalize="off" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="number" name="telp" class="form-control" placeholder="Phone Number" value="{{ $user->telp ? $user->telp : Input::old('telp') }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="oldpassword" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label>New Password</label>
                                            <input type="password" name="password" class="form-control" placeholder="Re-Type Password">
                                        </div>
                                        <div class="form-group">
                                            <label>Re-Type New Password</label>
                                            <input type="password" name="password_confirmation" class="form-control" placeholder="Re-Type Password">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group selects-wrapper">
                                            <label>Country</label>
                                            <select class="selects" id="negara" name="negara" data-rel="chosen" required>
                                                @foreach ($negara as $key=>$item)
                                                    @if(strtolower($item)=='indonesia')
                                                    <option value="1" {{ $user->negara==1 || Input::old("negara")==1 ? 'selected' : '' }}>{{ $item }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group selects-wrapper">
                                            <label>Province</label>
                                            {{ Form::select('provinsi',array('' => '-- Select Province --') + $provinsi, ($user ? $user->provinsi :(Input::old("provinsi")? Input::old("provinsi") :"")),array('required'=>'','id'=>'provinsi', 'class'=>'selects')) }}
                                        </div>
                                        <div class="form-group selects-wrapper">
                                            <label>City</label>
                                            {{Form::select('kota',array('' => '-- Pilih Kota --') + $kota, ($user ? $user->kota :(Input::old("kota")? Input::old("kota") :"")),array('required'=>'','id'=>'kota', 'class'=>'selects'))}}
                                        </div>
                                        <div class="form-group">
                                            <label>Postal Code</label>
                                            <input type="number" name="kodepos" class="form-control" placeholder="Postal Code" value="{{ $user->kodepos ? $user->kodepos : Input::old('kodepos') }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control autoheight" rows="7" name="alamat" required placeholder="Address">{{ $user->alamat ? $user->alamat : Input::old("alamat") }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="formRegisterButton">
                                    <div class="form-group">
                                        <input type="submit" value="Update" class="btn btnbingoOne">
                                    </div>
                                    <p><a class="bingoLinkCancel" href="/">Return to Store</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>