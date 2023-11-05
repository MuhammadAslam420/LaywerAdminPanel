<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
              <div class="row">
                        <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                            <h4>Edit Case Info</h4>
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
                            <form action="" class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="updateProduct">
                                   
                                        <div class="form-group">
                                            <label for="" class="col-md-4 control-label">Court</label>
                                            <div class="col-md-12">
                                              <select name="court_id" id="" class="form-control" wire.model="court_id">
                                                  @foreach($courts as $court)
                                                  <option value="{{$court->id}}">{{$court->courtname}}, {{$court->city->city_name}}</option>
                                                  @endforeach
                                              </select>                                                
                                              @error('court_id') <p class="text-danger">{{$message}}</p>@enderror
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
                                            <label for="" class="col-md-4 control-label">Status</label>
                                            <div class="col-md-12">
                                                <input type="text" class="form-control input-md" placeholder="Status" wire:model="status">
                                                @error('status') <p class="text-danger">{{$message}}</p>@enderror

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-md-4 control-label">Case Related Files</label>
                                            <div class="col-md-12">
                                                <input type="file" class="input-file"multiple wire:model="newfiles"/>
                                                @if($newfiles)
                                                    @foreach($newfiles as $newfile)
                                                    @if($newfile)
                                                    <img src="{{$newfile->temporaryurl()}}" width="120"/>

                                                    @endif
                                                    @endforeach
                                                @else
                                                @foreach($files as $file)
                                                @if($file)
                                                <img src="{{asset('images/files')}}/{{$file}}" width="120"/>

                                                @endif
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
