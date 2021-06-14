<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>    <nav class="navbar navbar-inverse">

    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('huurpleks') }}">View All Plekken</a></li>
    </ul>
</nav>

<div style="width: 900px;" class="container max-w-full mx-auto pt-4">
        <form method="POST" action="/huurpleks/{{ $huurplek->id }}">
            @method('PUT')
            @csrf

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="id">HuisNr? </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="id" name="id" value="{{ $huurplek->id }}">
            </div>
            <div class="mb-4">
                <label class="font-bold text-gray-800" for="bezet">Bezet? </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="bezet" name="bezet" value="{{ $huurplek->bezet }}">
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="schoon">schoon? </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="schoon" name="schoon" value="{{ $huurplek->schoon }}">
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="description">Alle klachten: </label>
                <textarea class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="description" name="description">{{ $huurplek->description }}</textarea>
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="start_date">start date </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="start_date" name="start_date" value="{{ $huurplek->start_date }}">
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="end_date">End date </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="start_date" name="end_date" value="{{ $huurplek->end_date }}">
            </div>

            <button  href="/huurpleks" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Update</button>
            <a href="/huurpleks" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Cancel</a>


        </form>
    </div>
</body>
</html>
