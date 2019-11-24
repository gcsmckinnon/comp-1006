<?php include_once(dirname(__DIR__) . '/_config.php') ?>
<?php not_admin_redirect(base_path . '/posts') ?>

<?php $form_data = $form_data ?? null ?>
<?php $_action = $_action ?? base_path . "/posts/create.php" ?>

<form action="<?= $_action ?>" method="post">
  <?php if (isset($_action)): ?>
    <input type="hidden" name="id" value="<?= $form_data['id'] ?>">
  <?php endif ?>

  <div class="form-group col">
    <label for="title">Title:</label>
    <input type="text" class="form-control" name="title" placeholder="Enter Post Title" value="<?= $form_data['title'] ?? null ?>">
  </div>

  <div class="form-group col">
    <label for="title">Status:</label>
    <select name="status" class="form-control">
      <option value="draft" <?= isset($form_data['status']) && $form_data['status'] === "draft" ? "selected" : null; ?>>Draft</option>
      <option value="published" <?= isset($form_data['status']) && $form_data['status'] === "draft" ? "selected" : null; ?>>Published</option>
    </select>
  </div>

  <div class="form-group col">
    <label for="title">Content:</label>
    <textarea name="content" class="summernote">
      <?= $form_data['content'] ?? null ?>
    </textarea>
  </div>

  <button class="btn btn-primary" type="submit">Submit</button>
</form>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    $(".summernote").summernote({
      toolbar: [
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['font', ['strikethrough', 'superscript', 'subscript', 'fontname', 'fontsize']],
        ['color', ['color']],
        ['para', ['style', 'ul', 'ol', 'paragraph']],
        ['misc', ['fullscreen', 'codeview', 'undo', 'redo']]
      ],
      height: 300
    });
  });
</script>