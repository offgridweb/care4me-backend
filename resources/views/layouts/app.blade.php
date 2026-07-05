<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Page not found</title>
    <meta name="robots" content="noindex" />   
	
</head>
<body>
		

<div id="app">

    <div class="not-found-page">

        <div class="not-found-card">

            <div class="code">404</div>

            <h1>Page not found</h1>

            <p>
                Sorry, the page you are looking for does not exist
                or may have been moved.
            </p>

            <div class="actions">
                <a href="https://care4me.org.uk" class="btn-home">
                    Back to homepage
                </a>
            </div>

        </div>

    </div>

</div>

<style>
.not-found-page{
    min-height:70vh;
    display:flex;
    align-items:center;
    justify-content:center;
    padding:40px 20px;
    background:#f8fafc;
}

.not-found-card{
    background:#fff;
    padding:60px 40px;
    border-radius:20px;
    text-align:center;
    max-width:600px;
    width:100%;
    box-shadow:0 10px 40px rgba(0,0,0,0.08);
}

.not-found-card .code{
    font-size:90px;
    font-weight:700;
    line-height:1;
    color:#1e5fa8;
    margin-bottom:20px;
}

.not-found-card h1{
    font-size:36px;
    margin-bottom:15px;
    color:#222;
}

.not-found-card p{
    font-size:17px;
    line-height:1.6;
    color:#666;
    margin-bottom:35px;
}

.btn-home{
    display:inline-block;
    padding:14px 28px;
    background:#1e5fa8;
    color:#fff;
    border-radius:10px;
    text-decoration:none;
    font-weight:600;
    transition:0.2s ease;
}

.btn-home:hover{
    background:#174b85;
    color:#fff;
    text-decoration:none;
}
</style>


</body>
</html>