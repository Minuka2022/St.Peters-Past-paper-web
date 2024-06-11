<?php
session_start();
include '../db/connection.php';
include '../client/functions.php';
//loading parameters
$isSearching = false;
$isFiltering = false;
$isSorting = false;
$sortDefaultValue = 1;
$filterDefaultValue = 0;
$pagingDefaultValue = 1;
$perPageDefaultValue = 8;

//content parameters
$searchQuery = "";
$nbProductsInPage = $perPageDefaultValue;
$currentPage = $pagingDefaultValue;
$sort_by = $sortDefaultValue;
$filter_by = $filterDefaultValue;
$productsToShow = mysqli_num_rows(mysqli_query($con, "SELECT * FROM product WHERE stock > 0"));

if (isset($_GET["page"])) {
    if (($_GET["page"] > 0) || (!empty($_GET["page"]))) {
        $currentPage = $_GET["page"];
    }
}

if (isset($_GET["search"])) {
    if (!empty($_GET["search"])) {
        $isSearching = true;
        $searchQuery = addslashes($_GET["search"]);
    }
}

if (isset($_GET["filter_by"])) {
    if (($_GET["filter_by"] != 0) || (!empty($_GET["filter_by"]))) {
        $isFiltering = true;
        $filter_by = $_GET['filter_by'];
    }
}

if (isset($_GET["sort_by"])) {
    if (!empty($_GET["sort_by"])) {
        $isSorting = true;
        $sort_by = $_GET['sort_by'];
    }
}

if (isset($_GET["per_page"])) {
    if (($_GET["per_page"] != 0) || (!empty($_GET["per_page"])))
        $nbProductsInPage = $_GET["per_page"];
}

$loadQuery = "SELECT * FROM product WHERE stock > 0";

//content parameters

if ($isSearching) {
    $search = $searchQuery;
    if ($isFiltering) {
        $filter = $filter_by;
        if ($isSorting) {
            switch ($sort_by) {
                case 1:
                    $loadQuery = "SELECT * FROM product WHERE stock > 0 AND (category = '" . $filter . "') AND ((name LIKE '%" . $search . "%') OR (description LIKE '%" . $search . "%')) ORDER BY sale_price DESC";
                    break;

                case 2:
                    $loadQuery = "SELECT * FROM product WHERE stock > 0 AND (category = '" . $filter . "') AND ((name LIKE '%" . $search . "%') OR (description LIKE '%" . $search . "%')) ORDER BY sale_price ASC";
                    break;

                case 3:
                    $loadQuery = "SELECT * FROM product WHERE stock > 0 AND (category = '" . $filter . "') AND ((name LIKE '%" . $search . "%') OR (description LIKE '%" . $search . "%')) ORDER BY add_date DESC";
                    break;

                case 4:
                    $loadQuery = "SELECT * FROM product WHERE stock > 0 AND (category = '" . $filter . "') AND ((name LIKE '%" . $search . "%') OR (description LIKE '%" . $search . "%')) ORDER BY add_date ASC";
                    break;

                case 5:
                    $loadQuery = "SELECT * FROM product WHERE stock > 0 AND (category = '" . $filter . "') AND ((name LIKE '%" . $search . "%') OR (description LIKE '%" . $search . "%')) ORDER BY sales DESC";
                    break;
            }
        } else {
            $loadQuery = "SELECT * FROM product WHERE stock > 0 AND (category = '" . $filter . "') AND ((name LIKE '%" . $search . "%') OR (description LIKE '%" . $search . "%'))";
        }
    } else {
        if ($isSorting) {
            switch ($sort_by) {
                case 1:
                    $loadQuery = "SELECT * FROM product WHERE stock > 0 AND ((name LIKE '%" . $search . "%') OR (description LIKE '%" . $search . "%')) ORDER BY sale_price DESC";
                    break;

                case 2:
                    $loadQuery = "SELECT * FROM product WHERE stock > 0 AND ((name LIKE '%" . $search . "%') OR (description LIKE '%" . $search . "%')) ORDER BY sale_price ASC";
                    break;

                case 3:
                    $loadQuery = "SELECT * FROM product WHERE stock > 0 AND ((name LIKE '%" . $search . "%') OR (description LIKE '%" . $search . "%')) ORDER BY add_date DESC";
                    break;

                case 4:
                    $loadQuery = "SELECT * FROM product WHERE stock > 0 AND ((name LIKE '%" . $search . "%') OR (description LIKE '%" . $search . "%')) ORDER BY add_date ASC";
                    break;

                case 5:
                    $loadQuery = "SELECT * FROM product WHERE stock > 0 AND ((name LIKE '%" . $search . "%') OR (description LIKE '%" . $search . "%')) ORDER BY sales DESC";
                    break;
            }
        } else {
            $loadQuery = "SELECT * FROM product WHERE stock > 0 AND ((name LIKE '%" . $search . "%') OR (description LIKE '%" . $search . "%'))";
        }
    }
} else {
    if ($isFiltering) {
        $filter = $filter_by;
        if ($isSorting) {
            switch ($sort_by) {
                case 1:
                    $loadQuery = "SELECT * FROM product WHERE stock > 0 AND (category = '" . $filter . "') ORDER BY sale_price DESC";
                    break;

                case 2:
                    $loadQuery = "SELECT * FROM product WHERE stock > 0 AND (category = '" . $filter . "') ORDER BY sale_price ASC";
                    break;

                case 3:
                    $loadQuery = "SELECT * FROM product WHERE stock > 0 AND (category = '" . $filter . "') ORDER BY add_date DESC";
                    break;

                case 4:
                    $loadQuery = "SELECT * FROM product WHERE stock > 0 AND (category = '" . $filter . "') ORDER BY add_date ASC";
                    break;

                case 5:
                    $loadQuery = "SELECT * FROM product WHERE stock > 0 AND (category = '" . $filter . "') ORDER BY sales DESC";
                    break;
            }
        } else {
            $loadQuery = "SELECT * FROM product WHERE stock > 0 AND (category = '" . $filter . "')";
        }

    } else {
        if ($isSorting) {
            switch ($sort_by) {
                case 1:
                    $loadQuery = "SELECT * FROM product WHERE stock > 0 ORDER BY sale_price DESC";
                    break;

                case 2:
                    $loadQuery = "SELECT * FROM product WHERE stock > 0 ORDER BY sale_price ASC";
                    break;

                case 3:
                    $loadQuery = "SELECT * FROM product WHERE stock > 0 ORDER BY add_date DESC";
                    break;

                case 4:
                    $loadQuery = "SELECT * FROM product WHERE stock > 0 ORDER BY add_date ASC";
                    break;

                case 5:
                    $loadQuery = "SELECT * FROM product WHERE stock > 0 ORDER BY sales DESC";
                    break;
            }
        } else {
            $loadQuery = "SELECT * FROM product WHERE stock > 0";
        }
    }
}

