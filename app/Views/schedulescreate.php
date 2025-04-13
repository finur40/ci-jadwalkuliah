<form action="/schedules/store" method="post">
    <label>Course:</label>
    <select name="course_id">
        <?php foreach($courses as $course): ?>
            <option value="<?= $course['id'] ?>"><?= $course['title'] ?></option>
        <?php endforeach; ?>
    </select>

    <label>Classroom:</label>
    <select name="classroom_id">
        <?php foreach($classrooms as $room): ?>
            <option value="<?= $room['id'] ?>"><?= $room['name'] ?></option>
        <?php endforeach; ?>
    </select>

    <label>Day:</label>
    <select name="day">
        <option>Monday</option><option>Tuesday</option><option>Wednesday</option>
        <option>Thursday</option><option>Friday</option>
    </select>

    <label>Start Time:</label>
    <input type="time" name="start_time">

    <label>End Time:</label>
    <input type="time" name="end_time">

    <button type="submit">Schedule Lecture</button>
</form>
