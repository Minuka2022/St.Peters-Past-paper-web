<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
</head>
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
    border: 1px solid #01204E; /* Change the color code to your desired border color */
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
<body>
<div class="container-fluid mb-5 services" id="services">
    <div class="text-center mt-5">
        <h1>Grade 3  </h1>
        <center>
            <hr size="6">
        </center>
    </div>
      <?php include '../client/categories_dropdown.php'; ?>

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



</body>
</html>