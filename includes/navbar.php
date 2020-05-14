<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
    <a class="navbar-brand" href="#">Phpauth</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <?php  if (isset($_SESSION['user'])) : ?>
        <div class="nav-item">
            <div class="btn-group">
                <button type="button" class="btn btn-light"><?php echo $_SESSION['user']['username']; ?></button>
                <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                </button>
                <div class="dropdown-menu">
                    <a href="index.php?logout='1'" class="dropdown-item" href="#">Logout</a>
                </div>
            </div>
        </div>
        <?php endif?>
    </div>
</nav>