<?php
include '../db/connection.php';
session_start();
if (!isset($_SESSION['username'])) {
    header('location: login.php');
}
//get the total number of products
$sql = "SELECT * FROM product";
$result = mysqli_query($con, $sql);
$total_products = mysqli_num_rows($result);

//get the total number of sales
$sql = "SELECT * FROM sale";
$result = mysqli_query($con, $sql);
$total_sales = mysqli_num_rows($result);

//get the total of earnings

//$sql = "SELECT product.buy_price, product.sale_price, sale.quantity FROM product, sale WHERE product.productID = sale.productID";
//$result = mysqli_query($con, $sql);
//$total_earnings = 0;
//while ($row = mysqli_fetch_array($result)) {
//    $total_earnings += ($row['sale_price'] - $row['buy_price']) * $row['quantity'];
//}

$sql = "SELECT * FROM sale";
$result = mysqli_query($con, $sql);
$total_earnings = 0;
while ($row = mysqli_fetch_array($result)) {
    $total_earnings += $row['earning'];
}

//get the total number of users
$sql = "SELECT * FROM customer";
$result = mysqli_query($con, $sql);
$total_customers = mysqli_num_rows($result);

//remove product on click
echo '<script>
function removeProduct(id){
//    if(confirm("Are you sure you want to remove this product?")){
//        //remove product from database
//        
//    }
swal({
            title: "Remove Product",
            text: "You will not be able to recover this product!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    window.location.href = "remove_product.php?id=" + id;
                } else {
                    swal("Your product is safe!");
                }
            });
}
</script>';

$productsTotal = 19;
$salesTotal = 121;
$earningsTotal = 139;
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../res/img/logo.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"
            integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="../style/dashboard.css">
    <link rel="stylesheet" href="../style/forms.css">
    <link rel="stylesheet" href="../style/product.css">
    <link rel="stylesheet" href="../style/report.css">
    <link rel="stylesheet" href="../style/product_details_modal.css">
    <link rel="stylesheet" href="../style/select_text.css">
    <link rel="stylesheet" href="../style/sidebar.css">

    <style>
        .nav-link {
            height: 4rem;   
        }

        .nav-link img {
            width: 2rem;
        }

        .wrap {
            width: 400px;
        }

        .modal {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            opacity: 0;
            visibility: hidden;
            transform: scale(1.1);
            transition: visibility 0s linear 0.25s, opacity 0.25s 0s, transform 0.25s;
        }

        .modal-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 1rem 1.5rem;
            width: 24rem;
            border-radius: 0.5rem;
        }

        .product-modal-btn {
            float: right;
            line-height: 1.5rem;
            text-align: center;
            cursor: pointer;
            border-radius: 0.25rem;
            background-color: lightgray;
            width: 32%;
            height: 30px;
            border: none;
            margin-bottom: 12px;
            margin-top: 12px;
            margin-right: 4px;
        }

        .products-container {
            display: inline;
        }

        .profile-container form .field {
            height: 44px;
        }

        .products-container .form .field .label {
            font-size: 14px;
            height: 44px;
        }

        .products-container .form .field input {
            font-size: 20px;
            height: 44px;
        }

        .products-container .form .field #category {
            font-size: 16px;
        }

        .update-product-btn {
            background: #006bff;
            color: white;
            transition: all 0.5s ease;
        }

        .delete-product-btn {
            background: #ff1616;
            color: white;
            transition: all 0.5s ease;
        }

        .product-modal-btn:hover {
            background-color: darkgray;
        }

        .show-modal {
            opacity: 1;
            visibility: visible;
            transform: scale(1.0);
            transition: visibility 0s linear 0s, opacity 0.25s 0s, transform 0.25s;
        }

        .users {
            background-color: var(--light-red);
        }

        .card {
            width: 100%;
            height: 100%;
            border-radius: 0;
            box-shadow: 0 0 0 0;
            border: 0;
            isolation: isolate;
        }

        @media only screen and (max-width: 600px) {
            .navbar {
                bottom: 0;
                width: 100vw;
                height: 4rem;
            }

            .nav-link img {
                width: 1.5rem;
            }
        }

         @media (min-width: 768px) {
            .navbar {
                position: fixed;
                top: 0;
                left: 0;
                height: 100%; /* Full height */
                z-index: 1000; /* Ensure it's above other content */
            }

            .content {
                margin-left: 200px; /* Same width as the navbar */
                padding: 20px; /* Adjust as needed */
            }

           
        }

        /* Styles for mobile */
        @media (max-width: 767px) {
            .navbar {
                position: fixed;
                bottom: 0;
                width: 100%; /* Full width */
                height: 60px; /* Adjust the height as needed */
                display: flex;
                justify-content: space-around;
                z-index: 1000; /* Ensure it's above other content */
            }

            .navbar-nav {
                display: flex;
                flex-direction: row;
                width: 100%;
            }

            .nav-item {
                flex: 1;
                text-align: center;
            }

            .content {
                padding-bottom: 60px; /* Space for the fixed bottom navbar */
            }
        }

        .profile-container .ActionButtons .submit {
            grid-area: auto;
        }

        /
        /
        style pagination buttons
        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 1rem;
        }

        .pagination button {
            background-color: #2e75e0;
            color: white;
            border: none;
            border-radius: 0.25rem;
            padding: 0.5rem 0.8rem;
            font-size: 1rem;
            margin: 0 0.2rem;
            cursor: pointer;
            transition: all 0.5s ease;
        }

        <!--
        keep some styles in dark mode

        -->

        main hr, .p-table th, .profile-container legend, .field .label {
            isolation: isolate;
        }

        .products-container .legend, .field .label {
            isolation: isolate;
        }

        .profile-container legend {
            isolation: isolate;
        }

        #customers th {
            isolation: isolate;
        }

        .reports-container .btn {
            isolation: isolate;
        }
    </style>

    <title>Admin Page</title>
