<div class="form-group form-float">
    <div class="form-line @error('title') focused error @enderror" >
        <input type="text" class="form-control" name="title" required  @error('title') aria-invalid="true" @enderror value="{{old('title',$category->title)}}" >
        <label class="form-label">Title</label>
    </div>
    @error('title')
    <p class="d-block" style="color:red">{{$message}}</p>
    @enderror
</div>




<div class="form-group form-float">
    <div class="form-line @error('description') focused error @enderror ">
        <textarea name="description" cols="30" rows="5" class="form-control" required >
        {{old('description',$category->description)}}
        </textarea>
        <label class="form-label">Description</label>
    </div>
   
</div>
@error('description')
    <p class=" d-block" style="color:red">{{$message}}</p>
    @enderror
<div class="form-group">
    <input type="radio" name="status" id="active" class="with-gap"value='active' @if(old('status',$category->status)=='active') 	checked @endif   >
    <label for="active"> Active</label>

    <input type="radio" name="status" id="inactive" class="with-gap" value="inactive" @if(old('status',$category->status)=='inactive') 	checked @endif >
    <label for="inactive" class="m-l-20">Inactive</label>

    @error('status')
    <p class="d-block" style="color:red">{{$message}}</p>
    @enderror
</div>


<button class="btn btn-danger waves-effect" type="submit">{{$submit_button}}</button>
</form>
</div>
</div>
</div>
</div>
<!-- #END# Basic Validation -->

</div>
</section>