$productsToShow = mysqli_num_rows(mysqli_query($con, $loadQuery));

$nbPages = ceil($productsToShow / $nbProductsInPage);

if ($currentPage > $nbPages) {
    $currentPage = $nbPages;
}

$bound = ($currentPage - 1) * $nbProductsInPage;

$loadQuery = $loadQuery . " LIMIT " . $bound . ", " . $nbProductsInPage;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../res/img/logo.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"
            integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../style/index.css">
    <link rel="stylesheet" href="../style/select_text.css">
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

<main>
    
    </script>
    <!-- <?php include '../client/categories_dropdown.php'; ?> -->


</main>

<form action="index.php" id="reload" method="get" style="display: none;">
    <input type="number" id="per_page_hidden" name="per_page" value="<?php echo $nbProductsInPage; ?>">
    <input type="number" id="page_h" name="page" value="<?php echo $currentPage; ?>">
    <input type="number" id="sort_by_h" name="sort_by" value="<?php echo $sort_by; ?>">
    <input type="text" id="filter_by_h" name="filter_by" value="<?php echo $filter_by; ?>">
    <input type="search" id="search_h" name="search" value="<?php echo $searchQuery; ?>">
</form>

<!-- ALL POP UPS MODALS -->
<?php include '../client/pop_ups.php' ?>
<?php include 'Subjects.php' ?>
<?php include 'footer.php' ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="../js/addToCart.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script language="JavaScript">

    function showLogOut() {
        document.getElementById("log-out-pop").classList.toggle("hidden");
    }

    var hidden_form = document.forms["reload"];

    var per_page_hidden = document.getElementById("per_page_hidden");
    var page_hidden = document.getElementById("page_h");
    var sort_hidden = document.getElementById("sort_by_h");
    var filter_hidden = document.getElementById("filter_by_h");
    var search_hidden = document.getElementById("search_h");

    const category_menu = document.getElementById('categories_list');
    var sort_menu = document.getElementById("sort_selector");
    var per_page_menu = document.getElementById("per_page_selector");

    function setParmeters() {
        filter_hidden.value = category_menu.value;
        sort_hidden.value = sort_menu.value;
        per_page_hidden.value = per_page_menu.value;
    }

    //submit search value
    const searchButton = document.getElementById('search-button');
    const searchBar = document.getElementById('search-input');
    searchButton.onclick = function (e) {
        e.preventDefault();
        search_hidden.value = searchBar.value;
        document.forms["reload"].submit();
    }

    //submit filter value
    const category_link = document.getElementsByClassName("category_option");

    for (let i = 0; i < category_link.length; i++) {
        category_link[i].addEventListener("click", function (evt) {
            setParmeters();
            document.forms["reload"].submit();
        })
    }

    //submit sort value
    const sort_link = document.getElementsByClassName("sort_option");

    for (let i = 0; i < sort_link.length; i++) {
        sort_link[i].addEventListener("click", function (evt) {
            setParmeters();
            document.forms["reload"].submit();
        })
    }

    //submit page number
    var slider_nav = document.getElementById('slider-nav');
    var pages_links = slider_nav.querySelectorAll('label');
    var pages_radios = document.getElementsByClassName('pages_radios');

    for (let i = 0; i < pages_links.length; i++) {
        pages_links[i].setAttribute('index', i);
        pages_links[i].addEventListener("click", function (e) {
            var index = pages_links[i].getAttribute('index')
            pages_radios[index].checked = true;
            page_hidden.value = pages_radios[index].value;
            document.forms["reload"].submit();
        })
    }

    //submit per page value
    const per_page_link = document.getElementsByClassName("per_page_option");
    for (let i = 0; i < per_page_link.length; i++) {
        per_page_link[i].addEventListener("click", function (evt) {
            setParmeters();
            document.forms["reload"].submit();
        })
    }

    //logout button
    if (isLogin) {
        const logout_button = document.getElementById('log-out');
        logout_button.addEventListener("click", logout);
    }

    function logout() {
        swal({
            title: "Are you sure?",
            text: "You will be logged out",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    window.location.href = "../client/logOut.php";
                } else {
                    swal("Enjoy a great shopping experience!");
                }
            });
    }

    //view product details
</script>
</body>
</html>