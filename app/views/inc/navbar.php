<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
  <div class="container">
      <a class="navbar-brand" href="<?= URL_ROOT; ?>"><?= SITE_NAME; ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#togglenavbar" aria-controls="togglenavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="togglenavbar">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?= URL_ROOT ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= URL_ROOT; ?>/pages/about">About</a>
          </li>          
        </ul>
        <ul class="navbar-nav ml-auto">
        <?php if(isset($_SESSION['user_id'])) : ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= URL_ROOT ?>/users/logout">Log out</a>
            </li>
        <?php else : ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= URL_ROOT ?>/users/register">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= URL_ROOT ?>/users/login">Login</a>
          </li>
        <?php endif; ?>
        </ul>

      </div>
    </div>  
  </nav>