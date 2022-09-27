<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@5.x/css/materialdesignicons.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div id="app">
        <v-app app>
           <v-main>
                <v-container> 
                    <example-component></example-component>
                </v-container>
            </v-main>
        </v-app>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>