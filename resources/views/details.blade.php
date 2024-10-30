<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Detalles</title>
</head>
<body>
    <header>
        <x-navbarCine/>
    </header>
    <main>
      <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    theme: {
      extend: {
        gridTemplateRows: {
          '[auto,auto,1fr]': 'auto auto 1fr',
        },
      },
    },
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->


    <!-- Image gallery -->
    <div class="mx-auto mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
      <div class="aspect-h-4 aspect-w-3 hidden overflow-hidden rounded-lg lg:block">
        <img src="{!! asset('img/9.jpg') !!}" alt="Eternals" class="h-full w-full object-cover object-center">
      </div>
    

    <!-- Product info -->
    <div class="mx-auto max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-16">
      <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
        <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Sinópsis</h1>
      </div>

      <!-- Options -->
      <div class="mt-4 lg:row-span-3 lg:mt-0">
        <h2 class="#">Costo</h2>
        <p class="text-3xl tracking-tight text-gray-900">$192</p>


        <form class="mt-10">
          <!-- Colors -->
          <div>
            <h3 class="text-sm font-medium text-gray-900">Clasificacion</h3>

            <fieldset aria-label="Choose a color" class="mt-4">
              <div class="flex items-center space-x-3">
                <!-- Active and Checked: "ring ring-offset-1" -->
                <label aria-label="White" class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 ring-gray-400 focus:outline-none">
                  <input type="radio" name="color-choice" value="White" class="sr-only">
                  <span aria-hidden="true" class="h-8 w-8 rounded-full border border-black border-opacity-10 bg-white"></span>
                </label>
                <!-- Active and Checked: "ring ring-offset-1" -->
                <label aria-label="Gray" class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 ring-gray-400 focus:outline-none">
                  <input type="radio" name="color-choice" value="Gray" class="sr-only">
                  <span aria-hidden="true" class="h-8 w-8 rounded-full border border-black border-opacity-10 bg-gray-200"></span>
                </label>
                <!-- Active and Checked: "ring ring-offset-1" -->
                <label aria-label="Black" class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 ring-gray-900 focus:outline-none">
                  <input type="radio" name="color-choice" value="Black" class="sr-only">
                  <span aria-hidden="true" class="h-8 w-8 rounded-full border border-black border-opacity-10 bg-gray-900"></span>
                </label>
              </div>
            </fieldset>
          </div>
          <button type="submit" class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Add to bag</button>
        </form>
      </div>

      <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pb-16 lg:pr-8 lg:pt-6">
        <!-- Description and details -->
        <div>
          <div class="space-y-6">
            <p class="text-base text-gray-900">The Basic Tee 6-Pack allows you to fully express your vibrant personality with three grayscale options. Feeling adventurous? Put on a heather gray tee. Want to be a trendsetter? Try our exclusive colorway: &quot;Black&quot;. Need to add an extra pop of color to your outfit? Our white tee has you covered.</p>
          </div>
        </div>

        <div class="mt-10">
          <h3 class="text-sm font-medium text-gray-900">Highlights</h3>

          <div class="mt-4">
            <ul role="list" class="list-disc space-y-2 pl-4 text-sm">
              <li class="text-gray-400"><span class="text-gray-600">Hand cut and sewn locally</span></li>
              <li class="text-gray-400"><span class="text-gray-600">Dyed with our proprietary colors</span></li>
              <li class="text-gray-400"><span class="text-gray-600">Pre-washed &amp; pre-shrunk</span></li>
              <li class="text-gray-400"><span class="text-gray-600">Ultra-soft 100% cotton</span></li>
            </ul>
          </div>
        </div>

        <div class="mt-10">
          <h2 class="text-sm font-medium text-gray-900">Details</h2>

          <div class="mt-4 space-y-6">
            <p class="text-sm text-gray-600">The 6-Pack includes two black, two white, and two heather gray Basic Tees. Sign up for our subscription service and be the first to get new, exciting colors, like our upcoming &quot;Charcoal Gray&quot; limited release.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
        
    </main>
</body>
<footer>
    <x-footer/>
</footer>
</html>