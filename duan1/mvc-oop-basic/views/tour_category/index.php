<h2>Danh mục Tour</h2>

<a href="?act=tourcategory/create">+ Thêm danh mục</a>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Tên danh mục</th>
        <th>Mô tả</th>
        <th>Hành động</th>
    </tr>

    <?php foreach ($categories as $c): ?>
    <tr>
        <td><?= $c['category_id'] ?></td>
        <td><?= $c['category_name'] ?></td>
        <td><?= $c['description'] ?></td>
        <td>
            <a href="?act=tourcategory/edit&id=<?= $c['category_id'] ?>">Sửa</a>
            <a href="?act=tourcategory/delete&id=<?= $c['category_id'] ?>" onclick="return confirm('Xóa?')">Xóa</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
