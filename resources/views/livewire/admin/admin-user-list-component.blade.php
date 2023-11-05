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
                    <th>Client Name</th>
                    <th>Email</th>
                    <th>Account Type</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->utype}}</td>
                    <td>{{$user->created_at}}</td>
                    <td><a href="#" class="btn btn-danger" onclick="confirm('Are You Sure, You want to delete the Client!.') || event.stopImmediatePropagation()" wire:click.prevent="deleteAccount({{$user->id}})"><i class="ti-trash"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$users->links("pagination::bootstrap-4")}}
    </div>
</div>
            </div>
        </div>
</div>
