<form action="/classrooms/store" method="post">
    <input type="text" name="name" placeholder="Room Name">
    <input type="number" name="capacity" placeholder="Capacity">
    <select name="type">
        <option value="lecture">Lecture</option>
        <option value="lab">Lab</option>
    </select>
    <button type="submit">Add Classroom</button>
</form>
