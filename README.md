# Webdev Container

Dieser Container dient einzig Demozwecken im Zuge der Vorlesung Webendtwicklung an der DHBW für den Jahrgang WWI2021a.  
Benutzt den Container nicht in produktiven Umgebungen, dafür ist er nicht ausgelegt.

## Docker installieren
Die Doku zum Installieren von Docker findet ihr hier:  
https://docs.docker.com/engine/install/

## Umgebung anlegen
Legt euch einen Ordner an, in dem ihr arbeiten wollt:  
z.B. /home/niels/project/wwi2021a/webdev/coding

## Container starten
Kopiert die Datei `docker-compose.yml` in den oben erstellten Ordner.  

Dann wechselt in die Kommandozeile und dort in den selben Ordner.  
Dann startet ihr die Container mit:
```
docker-compose up -d
```
Das dauert einen Moment, da die Images für die Container beim ersten Start runtergeladen werden müssen.

## Testdatei anlegen
Sind die erfolgreich Container gestartet, wurden in dem Ordner zwei Unterordner angelegt:
- db
- htdocs

wechselt in den Ordner `htdocs` und erstellt eine Datei `ìndex.php` mit folgendem Inhalt:

```php
<?
    phpinfo();
```

Speicher die Datei ind ruft im Browser dir URL http://localhost:8080/ auf.  
Wenn ihr jetzt eine PHP Version 8.1.10 sehr, hat alles geklappt.