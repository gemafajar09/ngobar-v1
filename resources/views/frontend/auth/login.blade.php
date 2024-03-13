<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script src="https://cdn.tailwindcss.com"></script>
<body>
<div class="container mx-auto mt-10 flex justify-center">
  <div class="border shadow-md rounded-md w-1/3 p-3">

    <div class="flex justify-center">
      <span class="text-xl font-bold">Login</span>
    </div>

    <form action="" method="post">
      <div class="grid">
        <label for="">Email</label>
        <input name="email" type="text" class="p-2 rounded-md border">
      </div>
      <div class="grid">
        <label for="">Password</label>
        <input name="password" type="password" class="p-2 rounded-md border">
      </div>
      <div class="flex justify-end mt-3">
        <button type="submit" class="p-2 bg-blue-400 text-white rounded-md">Login</button>
      </div>
    </form>

  </div>
</div>
</body>
</html>