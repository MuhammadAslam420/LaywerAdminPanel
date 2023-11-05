<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
              <div class="row">
                        <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                            <h4>Add Hiring Status</h4>
                            <div class="row">
                        </div>
                            </div>
                            <div class="panel-body">
                                @if(Session::has('message'))
                            <div class="alert alert-warning" role="alert">{{Session::get('message')}}</div>
                            @endif
                            <div class="card-body">
                            <form action="" class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addCaseStatus">
                                   
                                        <div class="form-group">
                                            <label for="" class="col-md-4 control-label">Remarks</label>
                                            <div class="col-md-12">
                                           <textarea name="remarks" id="" cols="30" rows="10" class="form-control" wire:model='remarks'></textarea>                                               
                                              @error('remarks') <p class="text-danger">{{$message}}</p>@enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-md-4 control-label">Submited Evidences</label>
                                            <div class="col-md-12">
                                             <input type="file" multiple class="form-control input-md" wire:model='evidences'>                                                
                                             @if($evidences)
                                                @foreach($evidences as $image)
                                                <img src="{{$image->temporaryurl()}}" width="120"/>
                                                @endforeach
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-md-4 control-label">Court Document if</label>
                                            <div class="col-md-12">
                                            <input type="file" multiple class="form-control input-md" wire:model='court_documents'>                                          
                                            @if($court_documents)
                                                @foreach($court_documents as $file)
                                                <img src="{{$file->temporaryurl()}}" width="120"/>
                                                @endforeach
                                                @endif
                                            </div>
                                        </div>
                                       <div class="form-group">
                                           <label for="" class="col-md-4 control-label">Next Hiring Date</label>
                                           <div class="col-md-12">
                                               <input type="date" class="form-control input-md" wire:model='next_hiring_date'>
                                               @error('next') <p class="text-danger">{{$message}}</p>@enderror

                                           </div>
                                       </div>
                                        
                                        <div class="form-group">
                                            
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-info pull-right">Add</button>
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
