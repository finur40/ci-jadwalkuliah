<h2>Courses</h2>
<a href="/course/create">Add New Course</a>
<ul>
<?php foreach ($courses as $course): ?>
    <li><?= esc($course['name']) ?> (<?= esc($course['code']) ?>) - <a href="/course/edit/<?= $course['id'] ?>">Edit</a></li>
<?php endforeach; ?>
</ul>
