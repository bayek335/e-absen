<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">E-Absen</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link {{Request::is('/')?'active':''}}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{Request::is('/blog*')?'active':''}}" href="/blog">Blog</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{Request::is('/students*')?'active':''}}" href="/students">Students</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
</div>
