

<div class="form-group ">

    <div class="form-line @error('short_description') focused error @enderror ">
    <input type="text" class="form-control" name="short_description" required  @error('short_description') aria-invalid="true" @enderror value="{{old('short_description',$content->short_description)}}" >
        <label class="form-label">Short Description</label>
    </div>
    @error('short_description')
    <p class="d-block" style="color:red;margin:top 20px;">{{$message}}</p>
    @enderror

</div>


<div class="form-group">

        <select  name="category" class="selectpicker"  >
            <option value="">Select Category</option>
            @foreach($categories as $category)
            <option value="{{$category->id}}" @if (old('category',$content->category_id)==$category->id) selected @endif >{{$category->title}}</option>
            @endforeach
        </select>
        @error('category')
    <p class="d-block" style="color:red">{{$message}}</p>
    @enderror
        <style>
        button.btn.dropdown-toggle{
           width: 1119px !important;
           height: 40px !important;
           
       }
       .filter-option-inner-inner,span.text {
    font-size: large !important;
}
.form-group{
    margin-top: 30px;
}

       </style>
   

 




    <div class="form-group">
    <textarea id="summernote" name="new_content">
        {{old('new_content',$content->new_content)}}
    </textarea>
    </div>
    @error('new_content')
    <p class="d-block" style="color:red">{{$message}}</p>
    @enderror


<div class="form-group">
<label class="form-label" style="display: block;">Basic Image:</label>
   <input type="file" name="image" value="{{ old('image',$content->image)}}"   > 
  <img src="{{$content->image_url}}" alt="{{$content->image_url}}" width="100px" height="120px" style="margin:20px">

    @error('image')
    <p class="d-block" style="color:red">{{$message}}</p>
    @enderror
</div>


<div class="form-group">
<label class="form-label" style="display: block;">Images:</label>
   <input type="file" name="images[]" multiple  > 
   @if($content->images)
   @foreach($content->images as $image)
 
   <img class=img src="{{$image->image_url}}" alt="" width="100px" height="120px" style="margin:20px;">
 <a href=""  class="del_photo"> <i  ></i></a>
   

  
   @endforeach
   @endif
</div>
<div class="form-group">
<label class="form-label" style="display: block;">Important:</label>

    <input type="radio" name="important" id="yes" class="with-gap"value='yes' @if(old('important',$content->important)=='yes') 	checked @endif   >
    <label for="yes"> Yes</label>

    <input type="radio" name="important" id="no" class="with-gap" value="no" @if(old('important',$content->important)=='no') 	checked @endif >
    <label for="no" class="m-l-20">No</label>

    @error('important')
    <p class="d-block" style="color:red">{{$message}}</p>
    @enderror
</div>


<div class="clearfix"></div>
<button class="btn btn-danger waves-effect" type="submit">{{$submit_button}}</button>
</form>
</div>
</div>
</div>
</div>
<!-- #END# Basic Validation -->

</div>
</section>