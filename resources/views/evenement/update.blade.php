<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gest-Events</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .btn-back {
            position: fixed;
            top: 15px;
            right: 15px;
            z-index: 110;
            background-color: #007bff;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        .btn-back:hover {
            background-color: #0056b3;
        }
    </style>

</head>

<body>

    <div class="container text-center">
        <div class="row">
            <div class="col S12">
                <h1>MODIFIER UN EVENEMENT</h1>
                <button class="btn btn-back" onclick="history.back()">
                    <i class="fas fa-arrow-left"></i>
                </button>
                <hr>


                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                @foreach ($errors->all() as $error)
                    <li class="alert alert-danger">{{ $error }}</li>
                @endforeach

                <form action="/update" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input type="text" name="id" style="display: none;" value="{{ $evenements->id }}">

                    <div class="form-control mt1">
                        <input type="text" class="form-control" id="nom" name="nom"
                            value="{{ $evenements->nom }}" placeholder="NOM">
                    </div>
                    <div class="form-control mt1">
                        <input type="textarea" class="form-control" id="Description" name="Description"
                            value="{{ $evenements->Description }}" placeholder="DESCRIPTION" required>
                    </div>
                    <div class="form-control mt1">
                        <input type="date" class="form-control" id="date" name="date"
                            value="{{ $evenements->date }}" placeholder="DATE">
                    </div>
                    <div class="form-control mt1">
                        <input type="text" class="form-control" id="lieu" name="lieu"
                            value="{{ $evenements->lieu }}" placeholder="LIEU">
                    </div>
                    <div class="form-control mt1">
                        <input type="time" class="form-control" id="heure" name="heure"
                            value="{{ $evenements->heure }}" placeholder="HEURE">
                    </div>
                    <div class="form-control mt1">
                        <input type="file" class="form-control" id="photo" name="image"
                            value="{{ $evenements->image }}" placeholder="IMAGE">

                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Modifier un evenement</button>

                    <a href="/evenement" class="btn btn-danger">Revenir à la liste des étudiants </a>

                </form>


            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
