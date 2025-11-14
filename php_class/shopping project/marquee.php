<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scrolling Marquee with Product Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .marquee-wrapper {
            width: 100%;
            overflow: hidden;
            background: #ffffff;
            border: 1px solid #ddd;
            padding: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin: 20px 0;
            position: relative;
        }

        .marquee-content {
            display: flex;
            white-space: nowrap;
            animation: marquee 20s linear infinite;
        }

        .marquee-item {
            margin: 0 3rem;
            font-size: 1.1rem;
            font-weight: bold;
            color: #333;
            flex-shrink: 0;
        }
/* 
        .marquee-item h3 {
            margin: 0;
            font-size: 1.2rem;
        } */

        .marquee-item p {
            margin: 0.5rem 0 0;
            font-size:20px;
            color: #666;
        }

        @keyframes marquee {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }
    </style>
</head>
<body>

    <div class="marquee-wrapper">
        <div class="marquee-content">
            <div class="marquee-item">
                <!-- <h3>Phone</h3> -->
                <p>Latest smartphone with advanced features, high-resolution camera, and fast performance.</p>
            </div>
            <div class="marquee-item">
                <!-- <h3>Laptop</h3> -->
                <p>Powerful laptop with high-speed processor, large storage capacity, and sleek design.</p>
            </div>
            <div class="marquee-item">
                <!-- <h3>Fridge</h3> -->
                <p>Energy-efficient fridge with spacious interior and advanced cooling technology.</p>
            </div>
            <div class="marquee-item">
                <!-- <h3>Swing</h3> -->
                <p>Comfortable swing for relaxing with a durable frame and stylish design.</p>
            </div>
            <div class="marquee-item">
                <!-- <h3>Headphone</h3> -->
                <p>High-quality headphones with noise-cancellation, deep bass, and comfortable fit.</p>
            </div>
        </div>
    </div>

</body>
</html>
