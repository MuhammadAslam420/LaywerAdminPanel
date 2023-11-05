<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
              <div class="row">
                        <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                            <h4>Add New City</h4>
                            <div class="row">
                            
                            <div class="col-12">
                                <a href="{{route('admin.citieslist')}}" class="btn btn-success pull-right">All Cities</a>

                            </div>
                        </div>
                            </div>
                            <div class="panel-body">
                                @if(Session::has('message'))
                            <div class="alert alert-warning" role="alert">{{Session::get('message')}}</div>
                            @endif
                            <div class="card-body">
                            <form action="" class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="storeCity">
                                   
                                    
                                        <div class="form-group">
                                            <label for="" class="col-md-4 control-label">City Name</label>
                                            <div class="col-md-12">
                                            <input  class="form-control" id="case" placeholder="City Name" wire:model="city_name" wire:keyup="generateslug">
                                                @error('city') <p class="text-danger">{{$message}}</p>@enderror
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="" class="col-md-4 control-label">Slug</label>
                                            <div class="col-md-12">
                                                <input type="text" class="form-control input-md" placeholder="Slug" wire:model="slug"/>
                                                @error('slug') <p class="text-danger">{{$message}}</p>@enderror

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
<div class="container-fluid">
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>City</th>
                    <th>Slug</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cities as $city)
                <tr>
                    <td>{{$city->id}}</td>
                    <td>{{$city->city_name}}</td>
                    <td>{{$city->slug}}</td>
                    <td>{{$city->created_at}}</td>
                    
                 
                    
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$cities->links("pagination::bootstrap-4")}}
    </div>
</div>
</div>
</div>
</div>
