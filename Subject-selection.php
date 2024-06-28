<?php

include './db/connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./res/img/logo.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"
            integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="./style/index.css">
    <link rel="stylesheet" href="./style/select_text.css">
    <title>TexGear</title>
    <script language='JavaScript'>
        var products = [];
        var product = [];
    </script>
    <style>
        body {
            background-color: rgba(255, 255, 255, 0.95);
            /* background: linear-gradient(-45deg, #006bff, #33e4ff, #006bff, #23d5ab);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;*/
            height: 100vh;
        }

        .dec, .inc {
            background: #1f7dff;
            color: #fff;
            padding: 4px 8px;
            display: inline-block;
            font-size: 12px;
            outline: none;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .dec:hover, .inc:hover {
            background: #5a9eff;
            cursor: pointer;
        }

        .dec {
            margin-left: 12px;
        }

        .inc {
            margin-right: 12px;
        }

        .total-input-cart {
            background: transparent;
            border: none;
            color: #fff;
            width: 100px;
            text-align: center;
        }

        .full-input-qnt {
            display: flex;
            justify-content: center;
            margin-top: 16px;
        }

        .product-qnt {
            margin: 0 4px;
            width: 60px;
            text-align: center;
        }

        main .banner {
    position: relative; /* Add this to position the pseudo-element overlay */
    background: url('https://www.stpeterscollege.lk/wp-content/uploads/2021/03/SPC-16-scaled.jpg') no-repeat center center;
    background-size: cover;
    display: flex;
}

main .banner::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
      background: rgb(1, 32, 78,0.8);
    z-index: 1; /* Ensures the overlay is above the background image but below the content */
     border-radius: 20px;
}

main .banner .content {
    position: relative;
    z-index: 2; /* Ensures the content is above the overlay */
    color: white; /* Assuming you want white text on the overlay */
}

main .banner .image-container {
    max-height: 500px;
    margin-right: 0;
    margin-left: auto;
    position: relative;
    z-index: 2; /* Ensures the image is above the overlay */
}

@media all and (max-width: 1024px) {
    main .banner .image-container {
        display: none;
    }
}

@media all and (min-width: 1024px) {
    main .banner {
        max-height: 500px;
        display: flex;
    }

    main .banner .content .actionbtn {
        margin-bottom: 0;
        margin-top: auto;
        position: absolute;
        bottom: 0;
    }

    main .banner .image-container {
        display: block;
    }

    main .banner .image-container img {
        height: 395px;
    }
}

        .form-select-sm {
            margin: 6px 0;
        }

        .pop-up .cart-pop .pop-content {
            min-width: 400px;
        }

        .removeBtn .fa-trash {
            margin: 0 12px;
        }

        @keyframes gradient {
            0% {
                background-position: 0 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0 50%;
            }
        }


        .closebtn {
            background-color: #f8c822;
            padding: 10px;
        }

        .removeBtn {
            outline: none;
            border: none;
            background: none;
        }

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
            text-align: center;
            font-weight: bold;
        }

        span {
            color: #fff;
        }

      

        .txt {
            color: #fff;
        }

        main .banner #log-in {
            background-color: #dc3545;
            margin-right: 12px;
        }

        main .banner h1 {
            margin-top: 110px;
        }

        @media only screen and (max-width: 600px) {
            main .banner h1 {
                font-size: 30px;
                padding: 0;
                margin-top: 20px;
            }
        }

        @media only screen and (min-width: 600px) {
            main .banner h1 {
                font-size: 40px;
                padding: 0;
            }
        }

        .pop-up .register-pop .pop-content form .field {
            margin: 0 20px;
        }

        .field .button {
            margin-top: 6px;
        }

        main .categories .products .card .product-name {
            padding: 0;
        }

        main .categories .products .card .product-price,
        main .categories .products .card .product-stock {
            display: inline;
        }

        main .categories .products .card .read-more {
            color: #ffc107;
            transition: 0.2s ease all;
            text-decoration: none;
        }

        main .categories .products .card .read-more:hover {
            text-decoration: underline;
        }
    </style>

