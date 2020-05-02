<div class="modal fade" id="editActualite{{$pub->id_pub}}" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title center-block" id="largeModalLabel" >Update Form </h4>
            </div>
            <div class="modal-body">
                <form  method="POST" action="publication/updateGereralPublication">
                    {{csrf_field()}}
                    <label for="title_pub">Publication Title</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" value="{{ $pub->title_pub }}" name="title_pub" class="form-control" placeholder="typing your publication title ..." maxlength="100">
                        </div>
                    </div>
                    <label for="resume_pub">Publication Resume</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" value="{{ $pub->resume_pub }}" name="resume_pub" class="form-control  " maxlength="200" placeholder="typing your publication  resume here..." >
                        </div>
                    </div>
                    <label for="theme_pub"> Formation Theme</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" value="{{ $pub->theme_pub }}" name="theme_pub" class="form-control" maxlength="100" placeholder="type formation theme here...">
                        </div>
                    </div>
                    <label for="edition_pub"> Formation Edition </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number" value="{{ $pub->edition_pub }}" name="edition_pub" class="form-control">
                        </div>
                    </div>
                    <label for="start_date_pub"> Date start</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="date" value="{{ $pub->start_date_pub }}" name="start_date_pub" class="form-control">
                        </div>
                    </div>
                    <label for="end_date_pub"> Date end</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="date" value="{{ $pub->end_date_pub }}" name="end_date_pub" class="form-control">
                        </div>
                    </div>
                    <label for="description_pub">Publication Description</label>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea id="editore{{ $pub->id_pub }}" name="description_pub" class="form-control" cols="45" rows="10">
                                {{ $pub->description_pub }}
                            </textarea>
                        </div>
                    </div>
                    <input class="hidden" type="text" name="id_pub" value="{{$pub->id_pub}}">
                    <input class="hidden" type="text" name="id_album" value="{{$pub->id_pub}}">
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-link waves-effect btn-primary" style="color: whitesmoke !important">SAVE CHANGES</button>
                        <button type="button" class="btn btn-link waves-effect btn-danger" style="color: whitesmoke !important" data-dismiss="modal">CLOSE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>