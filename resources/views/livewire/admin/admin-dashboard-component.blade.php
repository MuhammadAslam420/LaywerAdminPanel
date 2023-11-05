<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>Welcome {{Auth::user()->name}}</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-user color-success border-success"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Total Client</div>
                                        <div class="stat-digit">{{$users}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-file color-warning border-warning"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Number of Cases</div>
                                        <div class="stat-digit">{{$cases}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-clipboard color-danger border-danger"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Active Cases</div>
                                        <div class="stat-digit">{{$active}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-check color-info border-info"></i></div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Complete Cases</div>
                                        <div class="stat-digit">{{$complete}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                       <div class="col-md-12">
                           <div class="card">
                               <div class="card-header">
                                   <div class="card-title">Client Details</div>
                               </div>
                               <div class="card-body">
                                   <table class="table table-striped">
                                      <thead>
                                          <tr>
                                              <th>ID</th>
                                              <th>Client Name</th>
                                              <th>Email</th>
                                              <th>Account Created at</th>
                                             
                                          </tr>
                                      </thead>
                                      <tbody>
                                          @foreach($allusers as $user)
                                          <tr>
                                              <td>{{$user->id}}</td>
                                              <td>{{$user->name}}</td>
                                              <td>{{$user->email}}</td>
                                              <td>{{$user->created_at}}</td>
                                              
                                          </tr>
                                          @endforeach
                                      </tbody>
                                      
                                   </table>
                                   {{$allusers->links("pagination::bootstrap-4")}}
                               </div>
                           </div>
                       </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>2022 © Advocate Panel.</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>