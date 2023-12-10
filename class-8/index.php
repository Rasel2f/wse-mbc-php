<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  
  <style>
        textarea:focus, input:focus{
            outline: none;
        }
    </style>
</head>
<body class="bg-gray-100 p-6">
    <div class="container">
        <div class="max-w-md mx-auto bg-white p-5 border rounded-md shadow-md">
            <h1 class="text-xl font-bold underline mb-4">Welcome to my new dom project. - Class-8</h1>

            <form action="" method="POST">
                <!--  -->
                <div class="mb-4">
                    <label class="block text-sm" for="name">Name: </label>
                    <input type="text" id="name" class="border mt-1 p-2 w-full rounded" name="name">
                </div>
                <!--  -->
                <div class="mb-4">
                    <label class="block text-sm" for="name">Gender:</label>
                    <div class="bt-1 spece-x-4">
                        <label for="male" class="inline-flex items-center mr-2">
                            <input type="radio" name="gender" id="male" value="male" class="form-radio">
                            <span class="ml-2">Male</span>
                        </label>
                        <label for="female" class="inline-flex items-center">
                            <input type="radio" name="gender" id="female" value="male" class="form-radio">
                            <span class="ml-2">Female</span>
                        </label>
                    </div>
                </div>
                <!--  -->
                <div class="mb-4">
                    <label class="block text-sm" for="subscribe">Subscribe: </label>
                    <input type="checkbox" id="subscribe" class="form-checkbox" name="name">
                </div>
                <!--  -->
                <div class="mb-4">
                    <label class="block text-sm" for="datepicker">Pick a date: </label>
                    <input type="text" id="datepicker" class="border mt-1 p-2 w-full rounded" name="name">
                </div>
                <!--  -->
                <div class="mb-4">
                    <label class="block text-sm" for="options">Select Options: </label>
                    <select class="border mt-1 p-2 w-full rounded" name="options[]" id="options" multiple>
                        <option value="option1">Option 1</option>
                        <option value="option2">Option 2</option>
                        <option value="option3">Option 3</option>
                        <option value="option4">Option 4</option>
                        <option value="option5">Option 5</option>
                    </select>
                </div>
                <!--  -->
                <div class="mb-4">
                    <label class="block text-sm" for="district">Select a District: </label>
                    <select class="border mt-1 p-2 w-full rounded" name="district" id="district">
                        <option value="select">Select</option>
                        <option value="bagerhat">Bagerhat</option>
                        <option value="khulna">Khulna</option>
                        <option value="dhaka">Dhaka</option>
                    </select>
                </div>
                <!--  -->
                <div class="mb-4">
                    <button type="submit" id="submit" class="border mt-1 p-2 rounded" name="submit">Submit</button>
                </div>

            </form>

        </div>
        <div class="max-w-md mx-auto bg-white p-5 border rounded-md shadow-md">
            <h1 class="text-xl font-bold underline">Form Output</h1>
        </div>
    </div>

    <script>

        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('#options').select2();
        });

        flatpickr("#datepicker", {

        });
    </script>
</body>
</html>