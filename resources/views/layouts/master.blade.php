@include('layouts.header')
<div class="container-fluid text-center">    
  <div class="row content">
    @include('layouts.leftbar')
    <div class="col-sm-8 text-left"> 
        @yield('content')   <!-- Content -->
    </div>
    @include('layouts.rightbar')
  </div>
</div>
@include('layouts.footer')