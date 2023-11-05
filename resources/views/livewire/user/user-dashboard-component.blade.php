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
                                    <li class="breadcrumb-item active">Home</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-clipboard color-success border-success"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Number Cases</div>
                                        <div class="stat-digit">{{$cases}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Cases List</h4>

                                </div>
                                <div class="card-body">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Case ID</th>
                                                <th>Case Title</th>
                                                <th>Case Fees</th>
                                                <th>Case file Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($cases1 as $case)
                                            <tr>
                                                <td>{{$case->id}}</td>
                                                <td>{{$case->cae}}</td>
                                                <td>{{$case->case_amount}}</td>
                                                <td>{{$case->created_at}}</td>
                                                <td><a href="{{route('user.casedetail',['case_id'=>$case->id])}}" class="btn btn-primary btn-sm"><i class="ti-info"></i></a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{$cases1->links("pagination::bootstrap-4")}}
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