</head>
<body>

<!-- bootstrap navbar  -->

<?php include 'navbar.php'; ?>


<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins|Ubuntu&display=swap');

    .services {
        background-color: #fff;
        margin: 16px 0;
    }

    h1 {
        font-family: Cairo;
        font-size: 40px;
        padding: 8px;
    }

    hr {
        color: red;
        width: 200px;
    }

.box {
    position: relative;
    width: 100%;
   
}

.custom-border {
    border: 2.5px solid rgb(1, 32, 78 , 0.4); /* Change the color code to your desired border color */
     transition: border 0.5s ease;
}






    .our-services {
        margin-top: 75px;
        padding: 0 60px;
        min-height: 198px;
        text-align: center;
        border-radius: 10px;
        background-color: #fff;
        transition: all .4s ease-in-out;
        box-shadow: 0 0 25px 0 rgba(20, 27, 202, .17)
    }

    .our-services .icon {
        margin-bottom: -21px;
        transform: translateY(-50%);
        text-align: center
    }

    .our-services h4,
    .our-services:hover p {
        color: #01204E
    }

    .speedup:hover {
        box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
        cursor: pointer;
        background-image: linear-gradient(-45deg, #010047 0%, #010047 100%)
    }

        .settings {
        background-color: white; /* Set the background color to white */
        
        box-shadow: none; /* No shadow initially */
        cursor: pointer;
        transition: box-shadow 0.3s ease, background-image 0.3s ease, background-color 0.3s ease, border 0.3s ease; /* Smooth transition */
    }

        .settings:hover {
        box-shadow: 0 0 25px 0 rgb(1, 32, 78 , 0.5) ; /* Blue drop shadow on hover */
    
        
    }

    .privacy:hover {
        box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
        cursor: pointer;
        background-image: linear-gradient(-45deg, #3615e7 0%, #44a2f6 100%)
    }

    .backups:hover {
        box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
        cursor: pointer;
        background-image: linear-gradient(-45deg, #fc6a0e 0%, #fdb642 100%)
    }

    .ssl:hover {
        box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
        cursor: pointer;
        background-image: linear-gradient(-45deg, #8d40fb 0%, #5a57fb 100%)
    }

    .database:hover {
        box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
        cursor: pointer;
        background-image: linear-gradient(-45deg, #27b88d 0%, #22dd73 100%)
    }
    .database{
        margin-bottom: 24px;
    }


</style>


<div class="container-fluid mb-5 services" id="services">
    <div class="text-center mt-5">
        <h1>Choose the Subject </h1>
        <center>
            <hr size="6">
        </center>
    </div>
    <div class="row justify-content-center" id="subjectsContainer">
       

       
    </div>
    

    


</div>

<script>
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            const gradeId = urlParams.get('grade_id');
            
            if (gradeId) {
                fetchSubjects(gradeId);
            } else {
                console.error('Grade ID not found in URL parameters.');
            }
        });

        function fetchSubjects(gradeId) {
            fetch(`Subject-selection_b.php?grade_id=${encodeURIComponent(gradeId)}`)
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        const subjectsContainer = document.getElementById('subjectsContainer');
                        subjectsContainer.innerHTML = ''; // Clear existing content

                        data.subjects.forEach(subject => {
                            const subjectElement = document.createElement('div');
                            subjectElement.classList.add('col-md-3');

                            subjectElement.innerHTML = `
                                <div class="box">
                                  <a href="Past-papers.php?grade_id=${encodeURIComponent(gradeId)}&subject_id=${subject.id}" class="text-decoration-none">
                                        <div class="our-services settings custom-border" style="padding-top:80px;">
                                            <h4 style="font-weight:bold; font-size:36px;">${subject.name}</h4>
                                        </div>
                                    </a>
                                </div>
                            `;

                            subjectsContainer.appendChild(subjectElement);
                        });
                    } else {
                        console.error(data.message);
                    }
                })
                .catch(error => console.error('Error fetching subjects:', error));
        }
    </script>


<?php include 'footer.php' ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="./js/addToCart.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
</html>