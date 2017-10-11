<label for="">Status</label>
<select class="form-control" name="published" id="">
    @if(isset($categories->id))
        <option value="0">nopublished</option>
        <option value="1">published</option>
        @endif
</select>
<label for="">named</label>
<input type="text" class="form-control" name="tile" placeholder="title"
       vale="{{$category->slug or ""}}" required>

<label for="">slug</label>
<input class="form-control"type="text" name="slug"
       placeholder="Automatic generation" value="{{$category->slug or ""}}"
 readonly="">

<label for="">Parent category</label>
<select name="parent_id" id="" class="form-control">
    <option value="0">without parent category</option>
    @include('partials.categorys',['categories'=>$categories])
</select>
<input type="submit" value="save" class="btn btn-primary" name="samename">