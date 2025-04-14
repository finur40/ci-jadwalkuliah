<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Classrooms</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <div class="p-4">
    <div class="flex justify-between items-center mb-4">
      <h2 class="text-2xl font-bold">Classrooms List</h2>
      <a href="/classrooms/create" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        Add New Classroom
      </a>
    </div>

    <div class="overflow-x-auto">
      <table class="min-w-full border border-gray-200 divide-y divide-gray-200">
        <thead class="bg-gray-100 text-gray-700 text-sm font-semibold text-left">
          <tr>
            <th class="px-4 py-2">#</th>
            <th class="px-4 py-2">Name</th>
            <th class="px-4 py-2">Capacity</th>
            <th class="px-4 py-2">Type</th>
            <th class="px-4 py-2">Action</th>
          </tr>
        </thead>
        <tbody class="text-gray-800 text-sm">
          <?php foreach ($classrooms as $index => $classroom): ?>
          <tr class="<?= $index % 2 === 0 ? 'bg-white' : 'bg-gray-50' ?>">
            <td class="px-4 py-2"><?= $index + 1 ?></td>
            <td class="px-4 py-2"><?= esc($classroom['name']) ?></td>
            <td class="px-4 py-2"><?= esc($classroom['capacity']) ?></td>
            <td class="px-4 py-2"><?= esc($classroom['type']) ?></td>
            <td class="px-4 py-2">
              <div class="flex space-x-2">
                <a href="/classrooms/edit/<?= $classroom['id'] ?>" class="bg-green-200 text-green-800 px-3 py-1 rounded hover:bg-green-300">
                  Edit
                </a>
                <form action="/classrooms/delete/<?= $classroom['id'] ?>" method="post" onsubmit="return confirm('Are you sure?')">
                  <button type="submit" class="bg-red-200 text-red-800 px-3 py-1 rounded hover:bg-red-300">
                    Delete
                  </button>
                </form>
              </div>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <div class="mt-3 text-sm text-gray-600">
      Showing <?= count($classrooms) ?> entries
    </div>
  </div>
</body>
</html>

