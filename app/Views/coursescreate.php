<form action="/courses/store" method="post">
    <input type="text" name="code" placeholder="Course Code">
    <input type="text" name="title" placeholder="Title">
    <input type="number" name="sks" placeholder="SKS">
    <select name="program_id">
        <?php foreach ($programs as $program): ?>
            <option value="<?= $program['id'] ?>"><?= $program['name'] ?></option>
        <?php endforeach; ?>
    </select>
    <button type="submit">Add Course</button>
</form>
