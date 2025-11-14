<h2>Sửa danh mục</h2>

<form method="POST" action="?act=tourcategory/update">
    <input type="hidden" name="id" value="<?= $category['category_id'] ?>">

    Tên danh mục:
    <input name="category_name" value="<?= $category['category_name'] ?>"><br><br>

    Mô tả:
    <textarea name="description"><?= $category['description'] ?></textarea><br><br>

    <button type="submit">Cập nhật</button>
</form>
