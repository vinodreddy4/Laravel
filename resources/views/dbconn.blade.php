
<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Laravel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ asset('JQuery\jquery-3.7.1.js') }}"></script></head>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    

<body>
    <h1>Welcome to Laravel</h1>
    <div>
    <button id="popoverButton" type="button" class="btn btn-primary btn-lg" data-bs-toggle="popover" title="ESM in Browser" data-bs-content="Bang!">Custom popover</button>

</div>
    <script>
        $(document).ready(function () {
            alert("Welcome to Jquery");
        });
        </script>
    <?php
     try {
        DB::connection()->getPdo();
        echo "Database connection is established successfully.";
    } catch (\Exception $e) {
        echo "Could not connect to the database. Error: ".$e->getMessage();
    }
    ?> 
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>







