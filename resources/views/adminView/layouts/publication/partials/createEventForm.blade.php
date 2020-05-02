{{csrf_field()}}
<label for="title_pub">Publication Title</label>
<div class="form-group">
    <div class="form-line">
        <input type="text" name="title_pub" class="form-control" placeholder="typing your publication title ..." maxlength="100">
    </div>
</div>
<label for="resume_pub">Publication Resume</label>
<div class="form-group">
    <div class="form-line">
        <input type="text" name="resume_pub" class="form-control  " maxlength="200" placeholder="typing your publication  resume here..." >
    </div>
</div>
<label for="images_couverture"> Publication Cover Image</label>
<div class="form-group">
    <div class="form-line">
        <input type="file" name="images_couverture[]" class="form-control" required>
    </div>
</div>

<label for="id_type_pub"> Type Publication</label>
<div class="form-group">
    <div class="form-line">
        <select name="id_type_pub" id="type_pub" class="form-control" onchange="personalizePublication();">
            <option value="">----Select publication type -----</option>
            @foreach(App\Models\TypePublication::orderBy('title_type_pub')->get() as $type_pub)
                <option value="{{$type_pub->id_type_pub}}">{{$type_pub->title_type_pub}}</option>
            @endforeach
        </select>
    </div>
</div>
<div id="event" class="hidden">
    <div id="formation" class="hidden">
        <label for="theme_pub"> Formation Theme</label>
        <div class="form-group">
            <div class="form-line">
                <input type="text" name="theme_pub" class="form-control" maxlength="100" placeholder="type formation theme here...">
            </div>
        </div>
        <label for="edition_pub"> Formation Edition </label>
        <div class="form-group">
            <div class="form-line">
                <input type="number" name="edition_pub" class="form-control">
            </div>
        </div>
    </div>
    <label for="start_date_pub"> Date start</label>
    <div class="form-group">
        <div class="form-line">
            <input type="date" name="start_date_pub" class="form-control">
        </div>
    </div>
    <label for="end_date_pub"> Date end</label>
    <div class="form-group">
        <div class="form-line">
            <input type="date" name="end_date_pub" class="form-control">
        </div>
    </div>
</div>
<label for="description_pub">Publication Description</label>
<div class="form-group">
    <div class="form-line">
        <textarea id="editorAdd" name="description_pub" class="form-control" cols="45" rows="10"></textarea>
    </div>
</div>