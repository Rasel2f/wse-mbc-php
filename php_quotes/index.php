<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  
  <style>
       .quotes span {
                display: block;
                text-align: end;
                padding: 10px 0;
                text-decoration: underline;
                color: #6a6a6a;
                font-size: 12px;
            }
  </style>
</head>
<body class="bg-gray-100 p-6">
    <div class="container mx-auto">
        <?php 

            $quotes = [
                "-হযরত মোহাম্মদ সাঃ" => "শক্তিশালী সে, যে রাগের সময় নিজেকে নিয়ন্ত্রণে রাখতে পারে।",
                "-উলিয়ামস হেডস" => "পরিপূর্ণ তৃপ্তি নিয়ে কুঁড়ে ঘরে থাকাও ভালো, অতৃপ্তি নিয়ে বিরাট অট্টালিকায় থাকার কোন সার্থকতা নেই।",
                "-রেদোয়ান মাসুদ" => "মানুষ প্রতিষ্ঠিত হওয়ার পরে যেই ব্যবহারটা করে সেটাই তার আসল চরিত্র।",
                "-রেদোয়ান মাসুদ" => "মেধা থাকলেই তাকে মেধাবী বলা যায় না, মেধাবী হলো সে-ই যার মেধা না থাকা সত্ত্বেও চেষ্টা দিয়ে নিজেকে এগিয়ে নিয়ে যায়।",
                "-জন লিভগেট" => "যে নদীর গভীরতা বেশি, তার বয়ে যাওয়ার শব্দ কম।",
                "–কনরাড হিলটন" => "সফল মানুষেরা কাজ করে যায়। তারা ভুল করে, ভুল শোধরায় – কিন্তু কখনও হাল ছাড়ে না।",
                "-হোমার" => "অসৎ আনন্দের চেয়ে পবিত্র বেদনা ভালো।",
            ];

            $randomData = array_rand($quotes);
            $displayData = $quotes[$randomData];
        
        ?>
        
        <div class="max-w-md mx-auto bg-white p-5 border rounded-md shadow-md quotes">
            <h1 class="text-xl font-bold underline mb-4">মনীষীদের উক্তি</h1>
            
            <p>
                “<?php echo $displayData; ?>”
                <span><?php echo $randomData; ?></span>
            </p>

        </div>
    </div>

</body>
</html>