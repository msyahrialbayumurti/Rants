<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <form>
        <label class="block">
          <span class="block text-sm font-medium text-slate-600">Email</span>
          <input type="email" placeholder="example@mail.com" class="peer border border-slate-300 rounded-md focus:outline-none focus:ring-2 focus:ring-slate-600 focus:border-transparent invalid:border-slate-600 invalid:text-slate-600"/>
          <p class="mt-2 invisible peer-invalid:visible text-pink-600 text-sm">
            Please provide a valid email address.
          </p>
        </label>
      </form>
</body>
</html>