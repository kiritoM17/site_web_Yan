<div class="modal fade" id="addImage{{$pub->id_pub}}" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title center-block" id="largeModalLabel" >ADD MEDIA TO ALBUM </h4>
            </div>
            <div class="modal-body">
                <form id="frmFileUpload"  method="POST" enctype="multipart/form-data" class="dropzone" action="media/store">
                    {{csrf_field()}}
                    <label for="email_address">{{$pub->albums->nom_album}}</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="id_album" class="form-control  hidden" value="{{$pub->albums->id_album}}">
                        </div>
                    </div>
                    <hr>
                    <div class="dz-message">
                        <div class="drag-icon-cph">
                            <i class="material-icons">touch_app</i>
                        </div>
                        <h3>Drop files here or click to upload.</h3>
                        <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em>
                    </div>
                    <div class="fallback">
                        <input name="images_medias[]" type="file" multiple />
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-link waves-effect btn-primary" style="color: whitesmoke !important">SAVE CHANGES</button>
                        <button type="button" class="btn btn-link waves-effect btn-danger" style="color: whitesmoke !important" data-dismiss="modal">CLOSE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>