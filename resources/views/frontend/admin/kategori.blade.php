<form>
  <div class="form-group">
    <label for="category_id">Category:</label>
    <select class="form-control" id="category_id">
      @foreach($categories as $category)
      <option value="{{ $category->id }}">{{ $category->name }}</option>
      @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Generate</button>
</form>

<table class="table table-bordered" id="questions-table">
  <thead>
    <tr>
      <th>Id</th>
      <th>Question</th>
      <th>Answer</th>
    </tr>
  </thead>
</table>

<script>
$(function() {
  $('form').submit(function(e) {
    e.preventDefault();

    var categoryId = $('#category_id').val();

    $('#questions-table').DataTable({
      processing: true,
      serverSide: true,
      destroy: true,
      ajax: '/questions/generate?category_id=' + categoryId,
      columns: [
        { data: 'id', name: 'id' },
        { data: 'text', name: 'text' },
        { data: 'answer', name: 'answer' },
      ]
    });
  });
});
</script>
