<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
              <div class="row">
                        <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                            <h4>Add New Court</h4>
                            <div class="row">
                            
                            <div class="col-12">
                                <a href="{{route('admin.courtlist')}}" class="btn btn-success pull-right">All Courts</a>

                            </div>
                        </div>
                            </div>
                            <div class="panel-body">
                                @if(Session::has('message'))
                            <div class="alert alert-warning" role="alert">{{Session::get('message')}}</div>
                            @endif
                            <div class="card-body">
                            <form action="" class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="storeCourt">
                                   
                                    
                                        <div class="form-group">
                                            <label for="" class="col-md-4 control-label">Court</label>
                                            <div class="col-md-12">
                                            <input  class="form-control" id="case" placeholder="Court Name" wire:model="courtname" wire:keyup="generateslug">
                                                @error('city') <p class="text-danger">{{$message}}</p>@enderror
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="" class="col-md-4 control-label">Slug</label>
                                            <div class="col-md-12">
                                                <input type="text" class="form-control input-md" placeholder="Slug Generate Automatic" wire:model="slug"/>
                                                @error('slug') <p class="text-danger">{{$message}}</p>@enderror

                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-md-4 control-label">Select City</label>
                                            <div class="col-md-12">
                                                <select name="city_id" class="form-control" id="" wire:model="city_id">
                                                    @foreach($cities as $city)
                                                    <option value="{{$city->id}}">{{$city->city_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-info pull-right">Add New Court</button>
                                            </div>
                                        </div>

                                    </form>
                            </div>
                        </div>
                        </div>
                    </div>
</div>
</div>
<div class="container-fluid">
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Court</th>
                    <th>Slug</th>
                    <th>City</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($courts as $ccourt)
                <tr>
                    <td>{{$ccourt->id}}</td>
                    <td>{{$ccourt->courtname}}</td>
                    <td>{{$ccourt->slug}}</td>
                    <td>{{$ccourt->city->city_name}}</td>
                    <td>{{$ccourt->created_at}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$courts->links("pagination::bootstrap-4")}}
    </div>
</div>
</div>
</div>
</div>
