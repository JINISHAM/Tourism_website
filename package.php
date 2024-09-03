<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>PACKAGES</title>
    <style>
        
        body {
            background-image: url("bgimg.jpg");
            background-size: cover;
            font-family: Rubik;
            text-align: left;
            padding: 30px 20px;
            margin: 0;
        }

        .package {
            display: flex; /* Make the package section a flex container */
            justify-content: space-around; /* Space items evenly */
        }

        .card {
            width: 85%; /* Adjust the width as needed */
            height: 90%;
            margin: 10px; /* Add some margin between cards */
            background-color: white; /* Set background color for better visibility */
            border-radius: 8px; /* Add border-radius for a rounded appearance */
            overflow: hidden; /* Hide overflowing content */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow */
        }

        .img-card img {
            width: 100%;
            height: auto;
        }

        .text {
            padding: 15px;
        }

        p.cost {
            margin: 0;
        }

        .card-box p {
            margin: 0;
        }

        button {
            margin-top: 10px;
        }

        footer {
            text-align: center;
            margin-top: 20px;
            padding:200px;
        }
    </style>
</head>
<body>
    <center>
        <header>
            <h1><b>TOUR PACKAGES</b></h1>
        </header>
        <section class="package">
            <div class="card-container">
                <div class="card">
                    <div class="img-card">
                        <img src="https://www.shutterstock.com/image-photo/toronto-city-skyline-ontario-canada-600nw-1725788194.jpg" width="30%" height="30%" alt="Destination 1">
                    </div>
                    <div class="text">
                        
                            
                        <p class="cost">$1870 / Per Person</p>
                        <div class="card-box">
                            <p class="time">3 Days</p>
                            <p class="location">Vancouver, Canada</p>
                        </div>
                        <button onclick="window.location.href='book.php'">Book</button>
                        <button onclick="window.location.href='view.php'">View</button>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="img-card">
                        <img src="https://cdn.pixabay.com/photo/2015/10/06/18/26/eiffel-tower-975004_640.jpg" width="30%" height="30%" alt="Destination 2">
                    </div>
                    <div class="text">
                        
                        
                        <p class="cost">$1870 / Per Person</p>
                        <div class="card-box">
                           <p class="time"> 3 Days</p>
                           <p class="location">Paris, France</p>
                        </div>
                        <button onclick="window.location.href='book.php'">Book</button>
                        <button onclick="window.location.href='view.php'">View</button>
                    </div>
                </div>
            </div>

            <div class="card-container">
                <div class="card">
                    <div class="img-card">
                        <img src="https://cdn.pixabay.com/photo/2017/12/07/15/41/monaco-3003996_640.jpg" width="30%" height="30%" alt="Destination 3">
                    </div>
                    <div class="text">
                        
                        <p class="cost">$1870 / Per Person</p>
                        <div class="card-box">
                            <p class="time"> 3 Days</p>
                            <p class="location"> Monaco, Monaco</p>
                        </div>
                        <button onclick="window.location.href='book.php'">Book</button>
                        <button onclick="window.location.href='view.php'">View</button>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <p>&copy; 2023 SHAS TOURISM </p>
        </footer>
    </center>
</body>
</html>
