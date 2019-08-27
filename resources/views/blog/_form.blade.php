<div class="form-row">
    <div class="form-group col-md-6">
        <label for="title">Title</label>
        <input type="text" name="title" value="{{ $post ? $post->title : '' }}" class="form-control" id="title" placeholder="title">
    </div>
    <div class="form-group col-md-6">
        <label for="slug">Slug</label>
        <input type="text" value="{{ $post ? $post->slug : '' }}" name="slug" class="form-control" id="slug" placeholder="Slug">
    </div>
</div>
<div class="form-group">
    <label for="content">Content</label>
    <textarea class="form-control" rows="3" name="content" id="content">{{ $post ? $post->content : '' }}</textarea>
</div>

<div class="form-group">
    <label for="featured_image">Upload a featured image</label>
    <input type="file" name="featured_image" class="form-control" id="featured_image">
</div>

<button type="submit" class="btn btn-primary">{{ $submitText }}</button>