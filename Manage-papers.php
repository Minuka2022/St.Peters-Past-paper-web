<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <title>SPCPTA - Dashboard</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link
      rel="icon"
      href="./assets/img/kaiadmin/favicon.ico"
      type="image/x-icon"
    />

    <!-- Fonts and icons -->
    <script src="./assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["./assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/css/plugins.min.css" />
    <link rel="stylesheet" href="./assets/css/kaiadmin.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="./assets/css/demo.css" />
  </head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
     <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
             <a href="dashboard.html" class="logo">
              <img
                src="assets/img/SPCPTA.png"
                alt="navbar brand"
                class="navbar-brand"
                height="200"
              />
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
              <li class="nav-item active">
                <a href="dashboard.html" class="" aria-expanded="false">
                  <i class="fas fa-home"></i>
                  <p>Dashboard</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="Manage-Subjects.html">
                  <i class="fas fa-layer-group"></i>
                  <p>Subjects</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="Manage-Users.html">
                  <i class="fas fa-users"></i>
                  <p>Users</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="Profile.html">
                  <i class="fas fa-user-alt"></i>
                  <p>Profile</p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- End Sidebar -->

      <div class="main-panel">
        <div class="main-header">
          <div class="main-header-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
               <a href="dashboard.html" class="logo">
              <img
                src="assets/img/SPCPTA.png"
                alt="navbar brand"
                class="navbar-brand"
                height="200"
              />
            </a>
              <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                  <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                  <i class="gg-menu-left"></i>
                </button>
              </div>
              <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
              </button>
            </div>
            <!-- End Logo Header -->
          </div>
          <!-- Navbar Header -->
          <nav
            class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom"
          >
            <div class="container-fluid">
              <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                <li class="nav-item topbar-user dropdown hidden-caret">
                  <a
                    class="dropdown-toggle profile-pic"
                    data-bs-toggle="dropdown"
                    href="#"
                    aria-expanded="false"
                  >
                    <div class="avatar-sm">
                      <img
                        src="assets/img/profile.jpg"
                        alt="..."
                        class="avatar-img rounded-circle"
                      />
                    </div>
                    <span class="profile-username">
                      <span class="op-7">Hi,</span>
                      <span class="fw-bold">Jhone doe</span>
                    </span>
                  </a>
                  <ul class="dropdown-menu dropdown-user animated fadeIn">
                    <div class="dropdown-user-scroll scrollbar-outer">
                      <li>
                        <div class="user-box">
                          <div class="avatar-lg">
                            <img
                              src="assets/img/profile.jpg"
                              alt="image profile"
                              class="avatar-img rounded"
                            />
                          </div>
                          <div class="u-text">
                            <h4>Hizrian</h4>
                            <p class="text-muted">hello@example.com</p>
                            <a
                              href="/forms/Profile.html"
                              class="btn btn-xs btn-secondary btn-sm"
                              >View Profile</a
                            >
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="login.php">Logout</a>
                      </li>
                    </div>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
          <!-- End Navbar -->
        </div>

        <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Grade <?php echo htmlspecialchars($_GET['grade_id'] ?? '', ENT_QUOTES, 'UTF-8'); ?> papers</h3>
              <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                  <a href="#">
                    <i class="icon-home"></i>
                  </a>
                </li>
                
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Manage papers</a>
                </li>
              </ul>
            </div>
            
              
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="d-flex align-items-center">
                      <h4 class="card-title">Manage Papers</h4>
                      <button
                        class="btn btn-primary btn-round ms-auto"
                        data-bs-toggle="modal"
                        data-bs-target="#addRowModal"
                      >
                        <i class="fa fa-plus"></i>
                        Add Paper
                      </button>
                    </div>
                  </div>
                  <div class="card-body">
                    <!-- Modal -->
                    <div class="modal fade" id="addRowModal" tabindex="-1" aria-labelledby="addRowModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addRowModalLabel">Add Paper</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addPaperForm" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="paperYear" class="form-label">Year</label>
                        <select class="form-select" id="paperYear" name="year" required>
                            <!-- Year options will be populated dynamically -->
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="subjectSelect" class="form-label">Subject</label>
                        <select class="form-select" id="subjectSelect" name="subject_id" required>
                            <option value="">Select Subject</option>
                            <!-- Options will be populated dynamically using JavaScript -->
                        </select>
                    </div>
                    <input type="hidden" id="gradeId" name="grade_id" value="<?php echo htmlspecialchars($_GET['grade_id'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">


                    <div class="mb-3">
                        <label for="paperTerm" class="form-label">Term</label>
                        <select class="form-select" id="paperTerm" name="term" required>
                           
                            <option value="1st term">1st term</option>
                            <option value="2nd term">2nd term</option>
                            <option value="3rd term">3rd term</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="paperMedium" class="form-label">Medium</label>
                        <select class="form-select" id="paperMedium" name="medium" required>
                           
                            <option value="english">English</option>
                            <option value="sinhala">Sinhala</option>
                            <option value="tamil">Tamil</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="paperFile" class="form-label">Upload Paper (PDF or Word)</label>
                        <input type="file" class="form-control" id="paperFile" name="paper_file" accept=".pdf,.doc,.docx" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="addPaperBtn">Add Paper</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="table-responsive">
        <table id="multi-filter-select" class="display table table-striped table-hover">
            <thead>
                <tr>
                    <th>Subject</th>
                    <th>Year</th>
                    <th>Term</th>
                    <th>Medium</th>
                    <th>Paper name</th>
                    <th style="width: 10%">Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Subject</th>
                    <th>Year</th>
                    <th>Term</th>
                    <th>Medium</th>
                </tr>
            </tfoot>
            <tbody id="papersTableBody">
                <!-- Rows will be populated dynamically using JavaScript -->
            </tbody>
        </table>
    </div>





                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

          <footer class="footer">
          <div class="container-fluid d-flex justify-content-between">
            <nav class="pull-left">
              <ul class="nav"></ul>
            </nav>
            <div class="copyright">
             © 2024 Copyright| 
              <a href="http://www.Idearigs.com">Idearigs |</a>
              All Rights Reserved.
            </div>
          </div>
        </footer>
      </div>




      <script>
       
    </script>

      <!-- Custom template | don't include it in your project! -->
      
        <div class="custom-toggle">
          <i class="icon-settings"></i>
        </div>
      </div>
      <!-- End Custom template -->
    </div>
    <!--   Core JS Files   -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="./assets/js/core/popper.min.js"></script>
    <script src="./assets/js/core/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="./assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <!-- Datatables -->
    <script src="./assets/js/plugin/datatables/datatables.min.js"></script>
    <!-- Kaiadmin JS -->
    <script src="./assets/js/kaiadmin.min.js"></script>
    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="./assets/js/setting-demo2.js"></script>
    <script>
