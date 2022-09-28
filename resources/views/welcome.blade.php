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
            <example-component></example-component>
           <v-main>
                <v-container> 
                    <example-component1></example-component1>
                    
                </v-container>
            </v-main>
        </v-app>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>