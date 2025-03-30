
<section style="background-color:hsla(239, 92.20%, 40.00%, 0.85); color: white; padding: 50px; text-align: center;">
    <h1 style="font-size: 2.5em; font-weight: bold; margin: 0;">My Work</h1>
</section>

    </section>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart - Web Developer</title>
    <script>
        // Function to update total price
        function updateTotal() {
            let total = 0;
            let items = document.querySelectorAll(".cart-item");

            items.forEach(item => {
                let price = parseFloat(item.getAttribute("data-price"));
                let quantity = item.querySelector("input").value;
                total += price * quantity;
            });

            document.getElementById("total-price").innerText = "$" + total.toFixed(2);
        }
    </script>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 0; text-align: center;">

<div class="container my-5">
    <h1 style="font-weight: bold; font-size: 20px;">E-commerce website project</h1>
    <div class="row justify-content-center align-items center text-decoration-none">
        <div class="col-md-6 col-xl-3 col-lg-3 col-sm-3">
            <div style="box-shadow: rgba(0, 0, 0, 0.25) 0px 25px 50px -12px;" class="card shadow-sm">
                <img src="./images/ataleofwar.jpg" style="height:px; width:100%;" alt="">
                <div class="card-body">
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="view"><button type="button" class="btn btn-sm btn-info">View</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div class="container my-5">
    <h1 style="font-weight: bold; font-size: 20px;">Modern School Project</h1>
    <div class="row justify-content-center align-items center text-decoration-none">
        <div class="col-md-6 col-xl-3 col-lg-3 col-sm-3">
            <div style="box-shadow: rgba(0, 0, 0, 0.25) 0px 25px 50px -12px;" class="card shadow-sm">
                <img src="./images/ataleofwar.jpg" style="height:px; width:100%;" alt="">
                <div class="card-body">
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="view2"><button type="button" class="btn btn-sm btn-info">View</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div class="container my-5">
    <h1 style="font-weight: bold; font-size: 20px;">Finance Project


    </h1>
    <div class="row justify-content-center align-items center text-decoration-none">
        <div class="col-md-6 col-xl-3 col-lg-3 col-sm-3">
            <div style="box-shadow: rgba(0, 0, 0, 0.25) 0px 25px 50px -12px;" class="card shadow-sm">
                <img src="./images/ataleofwar.jpg" style="height:px; width:100%;" alt="">
                <div class="card-body">
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="view3"><button type="button" class="btn btn-sm btn-info">View</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div class="container my-5">
    <h1 style="font-weight: bold; font-size: 20px;">Event Planning Project</h1>
    <div class="row justify-content-center align-items center text-decoration-none">
        <div class="col-md-6 col-xl-3 col-lg-3 col-sm-3">
            <div style="box-shadow: rgba(0, 0, 0, 0.25) 0px 25px 50px -12px;" class="card shadow-sm">
                <img src="./images/ataleofwar.jpg" style="height:px; width:100%;" alt="">
                <div class="card-body">
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="view4"><button type="button" class="btn btn-sm btn-info">View</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_REAL_API_KEY&callback=initMap" async defer></script>

    <h2>Find Me on the Map</h2>
    <div id="map"></div>
    <iframe 
        id="embed-map" 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2423.8882192755573!2d-2.123678923954605!3d52.58971418106664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48709b8dcb75c6cd%3A0x326648b1573701d5!2sCulwell%20St%2C%20Wolverhampton%20WV10%200JT!5e0!3m2!1sen!2suk!4v1743349033051!5m2!1sen!2suk"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
    </iframe>

    <script>
        function initMap() {
            var location = { lat: 52.5897, lng: -2.1237 };
            
            var map = new google.maps.Map(document.getElementById("map"), {
                zoom: 14,
                center: location
            });

            var marker = new google.maps.Marker({
                position: location,
                map: map,
                title: "Eugene's Location"
            });
        }
    </script>


</body>
</html>