document.addEventListener('DOMContentLoaded', function () {
  
    const urlParams = new URLSearchParams(window.location.search);
    const gradeId = urlParams.get('grade_id');
  
    if (gradeId) {
      initializeDataTable();
      fetchPapers(gradeId);
           // Initialize DataTables
   
     
    } else {
        console.error('Grade ID not found in URL parameters.');
    }

    initializeForm(gradeId);
});

function fetchPapers(gradeId) {
    fetch(`fetch_papers.php?grade_id=${gradeId}`)
        .then(response => response.json())
        .then(data => {
            if (data.success) {
              
                const papersTableBody = document.getElementById('papersTableBody');
                papersTableBody.innerHTML = ''; // Clear existing rows

                data.papers.forEach(paper => {
                    const row = document.createElement('tr');

                    row.innerHTML = `
                        <td>${paper.subject}</td>
                        <td>${paper.year}</td>
                        <td>${paper.term}</td>
                        <td>${paper.medium}</td>
                        <td>${paper.paper_name}</td>
                        <td>
                            <div class="form-button-action">
                                <button type="button" class="btn btn-link btn-primary btn-lg btn-edit-paper" data-bs-toggle="tooltip" title="Edit Task">
                                    <i class="fa fa-edit"></i>
                                </button>
                                <!-- Hidden input field to store paper ID -->
                                <input type="hidden" class="paper-id" value="${paper.paper_id}">
                                <button type="button" class="btn btn-link btn-danger btn-remove-paper" data-bs-toggle="tooltip" title="Remove">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div>
                        </td>
                    `;

                    papersTableBody.appendChild(row);
                });

               
                $('#multi-filter-select').DataTable().clear().rows.add($('#papersTableBody').find('tr')).draw();
           
            } else {
                console.error(data.message);
            }
        })
        .catch(error => console.error('Error fetching papers:', error));
}
function initializeDataTable() {
  
  $('#multi-filter-select').DataTable({
            pageLength: 5,
            initComplete: function () {
                this.api()
                    .columns()
                    .every(function () {
                        var column = this;
                        var select = $('<select class="form-select"><option value=""></option></select>')
                            .appendTo($(column.footer()).empty())
                            .on('change', function () {
                                var val = $.fn.dataTable.util.escapeRegex($(this).val());
                                column
                                    .search(val ? '^' + val + '$' : '', true, false)
                                    .draw();
                            });
                        column
                            .data()
                            .unique()
                            .sort()
                            .each(function (d, j) {
                                select.append('<option value="' + d + '">' + d + '</option>');
                            });
                    });
            },
        }); 
}


