<!DOCTYPE html>
<html lang="en">

<?php include "header.html"; ?>

<body>
    <div class="container-fluid bg-height-vh">
        <div class="row">
            <div class="col-6 row bg-color-side-left justify-content-center bg-height-vh">
                <div class="bg-height-vh col-12 w-50 align-content-center">
                    <div class="container ">
                        <h3>Register Page</h3>
                    </div>
                    <div class="container">
                        <form class="form-horizontal" action="Login.html" method="post">
                            <label for="name">Name  </label>
                            <input type="text" class="form-control" id="name" name="name" required>

                            <label for="User">Username  </label>
                            <input type="text" class="form-control" id="username" name="username" required>

                            <label for="email">Email  </label>
                            <input type="email" class="form-control" id="email" name="email" required>

                            <label for="password">Password  </label>
                            <input type="password" class="form-control" id="password" name="password" required>

                            <label for="cpassword">Confirm Password  </label>
                            <input type="password" class="form-control" id="cpassword" name="cpassword" required>
                            <!-- <label for="message">Message :</label> -->
                            <!-- <textarea id="message" class="form-control" name="message" rows="3" required></textarea> -->
                            <br>
                            <button class="btn btn-primary" type="submit">Register</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <!-- right contant -->
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script> -->

    </script>
</body>

</html>

<!-- <script>
        async function loadHead() {
            const response = await fetch("header.html");
            const headContent = await response.text();
            document.querySelector("head").innerHTML = headContent;
        }
        loadHead();
    </script> -->