<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= BASEURL ;?>/img/logo.png"><img src="<?= BASEURL ;?>/img/navbarlogo.png" alt="navbarlogo.png" width="50px"></a> 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= BASEURL ?>/#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL ?>/Market">Shopping</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL ?>/Sell">Sell</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profile
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= BASEURL ?>/Profile">Settings</a></li>
            <li><hr class="dropdown-divider"></li>
            <?php if (isset($_SESSION['login']) || isset($_COOKIE['login'])) : ?>
            <li><a class="dropdown-item" href="<?= BASEURL ?>/Logout">Logout</a></li>
            <?php else :?>
            <li><a class="dropdown-item" href="<?= BASEURL ?>/Login">Login</a></li>
            <?php endif; ?>
          </ul>
        </li>
      </ul>
      <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>