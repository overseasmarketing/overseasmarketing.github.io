<div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvas" aria-labelledby="OffCanvasLabel">
    <div class="offcanvas-header">
        <h2 class="offcanvas-title" id="OffCanvasLabel">
            Quadmin
        </h2>
        <button type="button" class="btn btn-danger btn-sm text-white" data-bs-dismiss="offcanvas">
            Close
        </button>
    </div>
    <div class="offcanvas-body">
        <button class="btn btn-light w-100 mt-2 text-left" onclick="changeFrameSrc('home')" data-bs-dismiss="offcanvas">
            <span class="icon">
                <i class="fa fa-solid fa-house"></i>
                &nbsp;
            </span>
            Home
        </button>
        <button class="btn btn-light w-100 mt-2 text-left" onclick="changeFrameSrc('database_manager/')"
            data-bs-dismiss="offcanvas">
            <span class="icon">
                <i class="fa fa-solid fa-database"></i>
                &nbsp;
            </span>
            DB Manager
        </button>
        <button class="btn btn-light w-100 mt-2 text-left" onclick="changeFrameSrc('send-mail')"
            data-bs-dismiss="offcanvas">
            <span class="icon">
                <i class="fa fa-solid fa-envelope"></i>
                &nbsp;
            </span>
            Mail Sender
        </button>
        <button class="btn btn-danger w-100 mt-2 text-left" onclick="logout()" data-bs-dismiss="offcanvas">
            <span class="icon">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                &nbsp;
            </span>
            Logout
        </button>
    </div>
</div>