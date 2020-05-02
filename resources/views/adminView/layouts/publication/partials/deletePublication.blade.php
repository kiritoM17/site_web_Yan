<div class="modal fade" id="deletePublication{{$pub->id_pub}}" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title center-block" id="largeModalLabel" >Delete Publication </h4>
            </div>
            <div class="modal-body">
                <form id="frmFileUpload"  method="POST" enctype="multipart/form-data" class="dropzone" action="publication/destroy">
                    {{csrf_field()}}
                    <center><h3>Do you want to delete {{ $pub->title_pub }} ?</h3></center>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="id_pub" class="form-control  hidden" value="{{$pub->id_pub}}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-link waves-effect btn-primary" style="color: whitesmoke !important">Delete</button>
                        <button type="button" class="btn btn-link waves-effect btn-danger" style="color: whitesmoke !important" data-dismiss="modal">CLOSE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>