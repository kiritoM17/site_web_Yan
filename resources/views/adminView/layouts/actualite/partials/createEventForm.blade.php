{{csrf_field()}}
<label for="titre_act">Title</label>
<div class="form-group">
    <div class="form-line">
        <input type="text" name="titre_act" class="form-control" placeholder="typing your event title ...">
    </div>
</div>
<label for="id_parent">Theme</label>
<div class="form-group">
    <div class="form-line">
        <input type="text" name="resume_act" class="form-control  " maxlength="100" placeholder="typing your event theme..." >
    </div>
</div>
<label for="type_act">Location</label>
<div class="form-group  ">
    <div class="form-line">
        <input type="text" name="resume_act" class="form-control  " maxlength="100" placeholder="typing your event location..." >
    </div>
</div>
<label for="type_act">Edition</label>
<div class="form-group  ">
    <div class="form-line">
        <input type="number" name="resume_act" class="form-control  " placeholder="typing your event edition ..." min="1">
    </div>
</div>
<label for="type_act">Start date</label>
<div class="form-group  ">
    <div class="form-line">
        <input type="datetime-local" name="resume_act" class="form-control  ">
    </div>
</div>
<label for="type_act">End Date</label>
<div class="form-group  ">
    <div class="form-line">
        <input type="datetime-local" name="resume_act" class="form-control  ">
    </div>
</div>
<label for="images_actualite">Cover Image</label>
<div class="form-group">
    <div class="form-line">
        <input type="file" name="images_actualite[]" class="form-control" required>
    </div>
</div>
<label for="description_act">More Description</label>
<div class="form-group">
    <div class="form-line">
        <textarea id="editorAdd" name="description_act" class="form-control" cols="45" rows="10"></textarea>
    </div>
</div>