<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inspirational Quote Generator</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 20px;
            background-image: linear-gradient(to right bottom, #74ebd5, #9face6);
            background-attachment: fixed;
        }
        
        .quote-container {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 90%;
            text-align: center;
            position: relative;
        }
        
        .quote-text {
            font-size: 24px;
            line-height: 1.6;
            margin-bottom: 20px;
            color: #333;
            font-weight: 300;
        }
        
        .quote-author {
            font-size: 18px;
            color: #666;
            font-style: italic;
            text-align: right;
        }
        
        .quote-mark {
            font-size: 80px;
            position: absolute;
            opacity: 0.1;
            color: #333;
            line-height: 1;
        }
        
        .quote-mark-left {
            top: 20px;
            left: 20px;
        }
        
        .quote-mark-right {
            bottom: 20px;
            right: 20px;
            transform: rotate(180deg);
        }
        
        .refresh-button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 12px 24px;
            margin-top: 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 16px;
        }
        
        .refresh-button:hover {
            background-color: #45a049;
        }
        
        @media (max-width: 600px) {
            .quote-text {
                font-size: 18px;
            }
            
            .quote-author {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <?php 
        $quote_1 ="The only way to do great work is to love what you do. - Steve Jobs";
        $quote_2 ="Life is what happens when you're busy making other plans - John Lennon";
        $quote_3 = "In the end, we only regret the chances we didn't take. - Lewis Carroll";
        $quote_4 = "The best way to predict the future is to create it. - Peter Drucker";
        $quote_5 = "Happiness depends upon ourselves. - Aristotle";
        $quote_6 = "It's not the years in your life that count, it's the life in your years. - Abraham Lincoln";
        $quote_7 = "The only limit to our realization of tomorrow is our doubts of today. - Franklin D. Roosevelt";
        $quote_8 = "Do what you can, with what you have, where you are. - Theodore Roosevelt";
        $quote_9 = "Success is not final, failure is not fatal: It is the courage to continue that counts. - Winston Churchill";
        $quote_10 = "You miss 100% of the shots you don't take. - Wayne Gretzky";
        $quote_11 = "Your time is limited, don't waste it living someone else's life. - Steve Jobs";
        $quote_12 = "Life isn't about waiting for the storm to pass, it's about learning how to dance in the rain. - Vivian Greene";
        $quote_13 = "A journey of a thousand miles begins with a single step. - Lao Tzu";
        $quote_14 = "Believe you can and you're halfway there. - Theodore Roosevelt";
        $quote_15 = "It does not matter how slowly you go as long as you do not stop. - Confucius";
        $quote_16 = "The only way to have a friend is to be one. - Ralph Waldo Emerson";
        $quote_17 = "The harder you work for something, the greater you'll feel when you achieve it. - Unknown";
        $quote_18 = "The best revenge is massive success. - Frank Sinatra";
        $quote_19 = "It always seems impossible until it's done. - Nelson Mandela";
        $quote_20 = "Everything you can imagine is real. - Pablo Picasso";
        $quote_21 = "What lies behind us and what lies before us are tiny matters compared to what lies within us. - Ralph Waldo Emerson";
        $quote_22 = "To be yourself in a world that is constantly trying to make you something else is the greatest accomplishment. - Ralph Waldo Emerson";
        $quote_23 = "Strive not to be a success, but rather to be of value. - Albert Einstein";
        $quote_24 = "If you want to go fast, go alone. If you want to go far, go together. - African Proverb";
        $quote_25 = "Life is either a daring adventure or nothing at all. - Helen Keller";
        $quote_26 = "Do not go where the path may lead, go instead where there is no path and leave a trail. - Ralph Waldo Emerson";
        $quote_27 = "You must be the change you wish to see in the world. - Mahatma Gandhi";
        $quote_28 = "I am not what happened to me, I am what I choose to become. - Carl Jung";
        $quote_29 = "To live a creative life, we must lose our fear of being wrong. - Joseph Chilton Pearce";
        $quote_30 = "You only live once, but if you do it right, once is enough. - Mae West";
        $quote_31 = "Don't watch the clock; do what it does. Keep going. - Sam Levenson";
        $quote_32 = "The mind is everything. What you think you become. - Buddha";
        $quote_33 = "The only impossible journey is the one you never begin. - Tony Robbins";
        $quote_34 = "I can't change the direction of the wind, but I can adjust my sails to always reach my destination. - Jimmy Dean";
        $quote_35 = "What we think, we become. - Buddha";
        $quote_36 = "Life is 10% what happens to us and 90% how we react to it. - Charles R. Swindoll";
        $quote_37 = "In three words I can sum up everything I've learned about life: it goes on. - Robert Frost";
        $quote_38 = "The best way out is always through. - Robert Frost";
        $quote_39 = "We do not remember days, we remember moments. - Cesare Pavese";
        $quote_40 = "The purpose of life is not to be happy. It is to be useful, to be honorable, to be compassionate, to have it make some difference that you have lived and lived well. - Ralph Waldo Emerson";
        $quote_41 = "Time flies over us but leaves its shadow behind. - Nathaniel Hawthorne";
        $quote_42 = "You can never cross the ocean until you have the courage to lose sight of the shore. - Christopher Columbus";
        $quote_43 = "Our lives begin to end the day we become silent about things that matter. - Martin Luther King Jr.";
        $quote_44 = "Don't let yesterday take up too much of today. - Will Rogers";
        $quote_45 = "Success is not how high you have climbed, but how you make a positive difference to the world. - Roy T. Bennett";
        $quote_46 = "The only true wisdom is in knowing you know nothing. - Socrates"; 
        $random_quote = "quote_" . rand(1,46);
        
        // Split the quote into text and author
        $full_quote = $$random_quote;
        $quote_parts = explode(" - ", $full_quote);
        $quote_text = $quote_parts[0];
        $quote_author = isset($quote_parts[1]) ? $quote_parts[1] : "Unknown";
    ?>  

    <div class="quote-container">
        <div class="quote-mark quote-mark-left">"</div>
        <div class="quote-text"><?php echo $quote_text; ?></div>
        <div class="quote-author">- <?php echo $quote_author; ?></div>
        <div class="quote-mark quote-mark-right">"</div>
        <form method="post">
            <button class="refresh-button" type="submit">New Quote</button>
        </form>
    </div>
</body>
</html>