</head>

<body>

<!-- include the change content functionality -->
<?php include('../js/content.php'); ?>

<nav class="navbar" onmouseover="mouseEnter()" onmouseout="mouseOut()">
    <ul class="navbar-nav">
        <li class="logo">
            <a href="#" class="nav-link" onmouseover="mouseEnter()" onmouseout="mouseOut()">
                <span class="link-text logo-text"><h2>SPCPTA </h2></span>
                <img src="https://www.stpeterscollege.lk/wp-content/uploads/2020/09/SPC_Web-Crest_New.png" alt="">
            </a>
        </li>

        <li class="nav-item">
            <a href="#dashboard" class="nav-link active-link" onmouseover="mouseEnter()" onmouseout="mouseOut()"
               onclick="changeToDashboard()">
                <img class="nav-icon" src="../res/img/chart.png" alt="">
                <span class="link-text">Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a href="#profile" class="nav-link" onmouseover="mouseEnter()" onmouseout="mouseOut()"
               onclick="changeToProfile()">
                <img class="nav-icon" src="../res/img/profile1.png" alt="">
                <span class="link-text">Profile</span>
            </a>
        </li>

        <li class="nav-item">
            <a href="#users" class="nav-link" onmouseover="mouseEnter()" onmouseout="mouseOut()"
               onclick="changeToUsers()">
                <img class="nav-icon" src="../res/img/users.png" alt="">
                <span class="link-text">Users</span>
            </a>
        </li>

        
        <li class="nav-item">
            <a href="#products" class="nav-link" onmouseover="mouseEnter()" onmouseout="mouseOut()"
               onclick="changeToProducts()">
                <img class="nav-icon" src="../res/img/product.png" alt="">
                <span class="link-text">Subjects</span>
            </a>
        </li>

        
        </li>

        <li class="nav-item">
            <a class="nav-link" onclick="logout()" onmouseover="mouseEnter()" onmouseout="mouseOut()">
                <img class="nav-icon" src="../res/img/logout.png">
                <span class="link-text">Logout</span>
            </a>
        </li>
    </ul>
