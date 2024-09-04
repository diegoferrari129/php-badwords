<?php
    // variables
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!-- content -->
     <div class="container-fluid">
        <div class="row">
            <div class="col-10 offset-1">

                <form action="" method="get">

                    <div class="row">

                        <!-- censorship -->
                        <div class="col-4">

                            <div class="mt-5">

                                <label class="form-label">Inserisci una parola da censurare</label>
                                    <input type="text" name="censorship" class="form-control" placeholder="Parola da censurare...">
                                </div>

                            </div>

                        </div>

                        <!-- text-area  -->
                        <div class="col-12">
                                
                            <div class="my-3">

                                <label class="form-label">Inserisci un testo</label>
                                    <textarea class="form-control" rows="3" placeholder="Testo..."></textarea>
                                </div>

                            </div>

                            <!-- bottone -->
                            <div class="mt-3 text-center">
    
                                <button type="submit">
                                    Invia!
                                </button>
    
                            </div>

                        </div>

                    </div>

                </form>

            </div>
        </div>
     </div>
</body>
</html>