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
        .output li {
                border: 1px solid #ddd;
                margin: 5px 0;
                padding: 8px;
            }
    </style>
</head>
<body class="bg-gray-100 p-6">
    <div class="container mx-auto">
        <div class="max-w-md mx-auto bg-white p-5 border rounded-md shadow-md">
            <h1 class="text-xl font-bold underline">Form Output</h1>
            <?php
                $name = '';
                $gender = '';
                $subscribe = '';
                $date = '';
                $time = '';
                $options = [];
                $district = '';
                $multicheckbox = [];
                
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
                    $gender = isset($_POST['gender']) ? htmlspecialchars($_POST['gender']) : '';
                    $subscribe = isset($_POST['subscribe']) ? "Yes" : 'No';
                    $date = isset($_POST['date']) ? htmlspecialchars($_POST['date']) : '';
                    $time = isset($_POST['time']) ? htmlspecialchars($_POST['time']) : '';
                    $options = isset($_POST['options']) ? $_POST['options'] : [];
                    $district = isset($_POST['district']) ? $_POST['district'] : '';
                    $multicheckbox = isset($_POST['multicheckbox']) ? $_POST['multicheckbox'] : [];
                    
                    echo '<div class="output"><ul>';
                        echo '<li><strong>Name is : </strong>'. $name .'</li>';
                        echo '<li><strong>Gender : </strong>'. $gender .'</li>';
                        echo '<li><strong>Subscribe : </strong>'. $subscribe .'</li>';
                        echo '<li><strong>Date is : </strong>'. $date .'</li>';
                        echo '<li><strong>Time is : </strong>'. $time .'</li>';
                        echo '<li><strong>Options : </strong>'. implode(", ", $options) .'</li>';
                        echo '<li><strong>District is : </strong>'. $district .'</li>';
                        echo '<li><strong>Fruits : </strong>'. implode(", ", $multicheckbox) .'</li>';
                    echo '</ul></div>';
                }
            
            ?>

        </div>

        <div class="max-w-md mx-auto bg-white p-5 border rounded-md shadow-md">
            <h1 class="text-xl font-bold underline mb-4">Welcome to my new dom project - Class-8</h1>

            <form action="" method="POST">
                <!--  -->
                <div class="mb-4">
                    <label class="block text-sm" for="name">Name: </label>
                    <input value="<?php echo $name; ?>" type="text" name="name" id="name" class="border mt-1 p-2 w-full rounded" >
                </div>
                <!--  -->
                <div class="mb-4">
                    <label class="block text-sm" for="gender">Gender:</label>
                    <div class="bt-1 spece-x-4">
                        <label for="male" class="inline-flex items-center mr-2">
                            <input <?php echo $gender === "Male" ? "checked" : ''; ?> type="radio" name="gender" value="Male" id="male" class="form-radio">
                            <span class="ml-2">Male</span>
                        </label>
                        <label for="female" class="inline-flex items-center">
                            <input <?php echo $gender === "Female" ? "checked" : ''; ?> type="radio" name="gender" value="Female" id="female" class="form-radio">
                            <span class="ml-2">Female</span>
                        </label>
                    </div>
                </div>
                <!--  -->
                <div class="mb-4">
                    <label class="block text-sm" for="subscribe">Subscribe: </label>
                    <input <?php echo $subscribe === "Yes" ? "checked" : ''; ?> type="checkbox" name="subscribe" id="subscribe" class="form-checkbox">
                </div>
                <!--  -->
                <div class="mb-4">
                    <label class="block text-sm" for="datepicker">Pick a date: </label>
                    <input value="<?php echo $date; ?>" type="text" name="date" id="datepicker" class="border mt-1 p-2 w-full rounded">
                </div>
                <!--  -->
                <div class="mb-4">
                    <label class="block text-sm" for="timepicker">Pick a Time: </label>
                    <input value="<?php echo $time; ?>" type="text" name="time" id="timepicker" class="border mt-1 p-2 w-full rounded">
                </div>
                <!--  -->
                <div class="mb-4">
                    <label class="block text-sm" for="options">Select Options: </label>
                    <select name="options[]" id="options" multiple class="border mt-1 p-2 w-full rounded">
                        <option <?php echo in_array('Option1', $options) ? "selected" : ''; ?> value="Option1">Option 1</option>
                        <option <?php echo in_array('Option2', $options) ? "selected" : ''; ?> value="Option2">Option 2</option>
                        <option <?php echo in_array('Option3', $options) ? "selected" : ''; ?> value="Option3">Option 3</option>
                        <option <?php echo in_array('Option4', $options) ? "selected" : ''; ?> value="Option4">Option 4</option>
                        <option <?php echo in_array('Option5', $options) ? "selected" : ''; ?> value="Option5">Option 5</option>
                    </select>
                </div>
                <!--  -->
                <div class="mb-4">
                    <label class="block text-sm" for="district">Select a District: </label>
                    <select name="district" id="district" class="border mt-1 p-2 w-full rounded">
                        <option <?php echo $district === "Select" ? "selected" : ''; ?> value="Select">Select</option>
                        <option <?php echo $district === "Bagerhat" ? "selected" : ''; ?> value="Bagerhat">Bagerhat</option>
                        <option <?php echo $district === "Khulna" ? "selected" : ''; ?> value="Khulna">Khulna</option>
                        <option <?php echo $district === "Dhaka" ? "selected" : ''; ?> value="Dhaka">Dhaka</option>
                    </select>
                </div>
                <!-- Multi-checkbox -->
                <div class="mb-4">
                    <label class="block text-sm">Select your favorite fruits</label>
                    <div class="space-y-2">
                        <label class="inline-flex items-center">
                            <input <?php echo in_array('Apple', $multicheckbox) ? "checked" : ''; ?>  type="checkbox" name="multicheckbox[]" value="Apple" class="form-checkbox text-indigo-600">
                            <span class="m-2">Apple</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input <?php echo in_array('Banana', $multicheckbox) ? "checked" : ''; ?> type="checkbox" name="multicheckbox[]" value="Banana" class="form-checkbox text-indigo-600">
                            <span class="m-2">Banana</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input <?php echo in_array('Mango', $multicheckbox) ? "checked" : ''; ?> type="checkbox" name="multicheckbox[]" value="Mango" class="form-checkbox text-indigo-600">
                            <span class="m-2">Mango</span>
                        </label>
                    </div>
                </div>
                <!--  -->
                <div class="mb-4">
                    <button type="submit" class="bg-gray-600 text-white border mt-1 p-2 rounded">Submit</button>
                </div>

            </form>

        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#options').select2();
        });

        flatpickr("#datepicker", {
            dateFormat: "Y-m-d"
        });

        flatpickr("#timepicker", {
            enableTime: true,
            noCalendar: true,
            daetFormat: "H:i"
        });
    </script>
</body>
</html>