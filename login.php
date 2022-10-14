<?php  include './components/head.php' ?>

<body>
    <?php  include './components/navbar.php' ?>
    <div class="container my-5">
        <h1 class="text-center mb-4">Please Register here</h1>
        <hr>
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email
                    address</label>
                <input type="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your
                    email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1"
                    class="form-label">Password</label>
                <input type="password" class="form-control"
                    id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input"
                    id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me
                    out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>