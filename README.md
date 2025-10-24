# Proyecto Club Pandora

## Desarrollado por:
- Tomás Graziano
- Juan Cruz

## Configurar Apache XAMPP
- El XAMPP debe apuntar a la carpeta `apps` de este proyecto.

Debe configurar el httpd.conf para que apunte a la carpeta `apps` de este proyecto.

El archivo se encuentra en:

```
C:\xampp\apache\conf\httpd.conf
```

Dentro del archivo busque estas dos lineas:

```
DocumentRoot "C:/xampp/htdocs"
<Directory "C:/xampp/htdocs">

```

Y cambielas por la locación de este proyecto y el folder app, por ejemplo:

```
DocumentRoot "C:/Users/Tomas/OneDrive/Escritorio/pandora-tenis/app"
<Directory "C:/Users/Tomas/OneDrive/Escritorio/pandora-tenis/app">
```


Correr el apache de xampp e ingresar a <a href="http://localhost">http://localhost</a> y debe ser el contenido de index.php