function initializeForm(gradeId) {
 
    const addPaperForm = document.getElementById('addPaperForm');
    const paperYearSelect = document.getElementById('paperYear');
    const subjectSelect = document.getElementById('subjectSelect');

    // Populate year dropdown with current year and past 30 years
    const currentYear = new Date().getFullYear();
    for (let year = currentYear; year >= currentYear - 30; year--) {
        const option = document.createElement('option');
        option.value = year;
        option.text = year;
        paperYearSelect.appendChild(option);
    }

    // Fetch subjects based on grade_id and populate the subject dropdown
    fetch(`get_subjects_by_grade.php?grade_id=${gradeId}`)
        .then(response => response.json())
        .then(data => {
            subjectSelect.innerHTML = '<option value="">Select Subject</option>';
            if (Array.isArray(data)) {
                data.forEach(subject => {
                    const option = document.createElement('option');
                    option.value = subject.id;
                    option.text = subject.name;
                    subjectSelect.appendChild(option);
                });
            } else {
                console.error('Unexpected response format:', data);
            }
        })
        .catch(error => {
            console.error('Error fetching subjects:', error);
        });

    // Handle form submission
    document.getElementById('addPaperBtn').addEventListener('click', function () {
        // Validate form
        const formElements = addPaperForm.elements;
        let formIsValid = true;

        for (let element of formElements) {
            if (element.required && !element.value) {
                formIsValid = false;
                break;
            }
        }

        if (formIsValid) {
            // Log the form data before submitting
            console.log('Form data before submission:', new FormData(addPaperForm));

            // Proceed with form submission
            const formData = new FormData(addPaperForm);
            fetch('add_paper.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Close the modal and reset the form
                    $('#addRowModal').modal('hide');
                    addPaperForm.reset();
                    Swal.fire({
                        icon: 'success',
                        title: 'Paper added successfully',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(() => {
                        // Update the papers list
                        fetchPapers(gradeId);
                       

                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Failed to add paper',
                        text: data.message
                    });
                }
            })
            .catch(error => {
                console.error('Error adding paper:', error);
                Swal.fire({
                    icon: 'error',
                    title: 'Failed to add paper',
                    text: 'An error occurred while processing your request. Please try again later.'
                });
            });
        } else {
            Swal.fire({
                icon: 'warning',
                title: 'Validation Error',
                text: 'Please fill in all required fields.'
            });
        }
    });
}


    </script>
  </body>
</html>
