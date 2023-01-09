<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="d-flex flex-row-reverse"><button
                class="btn btn-sm btn-pill btn-outline-primary font-weight-bolder" id="createNewUser">
                <a href="/insert"><i class="fas fa-plus"></i>add data </a></button></div>
                <h3>Manage Branches</h3>
            </div>
            <div class="card-body">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table" id="tableUser">
                            <thead class="font-weight-bold text-center">
                                <tr>
                                <th>#</th>
                                <th>branch_name</th>
                                <th>admin</th>
                                <th>area</th>
                                <th>departments</th>
                                <th>employees</th>
                                <th>users</th>
                                    <th style="width:90px;">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                            @foreach($posts as $post)
            

                                <tr>
                                    <td>{{$post->id}}</td>
                                    <td><b>Entry{{$post->id}}</b><br>{{$post->branch_name}}</td>
                                    <td>{{$post->admin}}</td>
                                    <td>{{$post->area}}</td>
                                    <td>{{$post->departments}}</td>
                                    <td>{{$post->employees}}</td>
                                    <td>{{$post->users}}</td>
                                    <td>
                                    <div data-toggle="tooltip"   data-id="1" data-original-title="Edit" class="btn btn-sm btn-icon btn-outline-success btn-circle mr-2 edit editUser"> <a href="/edit/{{$post->id}}"><i class=" fi-rr-edit"></i></a> </div> 
                                    <div data-toggle="tooltip" data-id="1" data-original-title="Delete" class="btn btn-sm btn-icon btn-outline-danger btn-circle mr-2 deleteUser"><a href="/delete/{{$post->id}}"><i class="fi-rr-trash"></i></a> 
                                    </div>
                                    </td>

                                </tr>        
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
