<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>Welcome {{Auth::user()->name}} Profile</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                   
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section class="main-content">
                    <div class="row">
                    <div class="container" style="padding:30px 0;">
    <div class="card">
        <div class="card-header">
            <div class="card-title">Profile</div>
        </div>
        <div class="card-body">
          <div class="row">
          
            <div class="col-md-12">
              <p><b>Name</b> {{$user->name}}</p>
            <p><b>Email</b> {{$user->email}}</p>
            <p><b>Type</b> {{$user->utype}}</p>
            </div>
          </div>
        </div>
    </div>

    </div>
</div>
                    </div>
                </section>
               
            </div>
        </div>
    </div>
<div>
   
