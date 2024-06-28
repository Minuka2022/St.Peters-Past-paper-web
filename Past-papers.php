<?php

include './db/connection.php';

?>
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
    <title>stpc.lk</title>
   
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
<?php

$full_name = "";

if (isset($_SESSION['customerID'])) {
    $full_name = $_SESSION['full_name'];
    echo '<script defer>
        isLogin = true;
 </script>';
} else {
    echo '<script defer>
          isLogin = false; 
 </script>';
}
?>
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
.table-container {
    display: flex;
    justify-content: center;
    padding: 20px;
    overflow-x: auto; /* Enable horizontal scrolling if needed */
    width: 100%; /* Ensure full width */
    max-width: 100%; /* Ensure full width */
}

.content-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 1em;
    width: 100%; /* Use 100% width to make it responsive */
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    background-color: #fff;
}

.content-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
    font-weight: bold;
}

.content-table th,
.content-table td {
    padding: 12px 15px;
    position: relative; /* Add relative positioning to enable absolute positioning of buttons */
}

.content-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

.content-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}

.content-table button {
    padding: 8px 16px;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    position: absolute; /* Use absolute positioning */
    top: 50%; /* Center vertically */
    transform: translateY(-50%); /* Adjust for vertical centering */
}

.download-button {
    background-color: #009879;
    right: 125px; /* Adjust position */
}

.download-button:hover {
    background-color: #007861;
}

.preview-button {
    background-color: #800080;
    right: 15px; /* Position to the right */
    margin-left: 10px; /* Add margin between buttons */
}

.preview-button:hover {
    background-color: #660066;
}

/* Add media queries for additional responsiveness */
@media (max-width: 768px) {
    .content-table thead {
        display: none; /* Hide the header on smaller screens */
    }

    .content-table, .content-table tbody, .content-table tr, .content-table td {
        display: block;
        width: 100%;
    }

    .content-table tr {
        margin-bottom: 15px;
    }

    .content-table td {
        text-align: right;
        padding-left: 50%;
        position: relative;
    }

    .content-table td::before {
        content: attr(data-label);
        position: absolute;
        left: 0;
        width: 50%;
        padding-left: 15px;
        font-weight: bold;
        text-align: left;
    }

    .content-table button {
        position: static; /* Revert to static positioning on small screens */
        margin-top: 10px; /* Add margin for spacing */
        transform: none; /* Remove transform */
        width: 100%; /* Full width button on small screens */
    }

    .download-button, .preview-button {
        right: 0;
    }

    .preview-button {
        margin-left: 0; /* Remove margin on small screens */
    }
}




</style>




<div class="container-fluid mb-5 services" id="services">
    <div class="text-center mt-5">
        <h1>Grade 3  </h1>
        <center>
            <hr size="6">
        </center>
    </div>
      
 <!-- fltetrt -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light mt-5 shadow p-2 mb-5 bg-body rounded" id="products-all">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold">Grade 3 </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li>
                    <form style="margin-right: 12px;">
                        <select id="year_selector" name="year" class="form-select form-select-sm"
                                aria-label=".form-select-sm example">
                            <option selected>Select Year</option>
                            <option value="2024">2024</option>
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                        </select>
                    </form>
                </li>
                <li>
                    <form style="margin-right: 12px;">
                        <select id="categories_list" name="filter_by" class="form-select form-select-sm"
                                aria-label=".form-select-sm example">
                        </select>
                    </form>
                </li>
                <li>
                    <form style="margin-right: 12px;">
                        <select id="term_selector" name="term" class="form-select form-select-sm"
                                aria-label=".form-select-sm example">
                            <option selected>Select Term</option>
                            <option value="1">Term 1</option>
                            <option value="2">Term 2</option>
                            <option value="3">Term 3</option>
                        </select>
                    </form>
                </li>
                <li>
                    <form style="margin-right: 12px;">
                        <select id="medium_selector" name="medium" class="form-select form-select-sm"
                                aria-label=".form-select-sm example">
                            <option selected>Select Medium</option>
                            <option value="english">English</option>
                            <option value="french">French</option>
                            <option value="spanish">Spanish</option>
                        </select>+
                    </form>
                </li>
                <li>
                    <form style="margin-right: 12px;">
                        <select id="sort_selector" name="sort_by" class="form-select form-select-sm"
                                aria-label=".form-select-sm example">
                        </select>
                    </form>
                </li>
                <li>
                    <button type="button" class="btn btn-primary" id="filter-button">Filter</button>
                </li>
              
            </ul>
        </div>
    </div>
</nav>

 <!-- fltetrt -->





<div class="table-container">
    <table class="content-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Paper Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="paper-list">
            <!-- Sample record -->
            <tr>
                <td data-label="No">1</td>
                <td data-label="Paper Name">Sample Paper 1</td>
                <td data-label="Action">
                    <button class="download-button" onclick="window.open('papers/sample_paper_1.pdf', '_blank')">Download</button>
                    <button class="preview-button" onclick="window.open('papers/sample_paper_1_preview.pdf', '_blank')">Preview</button>
                </td>
            </tr>
            
        </tbody>
    </table>
</div>



<?php include 'footer.php' ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="./js/addToCart.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
</html>