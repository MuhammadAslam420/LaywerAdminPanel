<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                @if(Session::has('message'))
                <div class="alert alert-success">{{Session::get('message')}}</div>
                @endif
            <div class="row">
    <div class="col-md-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>City</th>
                    <th>Slug</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cities as $city)
                <tr>
                    <td>{{$city->id}}</td>
                    <td>{{$city->city_name}}</td>
                    <td>{{$city->slug}}</td>
                    <td>{{$city->created_at}}</td>
                    <td><a href="#" class="btn btn-danger" onclick="confirm('Are You Sure, You want to delete the City!.') || event.stopImmediatePropagation()" wire:click.prevent="deleteCity({{$city->id}})"><i class="ti-trash"></i></a></td>
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
