<?php
require("../../../config.php");
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Dashboard</title>
    <meta name="description" content="" />
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />
    <script src="../assets/vendor/js/helpers.js"></script>
    <script src="../assets/js/config.js"></script>
</head>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="../../index.php" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <img src="../../../assets/img/logosvg.svg" alt="">
                        </span>
                        <span class="app-brand-text demo menu-text fw-bolder ms-2">Mindzone</span>
                    </a>

                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>
                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item">
                        <a href="dashboard.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>
                    <!-- Gestions -->
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Gestions</span>
                    </li>
                    <li class="menu-item active">
                        <a href="d-g-users.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-user"></i>
                            <div data-i18n="Basic">Users</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="d-g-resv.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-calendar"></i>
                            <div data-i18n="Basic">Reservations</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="d-g-recla.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-box"></i>
                            <div data-i18n="Basic">Reclamations</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="d-g-blogs.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bxl-blogger"></i>
                            <div data-i18n="Basic">Blogs</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="d-g-opin.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-like"></i>
                            <div data-i18n="Basic">Opinions</div>
                        </a>
                    </li>
                    </li>

                    <!-- Pages -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Pages</span></li>
                    <li class="menu-item">
                        <a href="../../profil.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-user-circle"></i>
                            <div data-i18n="Basic">Profile</div>
                        </a>
                        <a href="../../index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-heart"></i>
                            <div data-i18n="Basic">Home</div>
                        </a>
                    </li>
                </ul>
            </aside>
            <div class="layout-page">
                <!-- Navbar -->
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <i class="bx bx-search fs-4 lh-0"></i>
                                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..."
                                    aria-label="Search..." />
                            </div>
                        </div>
                        <!-- /Search -->
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="../assets/img/avatars/1.png" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="../assets/img/avatars/1.png" alt
                                                            class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">
                                                        <?php echo $userinfo['nom'] . ' ' . $userinfo['prenom']; ?>
                                                    </span>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../../profil.php">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../../logout.php">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Users</h4>
                        <div class="row">
                            <div class="card">
                                <h5 class="card-header">Users List</h5>
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Prename</th>
                                                <th>Email</th>
                                                <th>Admin</th>
                                                <th>Account</th>
                                                <th>Created</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            <?php
                                            $SelectionUser = $bdd->prepare("SELECT * FROM users ORDER BY id");
                                            $SelectionUser->execute();

                                            while ($user = $SelectionUser->fetch()) {
                                                ?>
                                                <td>
                                                    <?php echo $user['id']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $user['nom']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $user['prenom']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $user['email']; ?>
                                                </td>
                                                <td>
                                                    <?php if ($user['isAdmin'] == 1) {
                                                        echo "Yes";
                                                    } else {
                                                        echo "No";
                                                    } ?>
                                                </td>
                                                <td>
                                                    <?php if ($user['typeCompte'] == 1) {
                                                        echo "Agent Entretient";
                                                    } else {
                                                        echo "User";
                                                    } ?>
                                                </td>
                                                <td>
                                                    <?php echo $user['datecreation']; ?>
                                                </td>
                                                <td>
                                                    <a type="button" data-bs-toggle="modal"
                                                        href="./d-g-users.php#?editMode=1&editid=<?php echo $user['id']; ?>"
                                                        data-bs-target="#basicModal" class="btn btn-icon btn-primary">
                                                        <span class="tf-icons bx bx-edit-alt"></span>
                                                    </a>
                                                    <button type="button" class="btn btn-icon btn-primary">
                                                        <span class="tf-icons bx bx-x"></span>
                                                    </button>
                                                </td>
                                            </tbody>
                                        <?php } ?>
                                        <div class="modal fade" id="basicModal" tabindex="-1" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel1">Edit User</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                    <?php
                                                    if (isset($_GET['editMode']) && !empty($_GET['editMode']) && isset($_GET['editid']) && !empty($_GET['editid'])) {
                                                        if ($_GET['editid'] == $user['id']) {
                                                            if (isset($_POST['FormEdit'])) {
                                                                if (!empty($_POST['email']) && !empty($_POST['nom']) && !empty($_POST['prenom'])) {
                                                                    $email = htmlspecialchars($_POST['email']);
                                                                    $nom = htmlspecialchars($_POST['nom']);
                                                                    $prenom = htmlspecialchars($_POST['prenom']);
                                                                    $isAdmin = htmlspecialchars($_POST['isAdmin']);
                                                                    $typeCompte = htmlspecialchars($_POST['typeCompte']);
        
                                                                    $update = $bdd->prepare('UPDATE users SET nom = ?, prenom = ?, email = ?, isAdmin = ?, typeCompte = ? WHERE id = ?');
                                                                    $update->execute(array($nom, $prenom, $email, $isAdmin, $typeCompte, $user['id']));
                                                                    echo "<script>location.href = './users.php'</script>";
                                                                }
                                                            }
                                                            ?>
                                                            
                                                                <form method="POST">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="basic-default-fullname">ID</label>
                                                                        <input type="text" class="form-control"
                                                                            id="basic-default-fullname"
                                                                            name="id"
                                                                            placeholder="<?php echo $user['id']; ?>">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="basic-default-company">Name</label>
                                                                        <input type="text" class="form-control"
                                                                            id="basic-default-company"
                                                                            name="nom"
                                                                            placeholder="<?php echo $user['nom']; ?>">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="basic-default-company">Prename</label>
                                                                        <input type="text" class="form-control"
                                                                            id="basic-default-company"
                                                                            name="prenom"
                                                                            placeholder="<?php echo $user['prenom']; ?>">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="basic-default-email">Email</label>
                                                                        <div class="input-group input-group-merge">
                                                                            <input type="text" id="basic-default-email"
                                                                                class="form-control"
                                                                                name="email"
                                                                                placeholder="<?php echo $user['email']; ?>"
                                                                                aria-describedby="basic-default-email2">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="basic-default-phone">Admin</label>
                                                                            <select class="form-select" id="inputGroupSelect04"
                                                                            name="isAdmin"
                                                                                aria-label="Example select with button addon"
                                                                                placeholder="<?php echo $user['isAdmin']; ?>">
                                                                                <option value="1" <?php if ($user['isAdmin'] == 1) { ?>selected<?php } ?>>Yes</option>
                                                                                <option value="0" <?php if ($user['isAdmin'] == 0) { ?>selected<?php } ?>>No</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="basic-default-phone">Account
                                                                                Type</label>
                                                                            <select class="form-select" id="inputGroupSelect04"
                                                                                aria-label="Example select with button addon"
                                                                                name="typeCompte"
                                                                                placeholder="<?php echo $user['typeCompte']; ?>">
                                                                                <option value="1" <?php if ($user['typeCompte'] == 1) { ?>selected<?php } ?>>Agent Entretient</option>
                                                                                <option value="0" <?php if ($user['typeCompte'] == 0) { ?>selected<?php } ?>>User</option>
                                                                            </select>
                                                                        </div>
                                                                        <button type="submit" name="FormEdit"
                                                                            class="btn btn-primary">Edit</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }} ?>
                                    </table>
                                </div>
                        </div>
                    </div>
                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div
                            class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                            <div class="mb-2 mb-md-0">
                                ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                , made with ❤️ by
                                <a href="https://themeselection.com" target="_blank"
                                    class="footer-link fw-bolder">AFTERMATH</a>
                            </div>
                            <div>
                            </div>
                    </footer>
                    <div class="content-backdrop fade"></div>
                </div>
            </div>
        </div>
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/js/menu.js"></script>
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/dashboards-analytics.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>