<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Notes App</title>
    <link rel="icon" href="https://img.icons8.com/fluency/48/null/edit-property--v1.png">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="../_resources/style.css">
    <!---Temp-->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
    <!---Temp-->
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light active">Available Folders</div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3 active" href="#!">Add
                    Folder</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" onclick="showPara()">Folder
                    1</a>
                <hr class="customhidden">
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-primary" id="sidebarToggle">Close Side Bar</button>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item active"><a class="nav-link" href="#!" onclick="refreshPage()">Home</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#!">Logout</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Folders</a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#!">Folder 1</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#!">API Docs</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <div class="container-fluid">
                <div class="page-content container note-has-grid">
                    <div id="notesnavbar" style="display: none;">
                        <ul class="nav nav-pills p-3 bg-white mb-3 rounded-pill align-items-center">
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2 active" id="all-category">
                                    <i class="icon-layers mr-1"></i><span class="d-none d-md-block">All Notes</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2" id="note-business"> <i class="icon-briefcase mr-1"></i><span class="d-none d-md-block">Business</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2" id="note-social"> <i class="icon-share-alt mr-1"></i><span class="d-none d-md-block">Social</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2" id="note-important"> <i class="icon-tag mr-1"></i><span class="d-none d-md-block">Important</span></a>
                            </li>
                            <li class="nav-item ml-auto">
                                <a href="javascript:void(0)" class="nav-link btn-primary rounded-pill d-flex align-items-center px-3" id="add-notes">
                                    <i class="icon-note m-1"></i><span class="d-none d-md-block font-14">Add
                                        Notes</span></a>
                            </li>
                        </ul>
                    </div>
                    <div id="defaultAddNotes">
                        <div id="AddNotesData">
                            <br><br><br><br><br>
                            <div class="card mb-4">
                                <div class="card-body p-0">
                                    <div class="row g-0">
                                        <div class="col-lg-6 p-5">
                                            <a class="badge badge-marketing bg-primary-soft rounded-pill text-primary mb-3" href="#!">Web View</a>
                                            <a class="text-dark" href="#!" style="text-decoration: none;">
                                                <h1>Welcome To My Notes App</h1>
                                            </a>
                                            <p>This Site is to take notes and for notes conversion like Word to pdf,
                                                image to pdf, etc.,<br> API Based Notes Web App (Rest API Protocol) to
                                                ensure your Data's
                                                Security and OAuth 2.0 Was used to make secure signup and login,
                                                Authorized user can make use of this API`s</p>
                                            <a class="text-arrow-icon small" href="#!">
                                                API Docs
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                                    <polyline points="12 5 19 12 12 19"></polyline>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="col-lg-6 align-self-stretch bg-img-cover d-none d-lg-flex">
                                            <img src="https://clickup.com/blog/wp-content/uploads/2020/01/note-taking.png" width="100%" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <aside class="bg-primary bg-gradient rounded-3 p-4 p-sm-5 mt-5">
                                <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                                    <div class="mb-4 mb-xl-0">
                                        <div class="fs-3 fw-bold text-white">New products is on the way.</div>
                                        <div class="text-white-50">Sign up for the newsletter for the latest updates.
                                        </div>
                                    </div>
                                    <div class="ms-xl-4">
                                        <div class="input-group mb-2">
                                            <input class="form-control" type="text" placeholder="Email address..." aria-label="Email address..." aria-describedby="button-newsletter">
                                            <button class="btn btn-outline-light" id="button-newsletter" type="button">Sign
                                                up</button>
                                        </div>
                                        <div class="small text-white-50">We care about privacy, and will never share
                                            your data.
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                    <div id="defaultContents">
                        <div class="tab-content bg-transparent" id="contentData" style="display:none;">
                            <div id="note-full-container" class="note-has-grid row">
                                <div class="col-md-4 single-note-item all-category" style="">
                                    <div class="card card-body">
                                        <span class="side-stick"></span>
                                        <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Book a Ticket for Movie">Add new Note<i class="point fa fa-circle ml-1 font-10"></i></h5>
                                        <p class="note-date font-12 text-muted">Click to add new note</p>
                                        <div class="note-content">
                                            <p class="note-inner-content text-muted" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">
                                                Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.
                                            </p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="mr-1"><i class="fa fa-star favourite-note"></i></span>
                                            <span class="mr-1"><i class="fa fa-trash remove-note"></i></span>
                                            <div class="ml-auto">
                                                <div class="category-selector btn-group">
                                                    <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                        <div class="category">
                                                            <div class="category-business"></div>
                                                            <div class="category-social"></div>
                                                            <div class="category-important"></div>
                                                            <span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right category-menu">
                                                        <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success" href="javascript:void(0);">
                                                            <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business
                                                        </a>
                                                        <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info" href="javascript:void(0);">
                                                            <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>
                                                            Social
                                                        </a>
                                                        <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger" href="javascript:void(0);">
                                                            <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>
                                                            Important
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 single-note-item all-category note-important" style="">
                                    <div class="card card-body">
                                        <span class="side-stick"></span>
                                        <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Go for lunch">
                                            Go
                                            for lunch <i class="point fa fa-circle ml-1 font-10"></i></h5>
                                        <p class="note-date font-12 text-muted">01 April 2002</p>
                                        <div class="note-content">
                                            <p class="note-inner-content text-muted" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">
                                                Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.
                                            </p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="mr-1"><i class="fa fa-star favourite-note"></i></span>
                                            <span class="mr-1"><i class="fa fa-trash remove-note"></i></span>
                                            <div class="ml-auto">
                                                <div class="category-selector btn-group">
                                                    <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                        <div class="category">
                                                            <div class="category-business"></div>
                                                            <div class="category-social"></div>
                                                            <div class="category-important"></div>
                                                            <span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right category-menu">
                                                        <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success" href="javascript:void(0);">
                                                            <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business
                                                        </a>
                                                        <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info" href="javascript:void(0);">
                                                            <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>
                                                            Social
                                                        </a>
                                                        <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger" href="javascript:void(0);">
                                                            <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>
                                                            Important
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 single-note-item all-category note-social" style="">
                                    <div class="card card-body">
                                        <span class="side-stick"></span>
                                        <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Meeting with Mr.Jojo">Meeting
                                            with Mr.Jojo <i class="point fa fa-circle ml-1 font-10"></i></h5>
                                        <p class="note-date font-12 text-muted">19 October 2020</p>
                                        <div class="note-content">
                                            <p class="note-inner-content text-muted" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">
                                                Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.
                                            </p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="mr-1"><i class="fa fa-star favourite-note"></i></span>
                                            <span class="mr-1"><i class="fa fa-trash remove-note"></i></span>
                                            <div class="ml-auto">
                                                <div class="category-selector btn-group">
                                                    <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                        <div class="category">
                                                            <div class="category-business"></div>
                                                            <div class="category-social"></div>
                                                            <div class="category-important"></div>
                                                            <span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right category-menu">
                                                        <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success" href="javascript:void(0);">
                                                            <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business
                                                        </a>
                                                        <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info" href="javascript:void(0);">
                                                            <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>
                                                            Social
                                                        </a>
                                                        <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger" href="javascript:void(0);">
                                                            <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>
                                                            Important
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 single-note-item all-category note-business" style="">
                                    <div class="card card-body">
                                        <span class="side-stick"></span>
                                        <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Give Review for design">Give
                                            Review for design <i class="point fa fa-circle ml-1 font-10"></i></h5>
                                        <p class="note-date font-12 text-muted">02 January 2000</p>
                                        <div class="note-content">
                                            <p class="note-inner-content text-muted" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">
                                                Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.
                                            </p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="mr-1"><i class="fa fa-star favourite-note"></i></span>
                                            <span class="mr-1"><i class="fa fa-trash remove-note"></i></span>
                                            <div class="ml-auto">
                                                <div class="category-selector btn-group">
                                                    <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                        <div class="category">
                                                            <div class="category-business"></div>
                                                            <div class="category-social"></div>
                                                            <div class="category-important"></div>
                                                            <span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right category-menu">
                                                        <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success" href="javascript:void(0);">
                                                            <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business
                                                        </a>
                                                        <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info" href="javascript:void(0);">
                                                            <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>
                                                            Social
                                                        </a>
                                                        <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger" href="javascript:void(0);">
                                                            <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>
                                                            Important
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 single-note-item all-category note-social" style="">
                                    <div class="card card-body">
                                        <span class="side-stick"></span>
                                        <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Nightout with friends">Nightout
                                            with friends <i class="point fa fa-circle ml-1 font-10"></i></h5>
                                        <p class="note-date font-12 text-muted">01 August 1999</p>
                                        <div class="note-content">
                                            <p class="note-inner-content text-muted" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">
                                                Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.
                                            </p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="mr-1"><i class="fa fa-star favourite-note"></i></span>
                                            <span class="mr-1"><i class="fa fa-trash remove-note"></i></span>
                                            <div class="ml-auto">
                                                <div class="category-selector btn-group">
                                                    <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                        <div class="category">
                                                            <div class="category-business"></div>
                                                            <div class="category-social"></div>
                                                            <div class="category-important"></div>
                                                            <span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right category-menu">
                                                        <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success" href="javascript:void(0);">
                                                            <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business
                                                        </a>
                                                        <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info" href="javascript:void(0);">
                                                            <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>
                                                            Social
                                                        </a>
                                                        <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger" href="javascript:void(0);">
                                                            <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>
                                                            Important
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 single-note-item all-category note-important" style="">
                                    <div class="card card-body">
                                        <span class="side-stick"></span>
                                        <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Launch new template">Launch new
                                            template <i class="point fa fa-circle ml-1 font-10"></i></h5>
                                        <p class="note-date font-12 text-muted">21 January 2015</p>
                                        <div class="note-content">
                                            <p class="note-inner-content text-muted" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">
                                                Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.
                                            </p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="mr-1"><i class="fa fa-star favourite-note"></i></span>
                                            <span class="mr-1"><i class="fa fa-trash remove-note"></i></span>
                                            <div class="ml-auto">
                                                <div class="category-selector btn-group">
                                                    <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                        <div class="category">
                                                            <div class="category-business"></div>
                                                            <div class="category-social"></div>
                                                            <div class="category-important"></div>
                                                            <span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right category-menu">
                                                        <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success" href="javascript:void(0);">
                                                            <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business
                                                        </a>
                                                        <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info" href="javascript:void(0);">
                                                            <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>
                                                            Social
                                                        </a>
                                                        <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger" href="javascript:void(0);">
                                                            <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>
                                                            Important
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 single-note-item all-category note-social" style="">
                                    <div class="card card-body">
                                        <span class="side-stick"></span>
                                        <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Change a Design">
                                            Change a
                                            Design <i class="point fa fa-circle ml-1 font-10"></i></h5>
                                        <p class="note-date font-12 text-muted">25 December 2016</p>
                                        <div class="note-content">
                                            <p class="note-inner-content text-muted" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">
                                                Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.
                                            </p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="mr-1"><i class="fa fa-star favourite-note"></i></span>
                                            <span class="mr-1"><i class="fa fa-trash remove-note"></i></span>
                                            <div class="ml-auto">
                                                <div class="category-selector btn-group">
                                                    <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                        <div class="category">
                                                            <div class="category-business"></div>
                                                            <div class="category-social"></div>
                                                            <div class="category-important"></div>
                                                            <span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right category-menu">
                                                        <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success" href="javascript:void(0);">
                                                            <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business
                                                        </a>
                                                        <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info" href="javascript:void(0);">
                                                            <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>
                                                            Social
                                                        </a>
                                                        <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger" href="javascript:void(0);">
                                                            <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>
                                                            Important
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 single-note-item all-category note-business" style="">
                                    <div class="card card-body">
                                        <span class="side-stick"></span>
                                        <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Give review for foods">Give
                                            review for foods <i class="point fa fa-circle ml-1 font-10"></i></h5>
                                        <p class="note-date font-12 text-muted">18 December 2020</p>
                                        <div class="note-content">
                                            <p class="note-inner-content text-muted" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">
                                                Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.
                                            </p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="mr-1"><i class="fa fa-star favourite-note"></i></span>
                                            <span class="mr-1"><i class="fa fa-trash remove-note"></i></span>
                                            <div class="ml-auto">
                                                <div class="category-selector btn-group">
                                                    <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                        <div class="category">
                                                            <div class="category-business"></div>
                                                            <div class="category-social"></div>
                                                            <div class="category-important"></div>
                                                            <span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right category-menu">
                                                        <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success" href="javascript:void(0);">
                                                            <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business
                                                        </a>
                                                        <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info" href="javascript:void(0);">
                                                            <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>
                                                            Social
                                                        </a>
                                                        <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger" href="javascript:void(0);">
                                                            <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>
                                                            Important
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 single-note-item all-category note-important" style="">
                                    <div class="card card-body">
                                        <span class="side-stick"></span>
                                        <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Give salary to employee">Give
                                            salary to employee <i class="point fa fa-circle ml-1 font-10"></i></h5>
                                        <p class="note-date font-12 text-muted">15 Fabruary 2020</p>
                                        <div class="note-content">
                                            <p class="note-inner-content text-muted" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">
                                                Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.
                                            </p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="mr-1"><i class="fa fa-star favourite-note"></i></span>
                                            <span class="mr-1"><i class="fa fa-trash remove-note"></i></span>
                                            <div class="ml-auto">
                                                <div class="category-selector btn-group">
                                                    <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                        <div class="category">
                                                            <div class="category-business"></div>
                                                            <div class="category-social"></div>
                                                            <div class="category-important"></div>
                                                            <span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right category-menu">
                                                        <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success" href="javascript:void(0);">
                                                            <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business
                                                        </a>
                                                        <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info" href="javascript:void(0);">
                                                            <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>
                                                            Social
                                                        </a>
                                                        <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger" href="javascript:void(0);">
                                                            <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>
                                                            Important
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="addnotesmodal" tabindex="-1" role="dialog" aria-labelledby="addnotesmodalTitle" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content border-0">
                                    <div class="modal-header bg-info text-white">
                                        <h5 class="modal-title text-white">Add Notes</h5>
                                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="notes-box">
                                            <div class="notes-content">
                                                <form action="javascript:void(0);" id="addnotesmodalTitle">
                                                    <div class="row">
                                                        <div class="col-md-12 mb-3">
                                                            <div class="note-title">
                                                                <label>Note Title</label>
                                                                <input type="text" id="note-has-title" class="form-control" minlength="25" placeholder="Title" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="note-description">
                                                                <label>Note Description</label>
                                                                <textarea id="note-has-description" class="form-control" minlength="60" placeholder="Description" rows="3"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button id="btn-n-save" class="float-left btn btn-success" style="display: none;">Save</button>
                                        <button class="btn btn-danger" data-dismiss="modal">Discard</button>
                                        <button id="btn-n-add" class="btn btn-info" disabled="disabled">Add</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright © Praveen`s Notes WebApp 2023</div>
                <div>
                    <a href="#">API</a>
                    ·
                    <a href="#">Git Documentation</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->

    <script src="../_resources/script.js"></script>
</body>

</html>