</nav>



<!-- MAIN CONTENT -->
<main class="content" >
<?php include 'Subjects.php' ?>
    
</main>

<?php include '../js/charts.php' ?>
<!-- PRODUCT MODAL -->
<div class="modal" id="details-modal">

</div>
<script src="../js/change_content.js"></script>
<script src="../js/app.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    const modal = document.querySelector(".modal");
    const closeButton = document.querySelector(".close-button");

    const trs = document.querySelectorAll(".product-row");

    for (let i = 0; i < trs.length; i++)
        (function (e) {
            trs[e].addEventListener("click", function () {
                toggleModal(e)
                modal.innerHTML = `
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2>Product ID: ${this.children[1].textContent}</h2>
                        </div>
                        <div class="modal-body">
                            <table>
                                <tr class="product-row">
                                    <td style="color: #292929; font-weight: bold">Product Name : &#160;</td>
                                    <td class="namep">${this.children[2].textContent}</td>
                                </tr>
                                <tr class="product-row">
                                    <td style="color: #292929; font-weight: bold">Category : </td>
                                    <td class="categp">${this.children[3].textContent}</td>
                                </tr>
                                <tr class="product-row">
                                    <td style="color: #292929; font-weight: bold">Quantity : </td>
                                    <td class="qntp">${this.children[4].textContent}</td>
                                </tr>
                                <tr class="product-row">
                                    <td style="color: #292929; font-weight: bold">Buy Price : </td>
                                    <td>$${this.children[5].textContent}</td>
                                </tr>
                                <tr class="product-row">
                                    <td style="color: #292929; font-weight: bold">Sale Price : </td>
                                    <td class="pricep">$${this.children[6].textContent}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button class="product-modal-btn" onclick="toggleModal()">Close</button>
                            <button class="product-modal-btn update-product-btn" onclick="updateProduct()">Update</button>
                            <button class="product-modal-btn delete-product-btn" onclick="removeProduct(${this.children[1].textContent})">Delete</button>
                        </div>
                    </div>`;
            }, false);
        })(i);

    function toggleModal() {
        modal.classList.toggle("show-modal");
    }

    function updateProduct() {
        const id = document.querySelector("h2").textContent.replace("Product ID: ", "");
        const name = document.querySelector(".namep").textContent;
        const qnt = document.querySelector(".qntp").textContent;
        const price = document.querySelector(".pricep").textContent;
        window.location.href = "update_product.php?id=" + id + "&name=" + name + "&qnt=" + qnt + "&price=" + price;
    }

    window.onclick = function (event) {
        if (event.target === modal) {
            modal.classList.remove("show-modal");
        }
    }

    //logout
    function logout() {
        swal({
            title: "Are you sure?",
            text: "You will be logged out!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    window.location.href = "logout.php";
                } else {
                    swal("Keep on working Admin!");
                }
            });
    }
</script>

<!--<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>-->
<!--<script>-->
<!--    const options = {-->
<!--        bottom: '32px', // default: '32px'-->
<!--        right: '32px', // default: '32px'-->
<!--        left: 'unset', // default: 'unset'-->
<!--        time: '0.5s', // default: '0.3s'-->
<!--        mixColor: '#fff', // default: '#fff'-->
<!--        backgroundColor: '#fff',  // default: '#fff'-->
<!--        buttonColorDark: '#29292f',  // default: '#100f2c'-->
<!--        buttonColorLight: '#fff', // default: '#fff'-->
<!--        saveInCookies: true, // default: true,-->
<!--        label: '🌓', // default: ''-->
<!--        autoMatchOsTheme: true // default: true-->
<!--    }-->
<!---->
<!--    const darkmode = new Darkmode(options);-->
<!---->
<!--    function addDarkmodeWidget() {-->
<!--        darkmode.showWidget();-->
<!--    }-->
<!---->
<!--    window.addEventListener('load', addDarkmodeWidget);-->
<!--</script>-->
</body>

</html>