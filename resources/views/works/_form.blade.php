<div class="form-row">
    <div class="form-group col-md-6">
        <label for="title">Title</label>
        <input type="text" name="title" value="{{ $work ? $work->title : '' }}" class="form-control" id="title" placeholder="title">
    </div>
    <div class="form-group col-md-6">
        <label for="slug">Slug</label>
        <input type="text" value="{{ $work ? $work->slug : '' }}" name="slug" class="form-control" id="slug" placeholder="Slug">
    </div>
    <div class="form-group col-md-6">
        <label for="link">Link</label>
        <input type="text" value="{{ $work ? $work->link : '' }}" name="link" class="form-control" id="link" placeholder="http://example.com">
    </div>
</div>
<div class="form-group">
    <label for="content">Content</label>
    <textarea class="form-control" rows="3" name="content" id="content">{{ $work ? $work->content : '' }}</textarea>
</div>

<div class="form-group">
    <label for="featured_image">Upload a featured image</label>
    <input type="file" name="featured_image" class="form-control" id="featured_image">
</div>

<button type="submit" class="btn btn-primary">{{ $submitText }}</button>