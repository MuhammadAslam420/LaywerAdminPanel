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
                   
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    
                    <div class="row">
                       <div class="col-md-12">
                           <div class="card">
                               <div class="card-header">
                                   <div class="card-title">Case Title</div>
                                   <div class="text-center"><h6 >{{$case->case}}</h6></div>
                                   @if(Session::has('message'))
                                   <div class="alert alert-danger text-success">{{Session::get('message')}}</div>
                                   @endif
                               </div>
                               <div class="card-body">
                                   <table class="table table-striped ">
                                         <thead>
                                         <tr>
                                             <th><h6 >Case ID</h6></th>
                                             <th><h6 >Court</h6></th>
                                             <th><h6 >Court City</h6></th>
                                         </tr>
                                         </thead>
                                            <tbody>
                                              <tr> 
                                                <td><p >{{$case->id}}</p></td>
                                                 <td><p >{{$case->court->courtname}}</p></td>
                                                <td><p >{{$case->city->city_name}}</p></td>
                                                </tr>
                                            </tbody>
                                    </table>
                                    <table class="table table-striped ">
                                         <thead>
                                         <tr>
                                              <th><h6 >Client Name</h6></th>
                                              <th><h6 >Client Case Name</h6></th>
                                              <th><h6 >Client Address</h6></th>
                                          </tr>
                                         </thead>
                                          <tbody>
                                              <tr>
                                              <td><p >{{$case->user->name}}</p></td>
                                              <td><p >{{$case->clientname}}</p></td>
                                              <td><p >{{$case->address}}</p></td>
                                              </tr>
                                          </tbody>
                                    </table>
                                    <table class="table table-striped">
                                         <thead>
                                         <tr>
                                              <th><h6 >Client Mobile</h6></th>
                                            
                                              <th><h6 >Client Email</h6></th>
                                              <th><h6 >Case Fees</h6></th>
                                             
                                              <th><h6 >Amount Paid By Client</h6></th>
                                           
                                          </tr>
                                         </thead>
                                          <tbody>
                                              <tr>
                                              <td><p >{{$case->mobile}}</p></td>
                                              <td><p >{{$case->user->email}}</p></td>
                                              <td><p >{{$case->case_amount}}</p></td>
                                              <td><p >{{$case->taken_amount}}</p></td>
                                              </tr>
                                          </tbody>
                                    </table>
                                    <table class="table table-striped">

                                          <tr>
                                              <th><h6 >Case Files</h6></th>
                                          
                                            @php
                                            $files=explode(',',$case->files);
                                            @endphp
                                            <td>
                                                  @foreach($files as $file)
                                                  @if($file)
                                                  <a href="{{asset('images/files')}}/{{$file}}">
                                                  <img src="{{asset('images/files')}}/{{$file}}" alt="{{$case->case}}" class="img-fluid">
                                                  </a>
                                                  @else
                                                  No File Save in Database
                                                  @endif
                                                  @endforeach
                                            </td>
                                        
                                          </tr>
                                          
                                              <tr>
                                                  <th><h6 >Case Last Status/Remarks</h6></th>
                                                  <th><h6 >Current files</h6></th>
                                                  <th><h6 >Court Files</h6></th>
                                              </tr>
                                          
                                          <tbody>
                                              @foreach($case->hirings as $hiring)
                                              <tr>
                                                  <td>{{$hiring->remarks}}</td>
                                                  <td>
                                                      @php
                                                      $evidences=explode(',',$hiring->evidence);
                                                      @endphp
                                                      @foreach($evidences as $evidence)
                                                      @if($evidence)
                                                      <a href="{{asset('images/evidence')}}/{{$evidence}}">
                                                      <img src="{{asset('images/evidence')}}/{{$evidence}}" class="img-fluid" alt="{{$hiring->id}}">
                                                      </a>
                                                      @else
                                                      No File Found on this Hiring
                                                      @endif
                                                      @endforeach
                                                  </td>
                                                  <td>
                                                      @php
                                                      $documents=explode(',',$hiring->court_document);
                                                      @endphp
                                                      @foreach($documents as $document)
                                                      @if($document)
                                                      <a href="{{asset('images/court_document')}}/{{$document}}">
                                                      <img src="{{asset('images/court_document')}}/{{$document}}" class="img-fluid"  alt="{{$hiring->id}}">
                                                      </a>
                                                      @else
                                                      No File Found on this Hiring
                                                      @endif
                                                      @endforeach
                                                  </td>
                                              </tr>
                                              @endforeach
                                          </tbody>
                                      
                                          
                                        
                                         
                                      
                                   </table>
                                   
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