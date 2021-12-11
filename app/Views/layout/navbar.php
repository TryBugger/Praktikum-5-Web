    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #8cc5f5">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="/image/logoIOT.png" alt="logo" width="45" height="45">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link <?= $activeNav[0] ?>" href="/">Home</a>
                    <a class="nav-link <?= $activeNav[1] ?>" href="/device">Device</a>
                    <a class="nav-link disabled" href="#">Device List</a>
                </div>
            </div>
        </div>
    </nav>