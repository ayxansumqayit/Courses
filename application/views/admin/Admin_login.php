<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover">
    <meta name="color-scheme" content="dark light">
    <title>Login Courses</title>
    <link rel="stylesheet" type="text/css" href="https://clever.webpixels.io/css/main.css">
    <link rel="stylesheet" type="text/css" href="https://clever.webpixels.io/css/utilities.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <script defer="defer" data-domain="webpixels.works" src="https://plausible.io/js/script.js"></script>
</head>

<body>
    <div>
        <div class="px-5 py-5 p-lg-0 h-screen bg-surface-secondary d-flex flex-column justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="col-12 col-md-9 col-lg-6 min-h-lg-screen d-flex flex-column justify-content-center py-lg-16 px-lg-20 position-relative">
                    <div class="row">
                        <div class="col-lg-10 col-md-9 col-xl-7 mx-auto">
                            <div class="text-center mb-12">
                                <h3 class="display-5">👋</h3>
                                <h1 class="ls-tight font-bolder mt-6">Welcome back!</h1>
                                <p class="mt-2">Let's build someting great</p>
                            </div>
                            <form>
                                <div class="mb-5"><label class="form-label" for="email">Email address</label> <input type="email" class="form-control" id="email" placeholder="Your email address"></div>
                                <div class="mb-5">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div><label class="form-label" for="password">Password</label></div>
                                        <div class="mb-2"><a href="./basic-recover.html" class="text-sm text-muted text-primary-hover text-underline">Forgot password?</a></div>
                                    </div><input type="password" class="form-control" id="password" placeholder="Password" autocomplete="current-password">
                                </div>
                                <div class="mb-5">
                                    <div class="form-check"><input class="form-check-input" type="checkbox" name="check_example" id="check-remind-me"> <label class="form-check-label" for="check-remind-me">Keep me logged in</label></div>
                                </div>
                                <div><a href="#" class="btn btn-primary w-full">Sign in</a></div>
                            </form>
                            <div class="py-5 text-center"><span class="text-xs text-uppercase font-semibold">or</span></div>
                            <div class="row g-3">
                                <div class="col-sm-6"><a href="#" class="btn btn-neutral w-full"><span class="icon icon-sm pe-2"><img alt="..." src="/img/social/github.svg"> </span><span>Github</span></a></div>
                                <div class="col-sm-6"><a href="#" class="btn btn-neutral w-full"><span class="icon icon-sm pe-2"><img alt="..." src="/img/social/google.svg"> </span><span>Google</span></a></div>
                            </div>
                            <div class="my-6"><small>Don't have an account?</small> <a href="/pages/authentication/basic-register.html" class="text-warning text-sm font-semibold">Sign up</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/main.js"></script>
</body>

</html>