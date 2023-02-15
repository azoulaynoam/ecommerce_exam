<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
</head>

<body class="antialiased">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-header">
                    <h3>Upload Products</h3>
                </div>
                @if (session('status'))
                    <div class="alert alert-primary" role="alert">
                        {{ session('status') }}
                    </div>
                @else
                    <div class="alert alert-dark" role="alert">
                        Please upload a file with the following format:
                        <ul>
                            <li>(0) ID (Number) (Unique)</li>
                            <li>(1) Product Name (Unique)</li>
                            <li>(2) Product Price</li>
                            <li>(3) Product Discount</li>
                            <li>(4) Favorite</li>
                        </ul>
                        Do not include a header row!!!
                    </div>
                @endif
                <form class="form-group" action="/import" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Upload Products</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" name="file" accept=".xls,.xlsx,.csv" class="custom-file-input"
                                id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" />
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Import
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>
