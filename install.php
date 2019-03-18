<html>
<style>
    body {
        padding: 30px;
    }
    form {
        padding: 20px;
        width: 250px;
    }
</style>
<body>

<form action="https://api.telegram.org/bot878912921:AAEcE-PdGB28uUcuC5ySdV7E0d4ksob1A2g/setwebhook" method="post" enctype="multipart/form-data">
    <label for="file">Select Certificate to upload:<br>
        <input id="file" type="file" name="certificate" id="fileToUpload">
    </label>
    <hr>
    <label for="url">URL with HTTPS:<br> 
        <input id="url" type="text" name="url"  value="https://">
    </label>
    <hr>
    <input type="submit" value="set" name="submit">
    <a href="https://api.telegram.org/bot878912921:AAEcE-PdGB28uUcuC5ySdV7E0d4ksob1A2g/deleteWebhook"><button>delete</button></a>
    <a href="https://api.telegram.org/bot878912921:AAEcE-PdGB28uUcuC5ySdV7E0d4ksob1A2g/getWebhookInfo"><button>info</button></a>
</form>

</body>
</html>