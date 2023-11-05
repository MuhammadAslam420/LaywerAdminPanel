<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
              <div class="row">
                        <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                            <h4>Create New User</h4>
                            <div class="row">
                            
                            <div class="col-12">
                                <a href="{{route('admin.allusers')}}" class="btn btn-success pull-right">All Clients</a>

                            </div>
                        </div>
                            </div>
                            <div class="panel-body">
                                @if(Session::has('message'))
                            <div class="alert alert-warning" role="alert">{{Session::get('message')}}</div>
                            @endif
                            <div class="card-body">
                            <form action="" class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="createUser">
                                   
                                    
                                        <div class="form-group">
                                            <label for="" class="col-md-4 control-label">Client Name</label>
                                            <div class="col-md-12">
                                            <input  class="form-control" id="case" placeholder="Client Complete Name" wire:model="name">
                                                @error('name') <p class="text-danger">{{$message}}</p>@enderror
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="" class="col-md-4 control-label">Email</label>
                                            <div class="col-md-12">
                                                <input type="text" class="form-control input-md" placeholder="email address" wire:model="email"/>
                                                @error('email') <p class="text-danger">{{$message}}</p>@enderror

                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-md-4 control-label">Account Type</label>
                                            <div class="col-md-12">
                                                <select name="utype"  class="form-control" wire:model="utype">
                                                    <option value="">Select Account Type</option>
                                                    <option value="USR">New Client</option>
                                                    <option value="ADM">New Admin</option>
                                                </select>
                                                @error('utype') <p class="text-danger">{{$message}}</p>@enderror

                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-md-4 control-label">Password</label>
                                            <sub>Minimum 8 character required</sub>
                                            <div class="col-md-12">
                                                <input type="password" class="form-control input-md" placeholder="Password" wire:model="password"/>
                                                @error('password') <p class="text-danger">{{$message}}</p>@enderror

                                                </div>
                                        </div>
                                        <div class="form-group">
                                            
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-info pull-right">Create New User</button>
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
