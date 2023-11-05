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
                                    <li class="breadcrumb-item active"><a href="{{route('admin.caseslist')}}">Cases List</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    
                    <div class="row">
                       <div class="col-md-12">
                           <div class="card">
                               <div class="card-header">
                                   <div class="card-title">Cases list</div>
                                   @if(Session::has('message'))
                                   <div class="alert alert-danger text-success">{{Session::get('message')}}</div>
                                   @endif
                               </div>
                               <div class="card-body">
                                   <table class="table table-responsive">
                                      <thead>
                                          <tr>
                                              <th>Case ID</th>
                                              <th>Case Title</th>
                                              <th>Client Name</th>
                                              <th>Fees</th>
                                              <th>Action</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          @foreach($cases as $case)
                                          <tr>
                                              <td>{{$case->id}}</td>
                                              <td>{{$case->case}}</td>
                                              <td>{{$case->user->name}}</td>
                                              <td>{{$case->case_amount}}</td>
                                              <td colspan="2">
                                              <a href="{{route('admin.casedetail',['case_id'=>$case->id])}}" class="btn btn-primary btn-sm"><i class="ti-info"></i></a>
                                              <a href="{{route('admin.editcase',['case_id'=>$case->id])}}" class="btn btn-info btn-sm"><i class="ti-pencil color-default"></i></a>
                                              <a href="{{route('admin.updatestatus',['case_id'=>$case->id])}}" class="btn btn-success btn-sm"><i class="ti-plus"></i></a>
                                              <a href="#" onclick="confirm('Are You Sure, You want to delete the case!.') || event.stopImmediatePropagation()" wire:click.prevent="deleteProduct({{$case->id}})" class="btn btn-danger btn-sm"><i class="ti-trash color-default"></i></a>

                                            </td>
                                          </tr>
                                          @endforeach
                                      </tbody>
                                      
                                   </table>
                                   {{$cases->links("pagination::bootstrap-4")}}
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