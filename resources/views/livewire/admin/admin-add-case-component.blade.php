<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
              <div class="row">
                        <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                            <h4>Add New Case</h4>
                            <div class="row">
                            
                            <div class="col-12">
                                <a href="{{route('admin.caseslist')}}" class="btn btn-success pull-right">All Cases</a>

                            </div>
                        </div>
                            </div>
                            <div class="panel-body">
                                @if(Session::has('message'))
                            <div class="alert alert-warning" role="alert">{{Session::get('message')}}</div>
                            @endif
                            <div class="card-body">
                            <form action="" class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addProduct">
                                   
                                        <div class="form-group">
                                            <label for="" class="col-md-4 control-label">Register User Name</label>
                                            <div class="col-md-12">
                                              <select name="user_id" id="" class="form-control" wire:model="user_id">
                                                  <option value="" disabled>Select User</option>
                                                  @foreach($users as $user)
                                                  <option value="{{$user->id}}">{{$user->name}}</option>
                                                  @endforeach
                                              </select>                                                
                                              @error('user_id') <p class="text-danger">{{$message}}</p>@enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-md-4 control-label">Court</label>
                                            <div class="col-md-12">
                                              <select name="court_id" id="" class="form-control" wire:model="court_id">
                                              <option value="" disabled>Select Court</option>
                                                  @foreach($courts as $court)
                                                  <option value="{{$court->id}}">{{$court->courtname}}, {{$court->city->city_name}}</option>
                                                  @endforeach
                                              </select>                                                
                                              @error('court_id') <p class="text-danger">{{$message}}</p>@enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-md-4 control-label">City</label>
                                            <div class="col-md-12">
                                              <select name="city_id" id="" class="form-control" wire:model="city_id">
                                              <option value="" disabled>Select Court City</option>
                                                  @foreach($courts as $court)
                                                  <option value="{{$court->city_id}}">{{$court->courtname}}, {{$court->city->city_name}}</option>
                                                  @endforeach
                                              </select>                                                
                                              @error('city_id') <p class="text-danger">{{$message}}</p>@enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-md-4 control-label">Case Title</label>
                                            <div class="col-md-12">
                                            <textarea  class="form-control" id="case" placeholder="Case Title" wire:model="case"></textarea>
                                                @error('case') <p class="text-danger">{{$message}}</p>@enderror
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="" class="col-md-4 control-label">Client Name</label>
                                            <div class="col-md-12">
                                                <input type="text" class="form-control input-md" placeholder="Client Name" wire:model="clientname"/>
                                                @error('clientname') <p class="text-danger">{{$message}}</p>@enderror

                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-md-4 control-label">Address</label>
                                            <div class="col-md-12" wire:ignore>
                                                <textarea  class="form-control" id="address" placeholder="Address" wire:model="address"></textarea>
                                                @error('address') <p class="text-danger">{{$message}}</p>@enderror

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-md-4 control-label">Mobile</label>
                                            <div class="col-md-12" wire:ignore>
                                                <input  class="form-control" id="Mobile" placeholder="Mobile" wire:model="mobile">
                                                @error('mobile') <p class="text-danger">{{$message}}</p>@enderror

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-md-4 control-label">Town/city</label>
                                            <div class="col-md-12">
                                                <input type="text" class="form-control input-md" placeholder="Town/city" wire:model="town"/>
                                                @error('town') <p class="text-danger">{{$message}}</p>@enderror

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-md-4 control-label">Province</label>
                                            <div class="col-md-12">
                                                <input type="text" class="form-control input-md" placeholder="Province" wire:model="province"/>
                                                @error('province') <p class="text-danger">{{$message}}</p>@enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-md-4 control-label">Case Fees</label>
                                            <div class="col-md-12">
                                                <input type="text" class="form-control input-md" placeholder="Case Fees" wire:model="case_amount"/>
                                                @error('case_amount') <p class="text-danger">{{$message}}</p>@enderror

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-md-4 control-label">Advance Amount</label>
                                            <div class="col-md-12">
                                                <input type="text" class="form-control input-md" placeholder="Advance Amount" wire:model="taken_amount"/>
                                                @error('taken_amount') <p class="text-danger">{{$message}}</p>@enderror

                                            </div>
                                        </div>
                          
                         
                                        <div class="form-group">
                                            <label for="" class="col-md-4 control-label">CAse File Date</label>
                                            <div class="col-md-12">
                                            <input type="date" class="form-control input-md" wire:model="case_start_date"/>
                                            </div>
                                        </div>
                                    
                                        <div class="form-group">
                                            <label for="" class="col-md-4 control-label">Case Related Files</label>
                                            <div class="col-md-12">
                                                <input type="file" class="input-file" multiple wire:model="files"/>
                                                @if($files)
                                                @foreach($files as $file)
                                                
                                                <img src="{{$file->temporaryurl()}}" width="120"/>

                                               
                                                @endforeach
                                                @endif

                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-info pull-right">Update</button>
                                            </div>
                                        </div>

                                    </form>
                            </div>
                        </div>
                        </div>
                    </div>
</div>
</div>
</div>
</div>
