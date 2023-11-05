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
                    <th>Court</th>
                    <th>Slug</th>
                    <th>City</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($courts as $court)
                <tr>
                    <td>{{$court->id}}</td>
                    <td>{{$court->courtname}}</td>
                    <td>{{$court->slug}}</td>
                    <td>{{$court->city->city_name}}</td>
                    <td>{{$court->created_at}}</td>
                    <td><a href="#" class="btn btn-danger" onclick="confirm('Are You Sure, You want to delete the Court!.') || event.stopImmediatePropagation()" wire:click.prevent="deleteCourt({{$court->id}})"><i class="ti-trash"></i></a></td>
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
