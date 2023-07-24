<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

        <input type="file" name="image" id="file-input">
        <button>Enviar</button>

    </form>
    <script>
        function compressImage(file, quality, callback) {
            // Crear un objeto URL desde el archivo
            const url = URL.createObjectURL(file);
            const img = new Image();

            // Cuando la imagen se haya cargado
            img.onload = function() {
                // Crear un canvas
                const canvas = document.createElement('canvas');
                const ctx = canvas.getContext('2d');
                
                // Ajustar el tamaño del canvas al de la imagen
                canvas.width = this.naturalWidth;
                canvas.height = this.naturalHeight;

                // Dibujar la imagen en el canvas
                ctx.drawImage(this, 0, 0);

                // Extraer la imagen del canvas en un formato comprimido
                canvas.toBlob(callback, 'image/jpeg', quality);

                // Liberar el objeto URL
                URL.revokeObjectURL(url);
            };

            // Empezar a cargar la imagen
            img.src = url;
        }

        document.querySelector('input[type=file]').addEventListener('change', function(event) {
            const file = event.target.files[0];

            // Comprimir la imagen
            compressImage(file, 0.6, function(compressedFile) {
                // Crear un objeto FormData y agregar el archivo
            const formData = new FormData();
            formData.append('image', compressedFile, 'images.jpg');

                // Enviar el objeto FormData al servidor con fetch
                fetch('prueba3.php', {
                    method: 'POST',
                    body: formData
                }).then(response => {
                    // Aquí puedes manejar la respuesta del servidor.
                    // Por ejemplo, puedes verificar si la carga fue exitosa.
                    if (!response.ok) {
                        throw new Error('Error en la carga');
                    }
                    return response.text();
                }).then(data => {
                    // 'data' es el cuerpo de la respuesta convertido a JSON.
                    // Aquí puedes usarlo como desees.
                    console.log("Paso la jaiba");
                }).catch(error => {
                    console.error('Error:', error);
                });
            });
        });
    </script>
</body>
</html>